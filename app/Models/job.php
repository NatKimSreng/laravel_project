<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    /**
     * Return all jobs.
     */
    public static function all()
    {
        return [
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
    }

    /**
     * Find a job by ID.
     */
    public static function find($id)
    {
        return Arr::first(self::all(), fn($job) => $job['id'] == $id);
    }
}
    