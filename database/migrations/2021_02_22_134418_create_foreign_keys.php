<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('user', function(Blueprint $table) {
			$table->foreign('grade_id')->references('id')->on('grade')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->foreign('agenceregional_id')->references('id')->on('agenceregional')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->foreign('direction_id')->references('id')->on('direction')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('service')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->foreign('sous-direction_id')->references('id')->on('sous-direction')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_grade_id_foreign');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_agenceregional_id_foreign');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_direction_id_foreign');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_service_id_foreign');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_sous-direction_id_foreign');
		});
	}
}