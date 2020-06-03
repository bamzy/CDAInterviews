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
            $table->string('body',4000)->nullable();
            $table->string('link',1000)->nullable();
            $table->boolean('bold');
            $table->boolean('italic');
            $table->boolean('centralized');
            $table->boolean('striked');
            $table->foreignId('hsize_id');
            $table->foreignId('type_id');
            $table->foreign('type_id')->references('id')->on('item_types');
            $table->foreign('hsize_id')->references('id')->on('hsize');
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
