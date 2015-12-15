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
 * Math related classes, like matrices, bounding boxes and vector
 */
namespace pocketmine\math;


abstract class Math{

	public static function floorFloat($n){
		$i = (int) $n;
		return $n >= $i ? $i : $i - 1;
	}

	public static function ceilFloat($n){
		$i = (int) ($n + 1);
		return $n >= $i ? $i : $i - 1;
	}
}
