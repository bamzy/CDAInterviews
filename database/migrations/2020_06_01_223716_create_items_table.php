<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('body');
            $table->string('link');
            $table->boolean('bold');
            $table->boolean('italic');
            $table->foreignId('tag_id');
            $table->foreignId('type_id');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('type_id')->references('id')->on('item_types');
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
        Schema::dropIfExists('items');
    }
}
