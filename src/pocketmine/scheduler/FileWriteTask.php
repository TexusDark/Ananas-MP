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

class FileWriteTask extends AsyncTask{

	private $path;
	private $contents;
	private $flags;

	public function __construct($path, $contents, $flags = 0){
		$this->path = $path;
		$this->contents = $contents;
		$this->flags = (int) $flags;
	}

	public function onRun(){
		try{
			file_put_contents($this->path, $this->contents, (int) $this->flags);
		}catch (\Exception $e){

		}
	}
}
