<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserdetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('userdetail', function(Blueprint $table)
		{
			$table->foreign('Currency_CurrencyID', 'fk_userdetail_Currency1')->references('CurrencyID')->on('currency')->onUpdate('Cascade')->onDelete('Cascade');
			$table->foreign('user_No', 'fk_userdetail_user')->references('No')->on('user')->onUpdate('Cascade')->onDelete('Cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('userdetail', function(Blueprint $table)
		{
			$table->dropForeign('fk_userdetail_Currency1');
			$table->dropForeign('fk_userdetail_user');
		});
	}

}
