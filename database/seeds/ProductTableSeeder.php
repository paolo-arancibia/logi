<?php
/**
 * Created by PhpStorm.
 * User: paolex
 * Date: 19-10-15
 * Time: 08:28 PM
 */

namespace database\seeds;


use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ProductTableSeeder extends Seeder  {

    public function run()
    {
        $faker = Faker::create();
        //$table = 'lalalal';
        //$this->command->getOutput()->writeln("<info>product table seeder table</info> $table");

        DB::table('products')->delete();
        DB::unprepared('alter table products auto_increment = 1');

        for( $i = 1; $i <= env('MaxProductsSeeds') ; $i++ )
        {
            Product::create([
                'name' => $faker->word,
                'price' => $faker->randomFloat(),
                'browsed' => $faker->boolean(),
            ]);
        }
    }

}