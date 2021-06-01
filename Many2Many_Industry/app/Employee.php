<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [

        'firstname',
        'lastname',
        'ral'
    ];

    public function location(){

        return $this->belongsTo(Location::class);
    }

    public function tasks(){

        return $this->belongsTo(Task::class);
    }
}
