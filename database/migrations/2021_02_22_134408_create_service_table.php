<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceTable extends Migration {

	public function up()
	{
		Schema::create('service', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelle', 70)->nullable();
			$table->string('lieuservice', 50)->nullable();
			$table->string('descriptionservice', 70)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('service');
	}
}