<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('serial_number');
            $table->string('description');
            $table->boolean('fixed_or_movable');
            $table->string('picture_path');
            $table->date('purchase_date');
            $table->date('start_use_date');
            $table->float('purchase_price');
            $table->date('warranty_expiry_date');
            $table->float('degradation_in_years');
            $table->float('current_value_naira');
            $table->string('location');
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
        Schema::dropIfExists('assets');
    }
}
