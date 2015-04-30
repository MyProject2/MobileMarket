<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('new_products', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->text('discription');
            $table->integer('manufacture_id');
            $table->integer('color_id');
            $table->integer('quantity');
            $table->string('product_code');
            $table->double('price');
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
		Schema::drop('new_products');
	}

}
