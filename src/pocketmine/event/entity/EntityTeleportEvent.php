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
use pocketmine\level\Position;

class EntityTeleportEvent extends EntityEvent implements Cancellable{
	public static $handlerList = null;

	/** @var Position */
	private $from;
	/** @var Position */
	private $to;

	public function __construct(Entity $entity, Position $from, Position $to){
		$this->entity = $entity;
		$this->from = $from;
		$this->to = $to;
	}

	/**
	 * @return Position
	 */
	public function getFrom(){
		return $this->from;
	}

	/**
	 * @param Position $from
	 */
	public function setFrom(Position $from){
		$this->from = $from;
	}

	/**
	 * @return Position
	 */
	public function getTo(){
		return $this->to;
	}

	/**
	 * @param Position $to
	 */
	public function setTo(Position $to){
		$this->to = $to;
	}


}
