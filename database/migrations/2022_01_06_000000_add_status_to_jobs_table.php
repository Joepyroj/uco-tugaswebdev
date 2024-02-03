<?php
// database/migrations/xxxx_xx_xx_create_jobs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Job;

class AddStatusToJobsTable extends Migration
{
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->enum('status', [
                Job::STATUS_SAVED,
                Job::STATUS_APPLIED,
                Job::STATUS_INTERVIEW,
                Job::STATUS_OFFERED,
                Job::STATUS_REJECTED,
            ])->default(Job::STATUS_SAVED);
        });
    }

    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
