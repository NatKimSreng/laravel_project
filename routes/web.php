<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/job', function () {
    $jobs = Job::all();
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    if (!$job) {
        abort(404, 'Job not found');
    }
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
