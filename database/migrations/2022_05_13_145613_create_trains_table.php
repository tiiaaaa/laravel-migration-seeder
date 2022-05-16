<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 40);
            $table->string('departure_station', 40);
            $table->string('arrival_station', 40);
            $table->date('departure_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->mediumInteger('train_code');
            $table->tinyInteger('train_wagons');
            $table->boolean('is_in_time');
            $table->boolean('was_deleted');
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
        Schema::dropIfExists('trains');
    }
}
