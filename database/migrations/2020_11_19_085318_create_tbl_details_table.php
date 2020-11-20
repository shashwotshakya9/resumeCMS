<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_details', function (Blueprint $table) {
            $table->increments('did');
            $table->string('title');
            $table->string('phone');
            $table->string('email'); 
            $table->string('fblink'); 
            $table->string('twitterlink');
            $table->string('instalink');   
            $table->string('linkedinlink');   
            $table->string('ytlink'); 
            $table->string('footer');                         
            $table->string('status');
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
        Schema::dropIfExists('tbl_details');
    }
}
