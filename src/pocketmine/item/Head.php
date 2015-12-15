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

class Head extends Item{
	public function __construct($meta = 0, $count = 1){
		parent::__construct(self::HEAD, $meta, $count, "Skeleton Skull");
		if($this->meta === 1){
			$this->name = "Wither Skeleton Skull";
		}
		elseif($this->meta === 2){
			$this->name = "Zombie Head";
		}
		elseif($this->meta === 3){
			$this->name = "Head";
		}
		elseif($this->meta === 4){
			$this->name = "Creeper Head";
		}
	}
}
