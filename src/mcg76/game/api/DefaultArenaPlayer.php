<?php

namespace mcg76\game\api;

use pocketmine\Player;
use mcg76\game\api\interfaces\IArenaPlayer;

/**
 * Default Arena Player Implementation
 *
 * Copyright (C) 2014 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * @author MCG76
 *
 */

class DefaultArenaPlayer implements IArenaPlayer{
	
	public $playerName;
	public $player;

	public $areaneOwner;
	public $arenaName;
	public $arena; 
	
	public $arena_x;
	public $arena_y;
	public $arena_z;
		
	public $home_x;
	public $home_y;
	public $home_z;

	public $lobby_x;
	public $lobby_y;
	public $lobby_z;
		
	public $currentStatus;	
	public $rating;
	public $isAllow;
	public $game;
			
	public function __construct(Player $p) {
		$this->player = $p;
		$this->playerName = $p->getName();
	}
	
}