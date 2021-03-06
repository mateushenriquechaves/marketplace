<?php

use Illuminate\Database\Seeder;
use App\Order;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          $faker = Faker::create();

          $random = rand(1,2);

          if($random == 1)
          {
              $typeOrder = "Unitaria";

          }else if($random == 2){

              $typeOrder = "Centro";

          }

          foreach (range(1, 600) as $i ) {
                  $table = Order::create([
                        'name' => $faker->name,
                        'phone' => $faker->phoneNumber,
                        'address' => $faker->address,
                        'amount' => $faker->numberBetween(1,200),
                        'idProdutos' => $faker->numberBetween(2,4),
                        'price' => $faker->numberBetween(1,100),
                        'deliveryDate' => $faker->dateTime($min = 'now', $timezone = date_default_timezone_get()),
                        'status' => 'Pedido feito'
                  ]);
          }
    }
}
