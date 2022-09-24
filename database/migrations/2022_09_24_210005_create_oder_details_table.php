<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_order_details', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('order_id')->unsigned();
	        $table->foreign('order_id')->references('order_id')->on('tt_orders');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('libros');
            $table->integer('quantity');
            $table->decimal('price', 2)->nullable();
            $table->tinyinteger('status_id')->default(1);
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
        Schema::dropIfExists('oder_details');
    }
}
