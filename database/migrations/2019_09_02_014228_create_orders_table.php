<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name', 80);
            $table->string('customer_email', 120);
            $table->string('customer_mobile', 40);
            $table->text('customer_address');
            $table->string('status', 20)->default('CREATED'); //Valor por efecto
            $table->unsignedBigInteger('user_id'); //Relación con el usuario
            $table->foreign('user_id')->references('id')->on('users'); // Llaves foraneas
            $table->unsignedBigInteger('product_id'); //Relación con el producto
            $table->foreign('product_id')->references('id')->on('products'); // Llaves foraneas
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
        Schema::dropIfExists('orders');
    }
}
