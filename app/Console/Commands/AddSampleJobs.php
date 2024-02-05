<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Job;
use App\Models\User;

class AddSampleJobs extends Command
{
    protected $signature = 'jobs:add-sample';
    protected $description = 'Add 50 sample jobs linked to user_id 2';

    public function handle()
    {
        $user = User::find(2);

        if (!$user) {
            $this->error('User with ID 2 not found.');
            return;
        }

        $this->info('Adding 50 sample jobs...');

        for ($i = 1; $i <= 50; $i++) {
            Job::create([
                'user_id' => $user->id,
                'job_title' => "Sample Job $i",
                'company_name' => "Company $i",
                'salary' => rand(50000, 100000),
                'location' => "Location $i",
                'job_description' => "Description for Sample Job $i",
                'status' => Job::STATUS_SAVED, // You can change this to the desired status
            ]);
        }

        $this->info('Sample jobs added successfully.');
    }
}
