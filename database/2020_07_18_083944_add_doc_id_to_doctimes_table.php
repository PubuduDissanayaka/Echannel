<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDocIdToDoctimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctimes', function (Blueprint $table) {
            $table->bigInteger('doc_id')->unsigned();
           
            $table->foreign('doc_id')->references('id')->on('users')->onDelete('cascade')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctimes', function (Blueprint $table) {
            
            // $table->dropForeign('doctimes_doc_id_foreign');

            $table->dropForeign(['doc_id']);
            
            $table->dropColumn('doc_id');
            
            
        });
    }
}
