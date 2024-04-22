<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/jobs", function(){
    return view("jobs", [
        "jobs" => [
            [
                "id" => 1,
                "title" => "Video Editor",
                "experience" => "3 years",
                "salary" => "$60, 000"
            ],
            [
                "id" => 2,
                "title" => "Software Developer",
                "experience" => "0 years",
                "salary" => "$90, 000"
            ],
            [
                "id" => 3,
                "title" => "Lawyer",
                "experience" => "6 years",
                "salary" => "$200, 000"
            ]
        ]
    ]);
});

Route::get('/job/{id}', function($id){
    $jobs = [
        [
            "id" => 1,
            "title" => "Video Editor",
            "experience" => "3 years",
            "salary" => "$60, 000"
        ],
        [
            "id" => 2,
            "title" => "Software Developer",
            "experience" => "0 years",
            "salary" => "$90, 000"
        ],
        [
            "id" => 3,
            "title" => "Lawyer",
            "experience" => "6 years",
            "salary" => "$200, 000"
        ]
    ];

    // Finding the job with the specific id
    $job = Arr::first($jobs, fn($job) => $job["id"] == $id);

    // returning the specific job 
    return view('job', ["job" => $job]);
    
});

Route::get("/contact", function(){
    return view("contact");
});