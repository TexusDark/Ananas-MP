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


class PlayerArmorEquipmentPacket extends DataPacket{
	const NETWORK_ID = Info::PLAYER_ARMOR_EQUIPMENT_PACKET;

	public $eid;
	public $slots = [];

	public function decode(){
		$this->eid = $this->getLong();
		$this->slots[0] = $this->getByte();
		$this->slots[1] = $this->getByte();
		$this->slots[2] = $this->getByte();
		$this->slots[3] = $this->getByte();
	}

	public function encode(){
		$this->reset();
		$this->putLong($this->eid);
		$this->putByte($this->slots[0]);
		$this->putByte($this->slots[1]);
		$this->putByte($this->slots[2]);
		$this->putByte($this->slots[3]);
	}

}
