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
			$table->date('datedebut')->nullable();
			$table->date('datefin')->nullable();
			$table->string('dureeconge', 100)->nullable();
			$table->date('datereprise')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('demande');
	}
}