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

namespace pocketmine\event\entity;

use pocketmine\entity\Entity;
use pocketmine\event\Cancellable;

/**
 * Called when a entity decides to explode
 */
class ExplosionPrimeEvent extends EntityEvent implements Cancellable{
	public static $handlerList = null;

	protected $force;
	private $blockBreaking;

	/**
	 * @param Entity $entity
	 * @param float  $force
	 */
	public function __construct(Entity $entity, $force){
		$this->entity = $entity;
		$this->force = $force;
		$this->blockBreaking = true;
	}

	/**
	 * @return float
	 */
	public function getForce(){
		return $this->force;
	}

	public function setForce($force){
		$this->force = (float) $force;
	}

	/**
	 * @return bool
	 */
	public function isBlockBreaking(){
		return $this->blockBreaking;
	}

	/**
	 * @param bool $affectsBlocks
	 */
	public function setBlockBreaking($affectsBlocks){
		$this->blockBreaking = (bool) $affectsBlocks;
	}

}
