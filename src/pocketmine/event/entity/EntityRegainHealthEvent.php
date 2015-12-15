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

class EntityRegainHealthEvent extends EntityEvent implements Cancellable{
	public static $handlerList = null;

	const CAUSE_REGEN = 0;
	const CAUSE_EATING = 1;
	const CAUSE_MAGIC = 2;
	const CAUSE_CUSTOM = 3;

	private $amount;
	private $reason;


	/**
	 * @param Entity $entity
	 * @param float  $amount
	 * @param int    $regainReason
	 */
	public function __construct(Entity $entity, $amount, $regainReason){
		$this->entity = $entity;
		$this->amount = $amount;
		$this->reason = (int) $regainReason;
	}

	/**
	 * @return float
	 */
	public function getAmount(){
		return $this->amount;
	}

	/**
	 * @param float $amount
	 */
	public function setAmount($amount){
		$this->amount = $amount;
	}

	public function getRegainReason(){
		return $this->reason;
	}

}
