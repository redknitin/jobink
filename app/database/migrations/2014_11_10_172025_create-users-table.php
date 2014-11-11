<?php
//php artisan migrate:make create-users-table
//php artisan migrate

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('firstname', 20);
            $table->string('lastname', 20);
            $table->string('email', 100)->unique();
            $table->string('password', 64);
            $table->timestamps();
            $table->rememberToken();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('users');
	}

}
