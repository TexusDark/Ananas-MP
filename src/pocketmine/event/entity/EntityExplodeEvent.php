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

use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\event\Cancellable;
use pocketmine\level\Position;

/**
 * Called when a entity explodes
 */
class EntityExplodeEvent extends EntityEvent implements Cancellable{
	public static $handlerList = null;

	/** @var Position */
	protected $position;

	/**
	 * @var Block[]
	 */
	protected $blocks;

	/** @var float */
	protected $yield;

	/**
	 * @param Entity   $entity
	 * @param Position $position
	 * @param Block[]  $blocks
	 * @param float    $yield
	 */
	public function __construct(Entity $entity, Position $position, array $blocks, $yield){
		$this->entity = $entity;
		$this->position = $position;
		$this->blocks = $blocks;
		$this->yield = $yield;
	}

	/**
	 * @return Position
	 */
	public function getPosition(){
		return $this->position;
	}

	/**
	 * @return Block[]
	 */
	public function getBlockList(){
		return $this->blocks;
	}

	/**
	 * @param Block[] $blocks
	 */
	public function setBlockList(array $blocks){
		$this->blocks = $blocks;
	}

	/**
	 * @return float
	 */
	public function getYield(){
		return $this->yield;
	}

	/**
	 * @param float $yield
	 */
	public function setYield($yield){
		$this->yield = $yield;
	}

}
