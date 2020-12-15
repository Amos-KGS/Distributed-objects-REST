<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // this are the database fields NB: 'protected' keyword is essential
    protected $fillable = ['fname','lname','course','year'];
}
