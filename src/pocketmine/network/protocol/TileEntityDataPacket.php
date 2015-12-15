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

namespace pocketmine\network\protocol;

#include <rules/DataPacket.h>


class TileEntityDataPacket extends DataPacket{
	const NETWORK_ID = Info::TILE_ENTITY_DATA_PACKET;

	public $x;
	public $y;
	public $z;
	public $namedtag;

	public function decode(){
		$this->x = $this->getInt();
		$this->y = $this->getByte();
		$this->z = $this->getInt();
		$this->namedtag = $this->get(true);
	}

	public function encode(){
		$this->reset();
		$this->putInt($this->x);
		$this->putByte($this->y);
		$this->putInt($this->z);
		$this->put($this->namedtag);
	}

}
