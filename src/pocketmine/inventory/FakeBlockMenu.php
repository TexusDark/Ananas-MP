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

namespace pocketmine\inventory;


use pocketmine\level\Position;


class FakeBlockMenu extends Position implements InventoryHolder{

	private $inventory;

	public function __construct(Inventory $inventory, Position $pos){
		$this->inventory = $inventory;
		parent::__construct($pos->x, $pos->y, $pos->z, $pos->level);
	}

	public function getInventory(){
		return $this->inventory;
	}
}
