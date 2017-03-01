<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserdetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userdetail', function(Blueprint $table)
		{
			$table->bigInteger('ID', true);
			$table->string('Name');
			$table->string('Address');
			$table->string('ZipCode');
			$table->string('TelephoneNumber');
			$table->string('Gender');
			$table->string('Email');
			$table->bigInteger('user_No')->index('fk_userdetail_user_idx');
			$table->integer('Currency_CurrencyID')->index('fk_userdetail_Currency1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userdetail');
	}

}
