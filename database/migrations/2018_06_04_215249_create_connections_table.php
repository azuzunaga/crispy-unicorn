<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('smaller_id');
            $table->foreign('smaller_id')->references('id')->on('users')
                  ->onDelete('cascade');
            $table->unsignedInteger('bigger_id');
            $table->foreign('bigger_id')->references('id')->on('users')
                  ->onDelete('cascade');
            $table->unique(['smaller_id', 'bigger_id']);
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
        Schema::dropIfExists('connections');
    }
}
