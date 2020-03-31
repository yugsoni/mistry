<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billDetails', function (Blueprint $table) {
            $table->increments('detailNo');
            $table->integer('billNo');
            $table->string('description');
            $table->integer('mesureType');
            $table->string('mesure');
            $table->integer('mesurePrice');
            $table->integer('amount');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billDetails');
    }
}
