<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocspecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docspecs', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('doc_id')->unsigned();
            $table->bigInteger('spec_id')->unsigned();
            
            $table->timestamps();

            
            $table->foreign('doc_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('spec_id')->references('id')->on('specializations')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docspecs');
    }
}
