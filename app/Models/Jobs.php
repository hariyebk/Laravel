<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model {
    // Our class name should be the same as our table but needs to be singular. we can also make it refer to our database by using this 
    protected $table = 'job_listings';
    
    // allowing which fields can be mass assigned
    protected $fillable = ['title', 'salary', 'experience'];
} 