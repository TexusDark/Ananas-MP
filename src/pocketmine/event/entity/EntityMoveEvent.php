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
use pocketmine\Event;
use pocketmine\event\Cancellable;
use pocketmine\math\Vector3;

/**
 * @deprecated
 */
class EntityMoveEvent extends EntityEvent implements Cancellable{
	public static $handlerList = null;

	/** @var \pocketmine\math\Vector3 */
	private $pos;

	public function __construct(Entity $entity, Vector3 $pos){
		$this->entity = $entity;
		$this->pos = $pos;
	}

	public function getVector(){
		return $this->pos;
	}


}
