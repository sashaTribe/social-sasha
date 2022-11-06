<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment',255);
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('parent_id')->unsigned;
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user_data')
                ->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreign('parent_id')->references('id')->on('parent_comments')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
