<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatuTable extends Migration {

	public function up()
	{
		Schema::create('statu', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelle', 70)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('statu');
	}
}