<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => 'Clothing',
                'description' => 'Men, women, boys and girls clothing',
                'parent_id' => 0,
                'is_publish' => 1,
            ]
        )
    }
}
