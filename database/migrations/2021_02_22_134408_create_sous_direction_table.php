<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSousDirectionTable extends Migration {

	public function up()
	{
		Schema::create('sous-direction', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('libelle', 70)->nullable();
			$table->string('lieudirection', 70)->nullable();
			$table->string('description', 100)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('sous-direction');
	}
}