<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [

        'address',
        'state',
        'postcode'
    ];

    public function employees(){

        return $this->hasMany(Employee::class);
    }
}
