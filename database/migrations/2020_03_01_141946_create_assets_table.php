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
            $table->bigIncrements('id');
            $table->string('category');
            $table->string('brand_model');
            $table->string('username');
            $table->string('serial_no');
            $table->string('asset_no');
            $table->string('inv_no');
            $table->string('os');
            $table->string('cpu');
            $table->string('ram');
            $table->text('appsys');
            $table->string('computer_name');
            $table->string('supplier_name');
            $table->date('supplier_purchased');
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
