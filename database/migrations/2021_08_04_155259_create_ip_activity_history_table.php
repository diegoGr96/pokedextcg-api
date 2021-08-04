<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpActivityHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_activity_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip', 15);
            $table->string('countryName')->nullable();
            $table->string('countryCode')->nullable();
            $table->string('regionName')->nullable();
            $table->string('regionCode')->nullable();
            $table->string('cityName')->nullable();
            $table->string('zipCode')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('url');
            $table->string('endpoint');
            $table->text('params');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ip_activity_history');
    }
}
