<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;
use App\Models\admin;


Route::get('/', function () {
    return view('home');
});

Route::get("/jobs", function(){
    return view("jobs", [
        "jobs" => Jobs::all()
    ]);
});

Route::get('/job/{id}', function($id){
    $job = Jobs::find($id);
    // passing the specific job for the view
    return view('job', ["job" => $job]);
    
});

Route::get("/contact", function(){
    return view("contact");
});