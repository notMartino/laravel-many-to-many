<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
    ];

    public function location(){
        return $this -> belongsTo(Location::class);
    }
}
