<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    protected $table = "tags";
    // establishing a many-to-many relationship with the Job model
    public function jobs(){
        // when we query all the jobs related to a specific tag , laravel by default looks for a column name called job_id but in our pivot table we use job_listing_id as a foriegn key and we need to tell it that
        return $this->belongsToMany(Job::class, relatedPivotKey: "job_listing_id");
    }
}
