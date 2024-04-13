<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', fn () => view('home'));

Route::get('/jobs', fn () => view('jobs', [
    'jobs' => Job::all()
]));

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', fn () => view('contact'));
