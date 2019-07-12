<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterOrdersToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders_to_products', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->change();

            $table->foreign('order_id')->references('id')->on('orders');
        });

        Schema::table('orders_to_products', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->change();

            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders_to_products', function (Blueprint $table) {
            $table->integer('order_id')->change();

            $table->dropForeign('order_id');
        });

        Schema::table('orders_to_products', function (Blueprint $table) {
            $table->integer('product_id')->change();

            $table->dropForeign('product_id');
        });
    }
}
