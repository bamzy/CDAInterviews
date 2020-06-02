<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pages', function (Blueprint $table) {
                $table->id();
                $table->integer('order');
                $table->foreignId('item_id');
                $table->foreignId('page_id');
                $table->foreign('item_id')->references('id')->on('items');
                $table->foreign('page_id')->references('id')->on('pages');
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
        Schema::dropIfExists('item_pages');
    }
}
