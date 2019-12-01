<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->string("heading_description");
            $table->longText("description");
            $table->string("main_image_path");
            $table->integer("age_restriction");
            $table->enum("status",["open","cancelled","few_tickets","free"]);
            $table->dateTime("start_date");
            $table->time("door_opens_at")->nullable();
            $table->time("show_start_at")->nullable();
            $table->string("address");
            $table->string("city");
            $table->string("state");
            $table->string("country");
            $table->float("ticket_amount");
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
        Schema::dropIfExists('events');
    }
}
