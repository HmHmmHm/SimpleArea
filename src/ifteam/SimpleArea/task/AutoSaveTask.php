<?php

namespace ifteam\SimpleArea\task;

use pocketmine\scheduler\Task;
use ifteam\SimpleArea\SimpleArea;

class AutoSaveTask extends Task {
	private $owner;
	public function __construct(SimpleArea $owner) {
		$this->owner = $owner;
		//parent::__construct ( $owner );
	}
	public function onRun(int $currentTick) {
		$this->owner->autoSave ();
	}
}

?>