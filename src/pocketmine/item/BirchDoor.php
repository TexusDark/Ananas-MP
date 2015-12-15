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

namespace pocketmine\item;

use pocketmine\block\Block;

class BirchDoor extends Item{
	public function __construct($meta = 0, $count = 1){
		$this->block = Block::get(Item::BIRCH_DOOR_BLOCK);
		parent::__construct(self::BIRCH_DOOR, 0, $count, "Birch Door");
	}

	public function getMaxStackSize(){
		return 1;
	}
}
