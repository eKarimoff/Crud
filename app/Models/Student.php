<?php

namespace App;
//use Illuminate\datebase\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{    
    // use HasFactory;
    protected $fillable = [
        'studname', 'course', 'fee',
    ];
}
