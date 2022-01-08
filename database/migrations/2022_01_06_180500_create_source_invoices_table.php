<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourceInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('source_invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('source_status_id');
            $table->string('billing_from_name');
            $table->string('billing_from_phone');
            $table->string('billing_from_address');
            $table->string('billing_to_name')->nullable();
            $table->string('billing_to_phone')->nullable();
            $table->string('billing_to_address')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('due_date')->nullable();
            $table->string('notes')->nullable();
            $table->string('terms_condition')->nullable();
            $table->string('signature')->nullable();
            $table->string('position')->nullable();
            $table->string('sub_total')->nullable();
            $table->string('tax')->nullable();
            $table->string('shipping_cost')->nullable();
            $table->string('discount')->nullable();
            $table->string('grand_total')->nullable();
            $table->string('amout_paid')->nullable();
            $table->string('total_due')->nullable();
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
        Schema::dropIfExists('source_invoices');
    }
}
