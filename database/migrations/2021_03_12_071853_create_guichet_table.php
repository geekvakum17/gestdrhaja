<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuichetTable extends Migration {

	public function up()
	{
		Schema::create('guichet', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('libelle', 70)->nullable();
			$table->string('description', 70)->nullable();
			$table->integer('agenceregional_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('guichet');
	}
}