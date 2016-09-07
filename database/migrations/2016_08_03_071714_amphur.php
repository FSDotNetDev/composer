<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Amphur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amphur', function (Blueprint $table) {
            $table->increments('amphur_id');
            $table->string('amphur_code', 4);
            $table->string('amphur_name', 150);
            $table->int('geo_id');
            $table->int('province_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('amphur')
    }
}
