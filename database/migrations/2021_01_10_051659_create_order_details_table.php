<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details_table', function (Blueprint $table) {
            $table->id();
            $table->string('branch_id');
            $table->string('good_name');
            $table->string('good_properties')->nullable();
            $table->decimal('amount',20, 2);
            $table->decimal('discount', 20, 2)->default('0');
            $table->decimal('total', 20, 2);
            $table->string('discount_detail', 255)->nullable();

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
        Schema::dropIfExists('order_details_tablee');
    }
}
