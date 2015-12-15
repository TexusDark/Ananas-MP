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

namespace pocketmine\block;

use pocketmine\item\Item;
use pocketmine\item\Tool;
use pocketmine\Player;

class Wood extends Solid{
	const OAK = 0;
	const SPRUCE = 1;
	const BIRCH = 2;
	const JUNGLE = 3;
	//const ACACIA = 4;
	//const DARK_OAK = 5;

	protected $id = self::WOOD;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getHardness(){
		return 2;
	}

	public function getName(){
		static $names = [
			self::OAK => "Oak Wood",
			self::SPRUCE => "Spruce Wood",
			self::BIRCH => "Birch Wood",
			self::JUNGLE => "Jungle Wood",
		];
		return $names[$this->meta & 0x03];
	}

	public function place(Item $item, Block $block, Block $target, $face, $fx, $fy, $fz, Player $player = null){
		$faces = [
			0 => 0,
			1 => 0,
			2 => 0b1000,
			3 => 0b1000,
			4 => 0b0100,
			5 => 0b0100,
		];

		$this->meta = ($this->meta & 0x03) | $faces[$face];
		$this->getLevel()->setBlock($block, $this, true, true);

		return true;
	}

	public function getDrops(Item $item){
		return [
			[$this->id, $this->meta & 0x03, 1],
		];
	}

	public function getToolType(){
		return Tool::TYPE_AXE;
	}
}
