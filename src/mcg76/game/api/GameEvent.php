<?php

namespace mcg76\game\api;


use pocketmine\event\plugin\PluginEvent;
use pocketmine\plugin\Plugin;
/**
 * Game Event
 *
 * Copyright (C) 2014 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * @author minecraftgenius76
 *
 */

abstract class GameEvent extends PluginEvent{
	/**
	 * @param $plugin
	 */
	public function __construct(Plugin $plugin){
		parent::__construct($plugin);
	}
}