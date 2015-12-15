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

use pocketmine\plugin\Plugin;

interface Metadatable{

	/**
	 * Sets a metadata value in the implementing object's metadata store.
	 *
	 * @param string        $metadataKey
	 * @param MetadataValue $newMetadataValue
	 *
	 * @return void
	 */
	public function setMetadata($metadataKey, MetadataValue $newMetadataValue);

	/**
	 * Returns a list of previously set metadata values from the implementing
	 * object's metadata store.
	 *
	 * @param string $metadataKey
	 *
	 * @return MetadataValue[]
	 */
	public function getMetadata($metadataKey);

	/**
	 * Tests to see whether the implementing object contains the given
	 * metadata value in its metadata store.
	 *
	 * @param string $metadataKey
	 *
	 * @return boolean
	 */
	public function hasMetadata($metadataKey);

	/**
	 * Removes the given metadata value from the implementing object's
	 * metadata store.
	 *
	 * @param string $metadataKey
	 * @param Plugin $owningPlugin
	 *
	 * @return void
	 */
	public function removeMetadata($metadataKey, Plugin $owningPlugin);

}
