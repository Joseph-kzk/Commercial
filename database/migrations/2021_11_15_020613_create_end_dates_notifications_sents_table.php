<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndDatesNotificationsSentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('end_dates_notifications_sent', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->unsignedBigInteger('last_item_id');
            $table->date('last_item_datedebut');
            $table->date('read_at')->nullable();
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
        Schema::dropIfExists('end_dates_notifications_sent');
    }
}
