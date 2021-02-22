<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectionTable extends Migration {

	public function up()
	{
		Schema::create('direction', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelle', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('direction');
	}
}