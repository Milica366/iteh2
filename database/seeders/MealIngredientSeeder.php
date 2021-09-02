<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MealIngredient;
class MealIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $made=0;
       for ($i=0; $i < 1000; $i++) { 
          try {
            MealIngredient::factory()->count(1)->create();
          
            $made=$made+1;
            if($made==60){
                break;
            }
          } catch (\Throwable $th) {
           
          }
       }
    }
}
