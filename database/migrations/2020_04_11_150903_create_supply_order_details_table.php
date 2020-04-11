<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplyOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('supply_order_id');
            $table->unsignedBigInteger('medecine_id');
            $table->integer('batch_nbr');
            $table->integer('qty');
<<<<<<< HEAD
            $table->timestamps();
            $table->foreign('supply_order_id')->references('id')->on('supply_orders');
            $table->foreign('medecine_id')->references('id')->on('medecines');
=======
            $table->timestamps = false;
            $table->foreign('supply_orderid')->references('id')->on('supply_orders');
            $table->foreign('medid')->references('id')->on('medecines');
>>>>>>> 1a2fe8876283d0c49e16e5717c20c0912515c9a0

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply_order_details');
    }
}
