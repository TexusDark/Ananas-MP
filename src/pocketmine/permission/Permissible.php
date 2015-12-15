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

namespace pocketmine\permission;

use pocketmine\plugin\Plugin;

interface Permissible extends ServerOperator{

	/**
	 * Checks if this instance has a permission overridden
	 *
	 * @param string|Permission $name
	 *
	 * @return boolean
	 */
	public function isPermissionSet($name);

	/**
	 * Returns the permission value if overridden, or the default value if not
	 *
	 * @param string|Permission $name
	 *
	 * @return mixed
	 */
	public function hasPermission($name);

	/**
	 * @param Plugin $plugin
	 * @param string $name
	 * @param bool   $value
	 *
	 * @return PermissionAttachment
	 */
	public function addAttachment(Plugin $plugin, $name = null, $value = null);

	/**
	 * @param PermissionAttachment $attachment
	 *
	 * @return void
	 */
	public function removeAttachment(PermissionAttachment $attachment);


	/**
	 * @return void
	 */
	public function recalculatePermissions();

	/**
	 * @return Permission[]
	 */
	public function getEffectivePermissions();

}
