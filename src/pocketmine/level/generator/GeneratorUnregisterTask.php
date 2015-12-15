<?php

/*
 *     _                                      __  __ ____   
 *    / \   _ __   __ _ _ __   __ _ ___      |  \/  |  _ \  
 *   / _ \ | '_ \ / _` | '_ \ / _` / __|_____| |\/| | |_) | 
 *  / ___ \| | | | (_| | | | | (_| \__ \_____| |  | |  __/  
 * /_/   \_\_| |_|\__,_|_| |_|\__,_|___/     |_|  |_|_|     
 *
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
*/

namespace pocketmine\level\generator;


use pocketmine\level\Level;

use pocketmine\scheduler\AsyncTask;


class GeneratorUnregisterTask extends AsyncTask{

	public $levelId;

	public function __construct(Level $level){
		$this->levelId = $level->getId();
	}

	public function onRun(){
		$this->saveToThreadStore("generation.level{$this->levelId}.manager", null);
		$this->saveToThreadStore("generation.level{$this->levelId}.generator", null);
	}
}
