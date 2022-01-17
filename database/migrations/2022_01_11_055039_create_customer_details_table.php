<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('secondname')->nullable();
            $table->string('phone')->nullable();
            $table->string('datee')->nullable();
            $table->string('passport')->nullable();
            $table->string('Fever')->nullable();
            $table->string('Cough')->nullable();
            $table->string('Throat')->nullable();
            $table->string('breathing')->nullable();
            $table->string('Nausea')->nullable();
            $table->string('Abdominal')->nullable();
            $table->string('Chills')->nullable();
            $table->string('Headache')->nullable();
            $table->string('Muscle')->nullable();
            $table->string('Fatigue')->nullable();
            $table->string('Runny')->nullable();
            $table->string('Vomiting')->nullable();
            $table->string('Diarrhea')->nullable();
            $table->string('Loss_of_smell')->nullable();
            $table->string('Loss_of_taste')->nullable();
            $table->string('specify')->nullable();
            $table->string('symptoms')->nullable();
            $table->string('Select_the_test')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('town')->nullable();
            $table->string('zip')->nullable();
            $table->string('Province')->nullable();
            $table->string('Country')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->text('signature')->nullable();
            $table->string('CruiseLine')->nullable();
            $table->string('Destination')->nullable();
            $table->string('F_Cruise')->nullable();
            $table->string('othre_specify')->nullable();
            $table->string('Parent_secondname')->nullable();
            $table->string('Parent_name')->nullable();
            $table->string('Parent_surname')->nullable();
            $table->string('Parent_phone')->nullable();
            $table->string('Parent_dob')->nullable();
            $table->string('type')->nullable();

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
        Schema::dropIfExists('customer_details');
    }
}
