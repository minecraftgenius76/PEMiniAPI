<?php
namespace mcg76\game\api;

use pocketmine\plugin\Plugin;
use pocketmine\Player;
/**
 * Arena skeleton - skeleton
 *
 * Copyright (C) 2015 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * @author MCG76
 *
 */

interface IArena {
	
	public function __construct(Plugin $pg);	
	public function createRound(String $area);	
	public function getRound(String $area);
	public function getArena(Player $p, $arenaName);	
	public function getOwnerArena(Player $p, String $arenaName);		
	public function setBuilder ($builder);	
	public function buildArena($arenaName,$world, Player $owner);
	public function joinArena($pname, $arena, $world, $x, $y, $z);	
	public function unjoinArena($arena) ;	
	public function deleteArena($arena, $owner, $world);	
	public function getPlayers($arenaName);	
	public function log(String $message, integer $level);
}
