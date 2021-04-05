<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('product_code');
            $table->foreignId('store_id');
            $table->foreignId('group_id');
            $table->integer('qty');
            $table->double('p_rate')->default(0.0);
            $table->double('p_eva')->default(0.0);
            $table->double('s_rate')->default(0.0);
            $table->double('s_eva')->default(0.0);
            $table->double('n_rate')->default(0.0);
            $table->double('n_eva')->default(0.0);
            $table->double('t_rate')->default(0.0);
            $table->double('t_eva')->default(0.0);
            $table->double('nst_rate')->default(0.0);
            $table->double('nst_eva')->default(0.0);
            $table->double('mrp')->default(0.0);
            $table->double('mrp_eva')->default(0.0);
            $table->string('cases')->default('0-0');
            $table->bigInteger('hsn');
            $table->string('flags',5)->default('00000');
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
        Schema::dropIfExists('stock_master');
    }
}
