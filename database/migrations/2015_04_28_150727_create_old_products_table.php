<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOldProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('old_products', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->text('discription');
            $table->integer('manufacture_id');
            $table->integer('color_id');
            $table->integer('quantity');
            $table->double('price');
            $table->string('brand_new');
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
		Schema::drop('old_products');
	}

}
