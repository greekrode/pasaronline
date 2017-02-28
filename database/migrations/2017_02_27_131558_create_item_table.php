<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item', function(Blueprint $table)
		{
			$table->bigInteger('ItemID')->primary();
			$table->string('ItemName');
			$table->string('CategoryID')->index('fk_item_category1_idx');
			$table->string('SellerID', 45)->nullable()->index('fk_item_user1_idx');
			$table->integer('ItemStock')->nullable();
			$table->integer('ItemPrice')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('item');
	}

}
