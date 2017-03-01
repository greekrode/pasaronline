<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactiondetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactiondetail', function(Blueprint $table)
		{
			$table->bigInteger('TransactionNo')->index('fk_transactiondetail_transaction1_idx');
			$table->bigInteger('ItemID')->index('fk_transactiondetail_item1_idx');
			$table->bigInteger('Price');
			$table->bigInteger('ItemAmount');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactiondetail');
	}

}
