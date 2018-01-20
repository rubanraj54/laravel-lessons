<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i < 10; $i++) {
        //     $customer = new Customer;
        //     $customer->name = "Penny";
        //     $customer->address = "US";
        //     $customer->mobile_number = rand(10000,399999);
        //     $customer->age = rand(10,50);
        //     $customer->type = rand(0,1);
        //     $customer->save();
        // }
        factory(Customer::class,10)->create();
    }
}
