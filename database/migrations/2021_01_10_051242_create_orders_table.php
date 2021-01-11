<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_table', function (Blueprint $table) {
            $table->id();
            $table->string('branch_id');
            $table->string('staff_id');
            $table->string('customer_id')->nullable();
            $table->boolean('success');
            $table->decimal('total', 20, 2);
            $table->decimal('receive', 20, 2);
            $table->decimal('change', 20, 2);
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
        Schema::dropIfExists('orders_tablee');
    }
}
