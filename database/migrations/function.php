<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*----------  Create Table  ----------*/
        
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('airline');
            $table->timestamps();
        });

        /*----------  Check Table / Column Existence  ----------*/        

        if (Schema::hasTable('users')) {
            //
        }

        if (Schema::hasColumn('users', 'email')) {
            //
        }

        /*----------  Connection & Storage Engine  ----------*/

        Schema::connection('foo')->create('users', function ($table) {
            $table->increments('id');
        });

        /*----------  Rename Table  ----------*/

        Schema::rename($from, $to);

        /*----------  Drop Table  ----------*/

        Schema::drop('users');
        Schema::dropIfExists('users');
        
        /*----------  Create Column  ----------*/
        
        Schema::table('users', function ($table) {
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
