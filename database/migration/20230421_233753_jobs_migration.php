<?php

use Fast\Database\DatabaseBuilder\Schema;
use Fast\Database\DatabaseBuilder\ColumnBuilder;

class CreateJobsTable {
	/**
	 * Run the migration.
	 * @return void
	 */
	public function up() {
		Schema::createIfNotExists('jobs', function (ColumnBuilder $table) {
			$table->increments('id')->comment('id of jobs');
			$table->string('queue');
			$table->longText('payload');
			$table->text('last_error')->nullable();
			$table->tinyInteger('attempts')->unsigned();
			$table->timestamps();
		});
	}

	/**
	 * Rollback the migration
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('jobs');
	}
}
