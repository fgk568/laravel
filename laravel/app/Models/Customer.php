<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $guarded = ['id'];

    public function activities() {
        return hasMany(Customer::class);
    }

    public function meals() {
        return hasMany(Meal::class);
    }
}
