<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // bigIncrements : auto increment, unsigned bigint(양수범위 정수), primary key 컬럼
            $table->bigIncrements('id');
            $table->string('user_id', 40)->unique();
            $table->string('name', 30);
            $table->string('phone', 20)->unique();
            $table->string('email', 255)->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 60);
            // $table->string('address', 255);
            // $table->unsignedBigInteger('zip_code', 10);
            $table->boolean('admin')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
