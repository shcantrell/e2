<?php
namespace App\Controllers;

// use App\Products;

class ProductController extends Controller
{
    private $products;
    
    // public function __construct($app)
    // {
    //     parent::__construct($app);
    //     $this->products = new Products($this->app->path('database/products.json'));
    // }

    public function index()
    {
        return $this->app->view('products.index', [
            'products' => $this->app->db()->all('products')
        ]);
    }

    public function show()
    {
        $id = $this->app->param('id');

        if (is_null($id)) {
            $this->app->redirect('/products');
        }

        // $product = $this->products->getById($id);
        $product = $this->app->db()->findById('products', $id);

        if (is_null($product)) {
            return $this->app->view('products.missing', ['id' => $id]);
        }

        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);

        $confirmationName = $this->app->old('confirmationName');

        return $this->app->view('products.show', [
            'product' => $product,
            'reviews' => $reviews,
            'confirmationName' => $confirmationName,
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
            'name' => 'required',
            'content' => 'required|minLength:200',
        ]);
        
        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');
        
        $data = [
            'name' => $name,
            'content' => $content,
            'product_id' => $id,
        ];

        $this->app->db()->insert('reviews', $data);

        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
    }

    public function addProduct()
    {
        return $this->app->view('products.add-product');
    }

    public function showNewProduct()
    {
        $name = $this->app->input('name');
        $description = $this->app->input('description');
        $price = $this->app->input('price');
        $available = $this->app->input('available');
        $weight = $this->app->input('weight');
        $perishable = $this->app->input('perishable');

        $this->app->validate([
            'name' => 'required|alpha',
            'description' => 'required|minLength:255',
            'price' => 'required|numeric',
            'available' => 'required|numeric',
            'weight' => 'required|numeric',
            'perishable' => 'required|numeric',
        ]);

        $newData = [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'available' => $available,
            'weight' => $weight,
            'perishable' => $perishable,
        ];
        
        $this->app->db()->insert('products', $newData);

        return $this->app->view('products.show-new-product', $newData);
    }
}
