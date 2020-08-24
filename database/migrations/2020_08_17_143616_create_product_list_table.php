<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_lists', function (Blueprint $table) {
            $table->id();
            $table->string('provider_name')->nullable();
            $table->string('provider')->nullable();
            $table->string('location')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('datacenter')->nullable();
            $table->string('brand_label')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('cpu')->nullable();
            $table->string('core')->nullable();
            $table->string('ram')->nullable();
            $table->string('drive_label')->nullable();
            $table->string('drive')->nullable();
            $table->string('bandwidth')->nullable();
            $table->string('ip')->nullable();
            $table->string('price')->nullable();
            $table->string('show_bw')->nullable();
            $table->string('sell_out_start')->nullable();
            $table->string('sell_out_end')->nullable();
            $table->string('discount')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('product_list');
    }
}
