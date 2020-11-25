<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_faqs', function (Blueprint $table) {
            $table->increments('fid');            
            $table->longtext('question_one');
            $table->longtext('answer_one');
            $table->longtext('question_two');
            $table->longtext('answer_two');
            $table->longtext('question_three');
            $table->longtext('answer_three');
            $table->longtext('question_four');
            $table->longtext('answer_four');
            $table->longtext('question_five');
            $table->longtext('answer_five');            
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
        Schema::dropIfExists('tbl_faqs');
    }
}
