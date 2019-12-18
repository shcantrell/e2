<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('date', [
            'weekday' => 'varchar(10)',
            'month' => 'tinyint(2)',
            'day' => 'tinyint(2)',
            'year' => 'tinyint(4)',
        ]);

        $this->app->db()->createTable('fooditems', [
            'foodItem' => 'varchar(225)',
            'calories' => 'tinyint(10)',
        ]);

        dump('Migration complete; check the database for your new tables.');
    }

    public function seedDates()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $dates = [
                'weekday' => $faker->dayOfWeek,
                'month' => $faker->month,
                'day' => $faker->dayOfMonth,
                'year' => $faker->year,
            ];

            $this->app->db()->insert('date', $dates);
        }
        
        dump('Seeding of "date" table complete; check the database for your new tables.');
    }

    // public function seedFood()
    // {
    //     $faker = \Faker\Factory::create();

    //     for ($i = 0; $i < 10; $i++) {
    //         $dates = [
    //             'words' => $faker->dayOfWeek,
    //             'month' => $faker->month,
    //             'day' => $faker->dayOfMonth,
    //             'year' => $faker->year,
    //         ];

    //         $this->app->db()->insert('date', $dates);
    //     }
        
    //     dump('Seeding of "date" table complete; check the database for your new tables.');
    // }

    public function fresh()
    {
        $this->migrate();
        $this->seedDates();
    }
}
