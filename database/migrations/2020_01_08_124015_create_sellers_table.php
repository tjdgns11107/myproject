<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            // bigIncrements : auto increment, unsigned bigint(양수범위 정수), primary key 컬럼
            $table->bigIncrements('id');
            // unsignedBigInteger : unsigned bigint 컬럼
            $table->unsignedBigInteger('seller_id');
            $table->string('seller_name', 30);
            $table->string('seller_phone', 20);
            $table->timestamps();

            $table->foreign('seller_id')->references('id')
            ->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}
