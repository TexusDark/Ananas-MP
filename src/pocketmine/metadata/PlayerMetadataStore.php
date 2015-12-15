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

namespace pocketmine\metadata;

use pocketmine\IPlayer;

class PlayerMetadataStore extends MetadataStore{

	public function disambiguate(Metadatable $player, $metadataKey){
		if(!($player instanceof IPlayer)){
			throw new \InvalidArgumentException("Argument must be an IPlayer instance");
		}

		return strtolower($player->getName()) . ":" . $metadataKey;
	}
}
