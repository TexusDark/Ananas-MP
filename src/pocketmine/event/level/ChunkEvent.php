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

/**
 * Level related events
 */
namespace pocketmine\event\level;

use pocketmine\level\format\FullChunk;

abstract class ChunkEvent extends LevelEvent{
	/** @var FullChunk */
	private $chunk;

	/**
	 * @param FullChunk $chunk
	 */
	public function __construct(FullChunk $chunk){
		parent::__construct($chunk->getProvider()->getLevel());
		$this->chunk = $chunk;
	}

	/**
	 * @return FullChunk
	 */
	public function getChunk(){
		return $this->chunk;
	}
}
