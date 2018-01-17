<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function orders()
    {
        $this->hasMany(Order::class);
    }
}
