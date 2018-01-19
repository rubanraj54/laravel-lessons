<?php

namespace App;

use App\Events\CustomerCreated;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    // protected $dispatchesEvents = [
    //     "created" => CustomerCreated::class
    // ];


    public function orders()
    {
        $this->hasMany(Order::class);
    }
}
