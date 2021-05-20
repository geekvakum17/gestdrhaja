<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbsenceTable extends Migration {

	public function up()
	{
		Schema::create('absence', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nomiterim', 255)->nullable();
			$table->string('objetabsence', 255)->nullable();
			$table->date('datedepart');
			$table->date('dateretour')->nullable();
			$table->integer('nbrejourouvrable')->nullable();
			$table->boolean('statu')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('absence');
	}
}