<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contract_code')->unique();
            $table->string('number_contract')->unique();
            $table->text('introductory_text');
            $table->text('way_pay');
            $table->decimal('contract_total_pay');
            $table->text('specific_obligations');
            $table->text('object_certificate');
            $table->text('contract_information_term');
            $table->string('seals');
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
        Schema::dropIfExists('contract_types');
    }
}
