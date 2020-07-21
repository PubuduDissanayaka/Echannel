<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctimes', function (Blueprint $table) {
            $table->id();           
            $table->string('name');
            $table->mediumText('specialization')->default('specialization');
            $table->text('date')->nullable();
            $table->text('timeone')->nullable();
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
        Schema::dropIfExists('doctimes');
        
    }
}
