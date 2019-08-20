<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlantInstancesTable extends Migration {

	public function up()
	{
		Schema::create('PlantInstances', function(Blueprint $table) {
			$table->increments('plantInstanceId');
			$table->integer('userId')->unsigned();
			$table->integer('plantTypeId')->unsigned();
			$table->string('plantName');
			$table->integer('daysOld');
			$table->datetime('birthday');
			$table->softDeletes();
			$table->string('plantMaturity');
		});
	}

	public function down()
	{
		Schema::drop('PlantInstances');
	}
}