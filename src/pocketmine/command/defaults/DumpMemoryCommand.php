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

namespace pocketmine\command\defaults;

use pocketmine\command\CommandSender;


class DumpMemoryCommand extends VanillaCommand{

	private static $executions = 0;

	public function __construct($name){
		parent::__construct(
			$name,
			"Dumps the memory",
			"/$name <TOKEN (run once to get it)> [path]"
		);
		$this->setPermission("pocketmine.command.dumpmemory");
	}

	public function execute(CommandSender $sender, $currentAlias, array $args){
		if(!$this->testPermission($sender)){
			return true;
		}

		$token = strtoupper(substr(sha1(BOOTUP_RANDOM . ":" . $sender->getServer()->getServerUniqueId() . ":" . self::$executions), 6, 6));

		if(count($args) < 1 or strtoupper($args[0]) !== $token){
			$sender->sendMessage("Usage: /" . $this->getName() . " " . $token);
			return true;
		}

		++self::$executions;

		$sender->getServer()->getMemoryManager()->dumpServerMemory(isset($args[1]) ? $args[1] : $sender->getServer()->getDataPath() . "/memoryDump_$token", 48, 80);
		return true;
	}
}
