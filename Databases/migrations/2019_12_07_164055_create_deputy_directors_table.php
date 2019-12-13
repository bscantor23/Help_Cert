<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeputyDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deputy_directors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('document_type_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->string('deputy_director_names',45);
            $table->string('deputy_director_lastnames',45);
            $table->string('document_number',20)->unique();
            $table->string('phone_number',20);
            $table->string('digital firm');
            $table->timestamps();

            $table->foreign('document_type_id')->references('id')->on('document_types');
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
        Schema::dropIfExists('deputy_directors');
    }
}
