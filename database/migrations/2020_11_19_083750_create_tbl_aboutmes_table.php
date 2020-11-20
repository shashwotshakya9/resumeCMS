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
            $table->string('aimage')->nullable();
            $table->longtext('acontentdescription');
            $table->string('acontenttitle');            
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
