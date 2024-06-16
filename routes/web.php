<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        "greating" => "holla",
        "name" => "laravel"
    ]);
});

Route::get("/jobs", function(){
    return view("jobs", [
        // Eager loading (fetching all the associated employer data along with each job post instaed quering the database one by one for each jo post in the loop (N+1))
        "jobs" => Job::with("employer")->simplePaginate(5) // using simple paginate instead of the default one like(1, 2, 3)
    ]);
});

Route::get('/job/{id}', function($id){
    $job = Job::find($id);
    // passing the specific job for the view
    return view('job', ["job" => $job]);
    
});

Route::get("/contact", function(){
    return view("contact");
});