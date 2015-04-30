<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleOffProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_off_products', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->text('discription');
            $table->integer('manufacture_id');
            $table->integer('color_id');
            $table->integer('quantity');
            $table->double('old_price');
            $table->string('new_price');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sale_off_products');
	}

}
