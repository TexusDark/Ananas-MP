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


use pocketmine\item\Tool;
use pocketmine\math\AxisAlignedBB;
use pocketmine\math\Vector3;

class StoneWall extends Transparent{
	const NONE_MOSSY_WALL = 0;
	const MOSSY_WALL = 1;

	protected $id = self::STONE_WALL;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function isSolid(){
		return false;
	}

	public function getToolType(){
		return Tool::TYPE_PICKAXE;
	}

	public function getHardness(){
		return 2;
	}

	public function getName(){
		if($this->meta === 0x01){
			return "Mossy Cobblestone Wall";
		}

		return "Cobblestone Wall";
	}

	protected function recalculateBoundingBox(){

		$north = $this->canConnect($this->getSide(Vector3::SIDE_NORTH));
		$south = $this->canConnect($this->getSide(Vector3::SIDE_SOUTH));
		$west = $this->canConnect($this->getSide(Vector3::SIDE_WEST));
		$east = $this->canConnect($this->getSide(Vector3::SIDE_EAST));

		$n = $north ? 0 : 0.25;
		$s = $south ? 1 : 0.75;
		$w = $west ? 0 : 0.25;
		$e = $east ? 1 : 0.75;

		if($north and $south and !$west and !$east){
			$w = 0.3125;
			$e = 0.6875;
		}elseif(!$north and !$south and $west and $east){
			$n = 0.3125;
			$s = 0.6875;
		}

		return new AxisAlignedBB(
			$this->x + $w,
			$this->y,
			$this->z + $n,
			$this->x + $e,
			$this->y + 1.5,
			$this->z + $s
		);
	}

	public function canConnect(Block $block){
		return ($block->getId() !== self::COBBLE_WALL and $block->getId() !== self::FENCE_GATE) ? $block->isSolid() and !$block->isTransparent() : true;
	}

}
