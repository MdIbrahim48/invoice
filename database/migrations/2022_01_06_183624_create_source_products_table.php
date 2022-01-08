<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('source_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('source_invocie_id');
            $table->string('product_name');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price');
            $table->string('total');
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
        Schema::dropIfExists('source_products');
    }
}
