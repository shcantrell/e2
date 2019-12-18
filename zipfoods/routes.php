<?php

return [
    '/' => ['AppController', 'index'],
    '/about' => ['AppController', 'about'],
    '/contact' => ['AppController', 'contact'],
    '/products' => ['ProductController', 'index'],
    '/product' => ['ProductController', 'show'],
    '/products/add-product' => ['ProductController', 'addProduct'],
    '/products/show-new-product' => ['ProductController', 'showNewProduct'],
    '/products/save-review' => ['ProductController', 'saveReview'],
];
