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
            $table->boolean('bold')->default(false);
            $table->boolean('italic')->default(false);
            $table->boolean('centralized')->default(false);
            $table->boolean('striked')->default(false);
            $table->foreignId('hsize_id')->nullable()->default(0);
            $table->foreignId('type_id')->nullable();
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
