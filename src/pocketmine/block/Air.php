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

namespace pocketmine\block;

use pocketmine\item\Item;


/**
 * Air block
 */
class Air extends Transparent{

	protected $id = self::AIR;
	protected $meta = 0;

	public function __construct(){

	}

	public function getName(){
		return "Air";
	}

	public function canPassThrough(){
		return true;
	}

	public function isBreakable(Item $item){
		return false;
	}

	public function canBeFlowedInto(){
		return true;
	}

	public function canBeReplaced(){
		return true;
	}

	public function canBePlaced(){
		return false;
	}

	public function isSolid(){
		return false;
	}

	public function getBoundingBox(){
		return null;
	}

	public function getHardness(){
		return -1;
	}

	public function getResistance(){
		return 0;
	}

}
