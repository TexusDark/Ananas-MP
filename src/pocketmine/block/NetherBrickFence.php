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

class NetherBrickFence extends Transparent {

	protected $id = self::NETHER_BRICK_FENCE;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}
	
	public function getBreakTime(Item $item){
		if ($item instanceof Air){
			//Breaking by hand
			return 10;
		}
		else{
			// Other breaktimes are equal to woodfences.
			return parent::getBreakTime($item);
		}
	}

	public function getHardness(){
		return 2;
	}
        
	public function getToolType(){
		return Tool::TYPE_PICKAXE;
	}
	
	public function getName(){
		return "Nether Brick Fence";
	}
	
	public function canConnect(Block $block){
		//TODO: activate comments when the NetherBrickFenceGate class has been created.
		return ($block instanceof NetherBrickFence /* or $block instanceof NetherBrickFenceGate */) ? true : $block->isSolid() and !$block->isTransparent();
	}

	public function getDrops(Item $item){
		if($item->isPickaxe() >= Tool::TIER_WOODEN){
			return [
				[$this->id, $this->meta, 1],
			];
		}else{
			return [];
		}
	}        
}
