<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name'
    ];

    public function employees(){
        return $this -> belongsToMany(Employee::class);
    }
}
