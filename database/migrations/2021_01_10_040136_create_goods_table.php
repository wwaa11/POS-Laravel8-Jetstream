<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name');
            $table->string('sku')->unique()->nullable();
            $table->string('name');
            $table->string('unit')->nullable();
            $table->string('imague');
            $table->string('category');
            $table->integer('paytype');
            $table->decimal('cost', 20 , 2);
            $table->decimal('price', 20 , 2);
            $table->string('group')->nullable();
            $table->decimal('stock', 20, 2)->nullable();
            $table->decimal('stock_require', 20, 2)->nullable();
            $table->decimal('stock_out_notification', 20, 2)->nullable();
            $table->bigInteger('suplier')->nullable();

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
        Schema::dropIfExists('goods');
    }
}
