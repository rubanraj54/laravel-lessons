<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function showAllCustomers()
    {
        //checking deployment
        $customers = Customer::all();
        return view('customers.index',['customers' => $customers]);
    }

    public function showCustomer(Customer $customer)
    {
        dd($customer->mobile_number);
    }
}
