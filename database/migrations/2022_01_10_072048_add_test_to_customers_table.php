<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTestToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->text('test_type')->nullable();
            $table->text('main_status')->default('user');
            $table->text('display_status')->nullable();
            $table->text('payment_method')->nullable();
            $table->text('payment_amount')->nullable();
            $table->text('payment_detail')->nullable();
            $table->dateTime('order_date')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->dateTime('result_date')->nullable();
            $table->dateTime('date')->nullable();
            $table->text('order_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('test_type');
            $table->dropColumn('main_status');
            $table->dropColumn('display_status');
            $table->dropColumn('payment_method');
            $table->dropColumn('payment_amount');
            $table->dropColumn('payment_detail');
            $table->dropColumn('order_date')->nullable();
            $table->dropColumn('payment_date')->nullable();
            $table->dropColumn('result_date')->nullable();
            $table->dropColumn('date')->nullable();
            $table->dropColumn('order_id')->nullable();

        });
    }
}
