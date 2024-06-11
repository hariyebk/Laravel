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

    // establishing a one-to-many relationship with the Employer model
    public function employer(){
      return $this->belongsTo(Employer::class);
    }

    // establishing a many-to-many relationship with Tags model
    public function tags(){
      // we are telling laravel that in our pivot table we used job_listing_id as a foreign key for this model.
      return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
} 