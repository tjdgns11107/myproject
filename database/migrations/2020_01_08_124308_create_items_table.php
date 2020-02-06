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
            // bigIncrements : auto increment, unsigned bigint(양수범위 정수), primary key 컬럼
            $table->bigIncrements('id');
            $table->string('item_title', 40);
            $table->text('item_content');
            $table->string('item_picture', 255)->nullable();
            $table->unsignedBigInteger('item_seller');
            // unsignedBigInteger : unsigned bigint 컬럼
            $table->unsignedBigInteger('price');
            $table->string('dept', 30);
            
            $table->foreign('item_seller')->references('seller_id')
            ->on('sellers')->onDelete('cascade');
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
