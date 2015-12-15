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


class EnchantmentEntry{

	/** @var Enchantment[] */
	private $enchantments;
	private $cost;
	private $randomName;

	/**
	 * @param Enchantment[] $enchantments
	 * @param $cost
	 * @param $randomName
	 */
	public function __construct(array $enchantments, $cost, $randomName){
		$this->enchantments = $enchantments;
		$this->cost = (int) $cost;
		$this->randomName = $randomName;
	}

	public function getEnchantments(){
		return $this->enchantments;
	}

	public function getCost(){
		return $this->cost;
	}

	public function getRandomName(){
		return $this->randomName;
	}

}
