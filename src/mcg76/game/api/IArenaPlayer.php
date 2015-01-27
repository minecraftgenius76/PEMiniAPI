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
use pocketmine\event\block\BlockEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\entity\EntityMoveEvent;
use pocketmine\event\Listener;
use pocketmine\math\Vector3 as Vector3;
use pocketmine\math\Vector2 as Vector2;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\block\Cactus;
use pocketmine\plugin\Plugin;

/**
 * MG Arena Player Interface - skeleton
 * 
 * Copyright (C) 2014 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * MGArenaDAO class
 * ------------------------------------------------------------
 * @author minecraftgenius76
 *
*/
interface IArenaPlayer {
		
	public function __construct(Plugin $pg);	
	public function retrievePlayerByName($pname, $arena, $world);	
	public function retrieveArenaPlayers($arena);
	public function retrieveAllPlayerName();	
	public function upsetArenaPlayer($pname,$arena, $world, $home_x, $home_y, $home_z, $isAllow,$rating,$game);
	public function removeArena($arena, $pname);
}