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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('user_name')->default(0);
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('ip_address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('address');
            $table->string('division_id')->comment('Division Table Id')->nullable();
            $table->string('district_id')->comment('District Table Id')->nullable();
            $table->unsignedBigInteger('status')->default(0)->comment('0=Inactive|1=Active|2=Ban');
            $table->text('shipping_address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
