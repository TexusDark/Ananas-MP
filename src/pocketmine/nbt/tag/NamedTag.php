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

namespace pocketmine\nbt\tag;


abstract class NamedTag extends Tag{

	protected $__name;

	/**
	 * @param string                                                      $name
	 * @param bool|float|double|int|byte|short|array|Compound|Enum|string $value
	 */
	public function __construct($name = "", $value = null){
		$this->__name = ($name === null or $name === false) ? "" : $name;
		if($value !== null){
			$this->value = $value;
		}
	}

	public function getName(){
		return $this->__name;
	}

	public function setName($name){
		$this->__name = $name;
	}
}
