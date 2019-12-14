<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('type_contract_id')->unsigned();
            $table->dateTime('generation_date');
            $table->dateTime('contract_start_date');
            $table->dateTime('contract_end_date');
            $table->string('contract_term');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_contract_id')->references('id')->on('contract_types');

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
        Schema::dropIfExists('contracts');
    }
}
