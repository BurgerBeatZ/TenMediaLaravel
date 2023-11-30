<?php
// This Migration creates all foreign keys in the db
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('companyid')->references('companyid')->on('companies');
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->foreign('companyid')->references('companyid')->on('companies');
        });

        Schema::table('jobcategories', function (Blueprint $table) {
            $table->foreign('categoryid')->references('categoryid')->on('categories');
            $table->foreign('jobid')->references('jobid')->on('jobs');
        });

        Schema::table('userjobs', function (Blueprint $table) {
            $table->foreign('userid')->references('userid')->on('users');
            $table->foreign('jobid')->references('jobid')->on('jobs');
        });

        Schema::table('userroles', function (Blueprint $table) {
            $table->foreign('userid')->references('userid')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
        $table ->dropForeign(['companyid']);
    });

        Schema::table('categories', function (Blueprint $table) {
        $table ->dropForeign(['companyid']);

    });

        Schema::table('jobcategories', function (Blueprint $table) {
        $table ->dropForeign(['categoryid']);
        $table ->dropForeign(['jobid']);
    });

        Schema::table('userjobs', function (Blueprint $table) {
        $table ->dropForeign(['userid']);
        $table ->dropForeign(['jobid']);
    });

        Schema::table('userroles', function (Blueprint $table) {
        $table ->dropForeign(['userid']);
    });

    }
};