<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAboutmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_aboutmes', function (Blueprint $table) {
            $table->increments('aid');
            $table->string('atitle');
            $table->longtext('adescription');
            $table->string('image')->nullable();
            $table->longtext('acontentdescription_one');
            $table->string('acontenttitle_one');
            $table->longtext('acontentdescription_two');
            $table->string('acontenttitle_two'); 
            $table->longtext('acontentdescription_three');
            $table->string('acontenttitle_three');             
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
        Schema::dropIfExists('tbl_aboutmes');
    }
}
