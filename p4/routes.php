<?php

return [
    '/' => ['AppController', 'index'],
    '/index' => ['AppController', 'index'],
    '/create-table' => ['PlanController', 'createTable'],
    '/plans' => ['PlanController', 'plans'],
    '/plans/plan' => ['PlanController', 'showPlan'],
    '/plans/initiate-plan' => ['PlanController', 'initiatePlan'],
    '/plans/day-plan' => ['PlanController', 'dayPlan'],
    '/plans/add-date-table' => ['PlanController', 'addDateTable'],
    '/plans/add-food-item' => ['PlanController', 'addFoodItem'],
    '/practice' => ['AppController', 'practice'],
];
