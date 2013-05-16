<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('fullname', 100);
            $table->string('email', 100)->unique();
            $table->string('username', 100)->unique();
            $table->string('password', 100);
            $table->boolean('active')->default(0);
            $table->enum('gender', array('male', 'female'));
            $table->integer('age')->unsigned();
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('users');
	}

}
