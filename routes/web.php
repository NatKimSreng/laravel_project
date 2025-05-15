<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$allJobs = [
    [
        'id' => 1,
        'title' => 'Teacher',
        'salary' => '$100000'
    ],
    [
        'id' => 2,
        'title' => 'Programmer',
        'salary' => '$50000'
    ],
    [
        'id' => 3,
        'title' => 'Nurse',
        'salary' => '$200000'
    ]
];

Route::get('/', function () {
    return view('home');
});

Route::get('/job', function () use ($allJobs) {
    return view('jobs', ['jobs' => $allJobs]);
});

Route::get('/job/{id}', function ($id) use ($allJobs) {
    $job = Arr::first($allJobs, fn($job) => $job['id'] == $id);
    if (!$job) {
        abort(404, 'Job not found');
    }
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
