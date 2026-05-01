<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$jobs = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'salary' => '$90,000'
    ],
    [
        'id' => 2,
        'title' => 'Data Analyst',
        'salary' => '$70,000'
    ],
    [
        'id' => 3,
        'title' => 'Product Manager',
        'salary' => '$100,000'
    ]
];

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () use ($jobs) {
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/job/{id}', function ($id) use ($jobs) {
    $job = Arr::first($jobs, fn($job) => $job['id'] === (int) $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
