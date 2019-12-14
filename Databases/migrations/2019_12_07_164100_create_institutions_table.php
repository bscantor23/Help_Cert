<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('deputy_director_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('nit',20);
            $table->string('institution_name',100);
            $table->string('address',100);
            $table->string('phone_number',20);
            $table->string('email',100)->unique();
            $table->timestamps();

            $table->foreign('deputy_director_id')->references('id')->on('deputy_directors');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
