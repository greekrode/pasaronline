<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaction', function(Blueprint $table)
		{
			$table->bigInteger('TransactionNo')->primary();
			$table->string('BuyerID', 50)->index('fk_transaction_user1_idx');
			$table->string('SellerID', 50)->index('fk_transaction_user2_idx');
			$table->string('TransactionDetail', 50);
			$table->dateTime('TransactionDate');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transaction');
	}

}
