<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradeTable extends Migration {

	public function up()
	{
		Schema::create('grade', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelle', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('grade');
	}
}