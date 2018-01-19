<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function showAllCustomers()
    {
        //checking deployment
        // $customers = Customer::where('age','>=',34)
        //                         ->where('type',"=",1)
        //                         ->orderBy('age')
        //                         ->take(1)
        //                         ->get();
        $customers = Customer::all();
        // dd($customers);
        return view('customers.index',
                    ['customers' => $customers]);
    }

    public function showCustomer(Customer $customer)
    {
        dd($customer->mobile_number);
    }

    public function create(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->mobile_number = $request->mobile_number;
        $customer->age = $request->age;
        $customer->type = $request->type;
        $customer->save();

        return back();
    }

    public function update(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer->name = isset($request->name) ? $request->name : $customer->name;
        $customer->address = isset($request->address)? $request->address : $customer->address;
        $customer->mobile_number = isset($request->mobile_number)? $request->mobile_number : $customer->mobile_number;
        $customer->age = isset($request->age)? $request->age : $customer->age;
        $customer->type = isset($request->type)? $request->type : $customer->type;
        $customer->save();

        return back();

    }

    public function delete(Request $request,Customer $customer)
    {
        $customer->delete();

        return back();
    }

}
