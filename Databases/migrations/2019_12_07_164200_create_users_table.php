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
            $table->increments('id');
            $table->integer('document_type_id')->unsigned();
            $table->integer('role_user_id')->unsigned();
            $table->integer('institution_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('document_number',20)->unique();
            $table->string('user_photo')->nullable();
            $table->string('username')->unique();
            $table->string('names',45);
            $table->string('lastnames',45);
            $table->string('phone_number',20);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->foreign('role_user_id')->references('id')->on('role_users');
            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('gender_id')->references('id')->on('genders');
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
