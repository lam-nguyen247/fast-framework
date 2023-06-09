<?php

use Fast\Database\DatabaseBuilder\Schema;
use Fast\Database\DatabaseBuilder\ColumnBuilder;

class CreateUsersTable {
	/**
	 * Run the migration.
	 * @return void
	 */
	public function up() {
		Schema::createIfNotExists('users', function (ColumnBuilder $table) {
			$table->increments('id')->comment('user id');
			$table->string('email', 255)->unique();
			$table->string('password', 255);
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('notify_push')->nullable();
			$table->dateTime('verified_at')->nullable();
			$table->text('token')->nullable();
			$table->string('remember_token')->nullable();
			$table->dateTime('logged_at')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Rollback the migration
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
