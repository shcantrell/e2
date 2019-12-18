<?php
namespace App\Controllers;

class PlanController extends Controller
{
    public function index()
    {
        return $this->app->view('index');
    }

    public function plans()
    {
        return $this->app->view('plans.index');
    }

    public function showPlan()
    {
        $id = $this->app->param('id');

        if (is_null($id)) {
            $this->app->redirect('plans.plan');
        }

        $date = $this->app->db()->findById('date', $id);

        if (is_null($date)) {
            return $this->app->view('plans.missing', ['id' => $id]);
        }

        $calories = $this->app->db()->findByColumn('calories', 'date_id', '=', $id);

        $foodItem = $this->app->old('foodItem');

        return $this->app->view('plans.plan', [
            'foodItem' => $foodItem,
            'calories' => $calories,
            'date' => $date,
        ]);
    }

    public function initiatePlan()
    {
        $weekday = $this->app->input('weekday');
        $month = $this->app->input('month');
        $day = $this->app->input('day');
        $year = $this->app->input('year');
        $id = $this->app->input('date_id');


        $this->app->validate([
            'weekday' => 'required',
            'month' => 'required|numeric|minLength:2',
            'day' => 'required|numeric|minLength:2',
            'year' => 'required|numeric|minLength:4',
        ]);

        $input = [
            'weekday' => $weekday,
            'month' => $month,
            'day' => $day,
            'year' => $year,
            'id' => $id,
        ];

        $this->app->db()->insert('date', $input);
       
        $this->app->view('plans.plan', $input);
    }

    public function addFoodItem()
    {
        $foodItem = $this->app->input('foodItem');
        $calories = $this->app->input('calories');

        $this->app->validate([
            'foodItem' => 'required|alphaNumeric',
            'calories' => 'required|numeric|maxLength:15',
        ]);

        $foodInput = [
            'foodItem' => $foodItem,
            'calories' => $calories,
        ];

        $this->app->db()->insert('fooditems', $foodInput);
        
        $this->app->redirect('/plans/plan?id='.$id, ['' => $foodItem]);
    }

    // public function addFoodItem()
    // {
    //     $foodItem = $this->app->input('foodItem');
    //     $calories = $this->app->input('calories');

    //     $this->app->validate([
    //         'foodItem' => 'required|alphaNumeric',
    //         'calories' => 'required|numeric|maxLength:15',
    //     ]);

    //     $foodInput = [
    //         'foodItem' => $foodItem,
    //         'calories' => $calories,
    //     ];

    //     $this->app->db()->insert('fooditems', $foodInput);
        
    //     $this->app->view('plan=?'.$id, $foodInput);
    // }
}
