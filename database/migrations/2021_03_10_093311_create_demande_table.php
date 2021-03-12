<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemandeTable extends Migration {

	public function up()
	{
		Schema::create('demande', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('fonctionIterim', 70)->nullable();
			$table->date('datedebutca')->nullable();
			$table->date('datefinca')->nullable();
			$table->string('dureeconge', 100)->nullable();
			$table->date('datereprise')->nullable();
			$table->boolean('statu')->nullable();
			$table->string('nomiterim', 70)->nullable();
			$table->string('objetabsence', 100)->nullable();
			$table->date('datedepart')->nullable();
			$table->integer('dureeabsence')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('demande');
	}
}