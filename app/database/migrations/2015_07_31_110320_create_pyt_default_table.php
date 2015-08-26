<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePytDefaultTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('registrationsheets', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('rollno');
            $table->string('phone');
            $table->string('address');
            $table->string('accommodation');
            $table->string('email');
            $table->string('tshirtsize');
            $table->string('specialinstruction');
            $table->string('created_at');
            $table->string('updated_at');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('registrationsheets');
	}

}
