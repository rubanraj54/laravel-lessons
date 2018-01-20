<?php

namespace App\Observers;
use App\Customer;

class CustomerObserver

{
    public function created(Customer $customer){
        // dd("new Customer is created and sending mail to customer");
    }

}
