<?php

use Illuminate\Database\Seeder;

use App\Order;

use App\Dish;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class, 200) -> create();
    }
}
