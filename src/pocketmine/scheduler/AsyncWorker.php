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


namespace pocketmine\scheduler;

use pocketmine\Worker;

class AsyncWorker extends Worker{

	public function run(){
		$this->registerClassLoader();
		gc_enable();
		ini_set("memory_limit", -1);

		global $store;
		$store = [];

	}

	public function start($options = PTHREADS_INHERIT_NONE){
		parent::start(PTHREADS_INHERIT_CONSTANTS | PTHREADS_INHERIT_FUNCTIONS);
	}

	public function getThreadName(){
		return "Asynchronous Worker";
	}
}
