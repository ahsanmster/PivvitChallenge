<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('purchase', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('offeringID')->unsigned();
		    $table->foreign('offeringID')->references('id')->on('offering');
		    $table->float('quantity')->nullable();
		    $table->string('customerName');
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
	    Schema::dropIfExists('purchase');
    }
}
