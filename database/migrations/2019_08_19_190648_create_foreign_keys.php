<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('PlantTypes', function(Blueprint $table) {
			$table->foreign('userId')->references('userId')->on('Users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('PlantInstances', function(Blueprint $table) {
			$table->foreign('userId')->references('userId')->on('Users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('PlantInstances', function(Blueprint $table) {
			$table->foreign('plantTypeId')->references('plantTypeId')->on('PlantTypes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Events', function(Blueprint $table) {
			$table->foreign('userId')->references('userId')->on('Users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Events', function(Blueprint $table) {
			$table->foreign('plantInstanceId')->references('plantInstanceId')->on('PlantInstances')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('PlantTypes', function(Blueprint $table) {
			$table->dropForeign('PlantTypes_userId_foreign');
		});
		Schema::table('PlantInstances', function(Blueprint $table) {
			$table->dropForeign('PlantInstances_userId_foreign');
		});
		Schema::table('PlantInstances', function(Blueprint $table) {
			$table->dropForeign('PlantInstances_plantTypeId_foreign');
		});
		Schema::table('Events', function(Blueprint $table) {
			$table->dropForeign('Events_userId_foreign');
		});
		Schema::table('Events', function(Blueprint $table) {
			$table->dropForeign('Events_plantInstanceId_foreign');
		});
	}
}