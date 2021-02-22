<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nomprenom', 255)->nullable();
			$table->date('datenaissance');
			$table->string('situationmatri', 50)->nullable();
			$table->string('lieuxnaissance', 255)->nullable();
			$table->string('Niveauetude', 255)->nullable();
			$table->integer('grade_id')->unsigned()->nullable();
			$table->string('villeresidence', 255)->nullable();
			$table->string('suphierachique', 255)->nullable();
			$table->date('datepriseservice')->nullable();
			$table->integer('nbrenfant')->nullable();
			$table->integer('agenceregional_id')->unsigned()->nullable();
			$table->string('diplome', 70)->nullable();
			$table->string('poste', 50)->nullable();
			$table->integer('direction_id')->unsigned();
			$table->string('email', 70)->nullable();
			$table->string('password', 8)->nullable();
			$table->string('contact', 15)->nullable();
			$table->integer('service_id')->unsigned()->nullable();
			$table->integer('sous-direction_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('user');
	}
}