<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip')->unique()->nullable()->default(null);
            $table->string('os')->nullable()->default(null);
            $table->string('device')->nullable()->default(null);
            $table->string('browser')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('zipcode')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->integer('visits')->nullable()->default(null);
            $table->string('time_on_page')->nullable()->default(null);
            $table->boolean('is_bot')->nullable()->default(0);
            $table->timestamp('last_visit')->nullable()->default(null);
            $table->string('session_start')->nullable()->default(null);
            $table->string('session_end')->nullable()->default(null);
            $table->string('lang')->nullable()->default(null);
            $table->string('flag')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
