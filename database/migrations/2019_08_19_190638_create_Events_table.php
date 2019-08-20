<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('Events', function(Blueprint $table) {
			$table->increments('eventId');
			$table->integer('userId')->unsigned();
			$table->integer('plantInstanceId')->unsigned();
			$table->string('name');
			$table->datetime('dueDate');
			$table->boolean('isComplete');
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('Events');
	}
}