<?php

use Illuminate\Database\Seeder;

class CategoryToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayName= array(
            'Martelos','Tesouras','Serrotes','Chaves'
        );

        foreach ($arrayName as $array){
            \DB::table('category_tools')->insert([
                'name'      => $array ,
                'active'=>1,
                'user_id'=>2,
                'created_at'=> now(),
                'updated_at' =>now(),
            ]);
        }
    }
}
