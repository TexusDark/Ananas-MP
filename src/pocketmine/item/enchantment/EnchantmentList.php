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

namespace pocketmine\item\enchantment;


class EnchantmentList{

	/** @var EnchantmentEntry[] */
	private $enchantments;

	public function __construct($size){
		$this->enchantments = new \SplFixedArray($size);
	}

	/**
	 * @param $slot
	 * @param EnchantmentEntry $entry
	 */
	public function setSlot($slot, EnchantmentEntry $entry){
		$this->enchantments[$slot] = $entry;
	}

	/**
	 * @param $slot
	 * @return EnchantmentEntry
	 */
	public function getSlot($slot){
		return $this->enchantments[$slot];
	}

	public function getSize(){
		return $this->enchantments->getSize();
	}

}
