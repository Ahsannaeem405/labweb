<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_lists', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('platform')->nullable();
            $table->text('specimen')->nullable();
            $table->text('methodology')->nullable();
            $table->text('procedure')->nullable();
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('test_lists');
    }
}
