<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransactiondetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transactiondetail', function(Blueprint $table)
		{
			$table->foreign('ItemID', 'fk_transactiondetail_item1')->references('ItemID')->on('item')->onUpdate('Cascade')->onDelete('Cascade');
			$table->foreign('TransactionNo', 'fk_transactiondetail_transaction1')->references('TransactionNo')->on('transaction')->onUpdate('Cascade')->onDelete('Cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transactiondetail', function(Blueprint $table)
		{
			$table->dropForeign('fk_transactiondetail_item1');
			$table->dropForeign('fk_transactiondetail_transaction1');
		});
	}

}
