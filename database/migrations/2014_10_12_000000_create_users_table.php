<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rs_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_id',50)->unique();
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->string('username',100)->unique();
            $table->string('password',64);
            $table->tinyInteger('role');
            $table->tinyInteger('status')->default(1);
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->ipAddress('ip_address',64)->nullable();
        });

        Schema::create('rs_user_profile', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('mobile_no',15)->nullable();
            $table->string('address1',255)->nullable();
            $table->string('address2',255)->nullable();
            $table->string('country',10)->nullable();
            $table->string('postcode',6)->nullable();
            $table->tinyInteger('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->ipAddress('ip_address',64)->nullable();
            $table->foreign('user_id')->references('id')->on('rs_users');
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
