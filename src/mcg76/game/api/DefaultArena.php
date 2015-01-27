<?php

namespace mcg76\game\api\interfaces;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\level\Position;
use pocketmine\level\Level;
use mcg76\game\api\IArena;

/**
 * MG Arena Provider - skeleton
 *
 * Copyright (C) 2015 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * MGArenaDAO class
 * ------------------------------------------------------------
 * 
 * @author minecraftgenius76
 *        
 *        
 */
class MGArena implements IArena {
	public function __construct($pg) {
	}
	public function retrieveArenaByName($arena, $owner, $world) {
	}
	public function retrieveArena($arena, $world) {
	}
	public function retrieveAllArenaName() {
	}
	public function upsetArena($arena, $owner, $world, $entrance_x, $entrance_y, $entrance_z, $exit_x, $exit_y, $exit_z, $size, $capacity, $level, $isprivate, $game) {
	}
	public function removeArena($arena, $owner) {
	}
}