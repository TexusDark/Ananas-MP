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


use pocketmine\entity\Attribute;

class UpdateAttributesPacket extends DataPacket{
	const NETWORK_ID = Info::UPDATE_ATTRIBUTES_PACKET;


	public $entityId;
	/** @var Attribute[] */
	public $entries = [];

	public function decode(){

	}

	public function encode(){
		$this->reset();

		$this->putLong($this->entityId);

		$this->putShort(count($this->entries));

		foreach($this->entries as $entry){
			$this->putFloat($entry->getMinValue());
			$this->putFloat($entry->getMaxValue());
			$this->putFloat($entry->getValue());
			$this->putString($entry->getName());
		}
	}

}
