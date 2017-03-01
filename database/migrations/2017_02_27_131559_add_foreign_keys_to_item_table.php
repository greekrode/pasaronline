<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('item', function(Blueprint $table)
		{
			$table->foreign('CategoryID', 'fk_item_category1')->references('CategoryID')->on('category')->onUpdate('Cascade')->onDelete('Cascade');
			$table->foreign('SellerID', 'fk_item_user1')->references('ID')->on('user')->onUpdate('Cascade')->onDelete('Cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('item', function(Blueprint $table)
		{
			$table->dropForeign('fk_item_category1');
			$table->dropForeign('fk_item_user1');
		});
	}

}
