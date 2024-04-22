<?php

namespace App\Models;

use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\Null_;

class Jobs {
    // A method which can be directly accessed without creating an instance of the class. and it returns all jobs
    public static function GetAllJobs() : array {
        return [
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
    }

    public static function FindAjob(int $id): array | Null_{
        // Since we are in the same class, we can use the static keyword to access other methods within this class.
        $job = Arr::first(static::GetAllJobs(), fn($job) => $job["id"] == $id);
        if(!$job){
            abort(404);
        }
        else{
            return $job;
        }
    }
} 