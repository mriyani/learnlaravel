<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        $job = Arr::first(Job::all(), fn($job) => $job['id'] === (int) $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}
