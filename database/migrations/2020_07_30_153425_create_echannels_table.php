<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEchannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('echannels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('nic', 100)->nullable();
            $table->string('tel', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('doc_name', 100)->nullable();
            $table->string('doc_spec', 100)->nullable();
            $table->string('date', 100)->nullable();
            $table->string('time', 100)->nullable();
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
        Schema::dropIfExists('echannels');
    }
}
