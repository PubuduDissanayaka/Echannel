<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('bloodG', 100)->nullable();
            $table->string('phone')->nullable();
            $table->string('emergency_number')->nullable();
            $table->string('gender', 7)->nullable()->default('male');
            $table->mediumText('address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('nic', 20)->nullable();
            $table->string('dob')->nullable();
            $table->string('maritalstatus', 10)->nullable();
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
