<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('Users', function(Blueprint $table) {
			$table->increments('userId')->primary();
			$table->string('email');
			$table->string('password');
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('Users');
	}
}