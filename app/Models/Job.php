<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
  /**
      * If we want to use factory on this model, we need to import the HasFactory trait from the Factories class
      */
    use HasFactory;
    // we are telling elequent that the name of our table is job_listing
    protected $table = 'job_listings';
    
    // allowing which fields can be mass assigned
    protected $fillable = ['title', 'salary', 'experience'];

    // establishing a many-to-one relationship with the Employer model
    public function employer(){
      return $this->belongsTo(Employer::class);
    }
} 