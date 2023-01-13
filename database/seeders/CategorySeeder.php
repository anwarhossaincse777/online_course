<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert(

            [

            'name' => fake()->name(),
            'slug'=>fake()->slug,
            'logo'=>'',
            'priority'=>1,
            'enable_homepage'=>1,
            'description'=>'',
            'parent_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),

        ],

            [

                'name' => fake()->name(),
                'slug'=>fake()->slug,
                'logo'=>'',
                'priority'=>2,
                'enable_homepage'=>1,
                'description'=>'',
                'parent_id'=>null,
                'created_at'=>now(),
                'updated_at'=>now(),

            ], [

                'name' => fake()->name(),
                'slug'=>fake()->slug,
                'logo'=>'',
                'priority'=>3,
                'enable_homepage'=>1,
                'description'=>'',
                'parent_id'=>4,
                'created_at'=>now(),
                'updated_at'=>now(),

            ],
            [

                'name' => fake()->name(),
                'slug'=>fake()->slug,
                'logo'=>'',
                'priority'=>4,
                'enable_homepage'=>1,
                'description'=>'',
                'parent_id'=>null,
                'created_at'=>now(),
                'updated_at'=>now(),

            ],
            [

                'name' => fake()->name(),
                'slug'=>fake()->slug,
                'logo'=>'',
                'priority'=>5,
                'enable_homepage'=>1,
                'description'=>'',
                'parent_id'=>4,
                'created_at'=>now(),
                'updated_at'=>now(),

            ],
            [

                'name' => fake()->name(),
                'slug'=>fake()->slug,
                'logo'=>'',
                'priority'=>6,
                'enable_homepage'=>1,
                'description'=>'',
                'parent_id'=>null,
                'created_at'=>now(),
                'updated_at'=>now(),

            ]

        );
    }
}
