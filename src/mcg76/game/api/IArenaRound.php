<?php

namespace mcg76\game\api;

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

/**
 * Arena Round Interfaces
 * Copyright (C) 2015 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * IArenaRound class
 * ------------------------------------------------------------
 * @author minecraftgenius76
 *
*/
interface IArenaRound {
	
	public function retrieveRoundByName($round, $arena, $world);

	public function retrieveAllRoundName();
	
	public function upsetArenaRound($round,$arena,$owner, $world, $round_x, $round_y, $round_z, $exit_x, $exit_y, $exit_z, $minPlayers,$maxPlayers,$roundTime,$timeOut, $game);

	public function removeArena($round, $arena, $world);
}