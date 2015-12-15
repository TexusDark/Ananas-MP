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

namespace pocketmine\level\particle;

use pocketmine\network\protocol\LevelEventPacket;
use pocketmine\block\Block;
use pocketmine\math\Vector3;

class DestroyBlockParticle extends Particle{
	
	protected $data;

	public function __construct(Vector3 $pos, Block $b){
		parent::__construct($pos->x, $pos->y, $pos->z);
		$this->data = $b->getId() + ($b->getDamage() << 12);
	}
	
	public function encode(){
		$pk = new LevelEventPacket;
		$pk->evid = LevelEventPacket::EVENT_PARTICLE_DESTROY;
		$pk->x = $this->x;
		$pk->y = $this->y;
		$pk->z = $this->z;
		$pk->data = $this->data;
		
		return $pk;
	}
}
