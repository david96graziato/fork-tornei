<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('birthday');
            $table->string('email');
            $table->string('phone');
            $table->string('fit');
            $table->string('club');
            $table->integer('score_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->text('note')->nullable();
            $table->timestamps();
            $table->foreign('score_id')->references('id')->on('subscriber_scores')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('subscriber_categories')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('subscriber_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribers');
    }
}
