<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlantTypesTable extends Migration {

	public function up()
	{
		Schema::create('PlantTypes', function(Blueprint $table) {
			$table->increments('plantTypeId')->primary();
			$table->integer('userId')->unsigned();
			$table->string('plantName');
			$table->float('maxPH');
			$table->float('minPH');
			$table->integer('maxTemp');
			$table->integer('minTemp');
			$table->integer('minDailySunlightHours');
			$table->integer('maxDailySunlightHours');
			$table->integer('dayToGerminate');
			$table->integer('daysToHarvestFromGermination');
			$table->integer('desiredDaysBetweenHarvests');
			$table->float('dollarValuePerHarvest');
			$table->mediumText('seedlingNutrientNeeds');
			$table->mediumText('vegitativeNutrientNeeds');
			$table->mediumText('bloomingNutrientNeets');
			$table->mediumText('pruningTips');
			$table->softDeletes();
			$table->string('imageLink');
			$table->integer('daysToVegitativeFromGermination');
			$table->string('daysToBloomFromGermination');
		});
	}

	public function down()
	{
		Schema::drop('PlantTypes');
	}
}