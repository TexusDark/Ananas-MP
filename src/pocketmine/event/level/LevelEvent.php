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

/**
 * Level related events
 */
namespace pocketmine\event\level;

use pocketmine\event\Event;
use pocketmine\level\Level;

abstract class LevelEvent extends Event{
	/** @var \pocketmine\level\Level */
	private $level;

	/**
	 * @param Level $level
	 */
	public function __construct(Level $level){
		$this->level = $level;
	}

	/**
	 * @return \pocketmine\level\Level
	 */
	public function getLevel(){
		return $this->level;
	}
}
