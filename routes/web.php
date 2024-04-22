<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;


Route::get('/', function () {
    return view('home');
});

Route::get("/jobs", function(){
    return view("jobs", [
        "jobs" => Jobs::GetAllJobs()
    ]);
});

Route::get('/job/{id}', function($id){
    $job = Jobs::FindAjob($id);
    // passing the specific job for the view
    return view('job', ["job" => $job]);
    
});

Route::get("/contact", function(){
    return view("contact");
});