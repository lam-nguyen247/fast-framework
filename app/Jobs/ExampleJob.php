<?php

namespace app\Jobs;

use Fast\Queues\Queue;

class ExampleJob extends Queue {
	public string $email;
	public string $name;

	public function __construct($email, $name) {
		$this->email = $email;
		$this->name = $name;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle(): void {
		\Log::info(__CLASS__);
	}
}
