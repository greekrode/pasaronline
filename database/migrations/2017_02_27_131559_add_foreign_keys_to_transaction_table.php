<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transaction', function(Blueprint $table)
		{
			$table->foreign('BuyerID', 'fk_transaction_user1')->references('ID')->on('user')->onUpdate('Cascade')->onDelete('Cascade');
			$table->foreign('SellerID', 'fk_transaction_user2')->references('ID')->on('user')->onUpdate('Cascade')->onDelete('Cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transaction', function(Blueprint $table)
		{
			$table->dropForeign('fk_transaction_user1');
			$table->dropForeign('fk_transaction_user2');
		});
	}

}
