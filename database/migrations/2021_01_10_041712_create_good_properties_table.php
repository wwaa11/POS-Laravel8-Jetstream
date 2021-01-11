<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_properties', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name');
            $table->integer('type');
            $table->string('group');
            $table->string('name');
            $table->decimal('price', 20, 2);
            $table->boolean('default');
            $table->boolean('multiple_enable');
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
        Schema::dropIfExists('good_properties');
    }
}
