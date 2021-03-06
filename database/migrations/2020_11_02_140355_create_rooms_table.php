<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
           $table->id('room_id')->unsigned();
            $table->string('room_name');
            $table->bigInteger('org_id')->unsigned();
            $table->foreign('org_id')->references('org_id')->on('organisations');
            $table->string('room_code');
            $table->boolean('room_status')->default(false);
            $table->integer('room_seat');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
