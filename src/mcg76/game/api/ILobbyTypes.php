<?php

namespace mcg76\game\api;

/**
 * Lobbyt Types
 *
 * Copyright (C) 2015 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * @author MCG76
 *
 */

interface ILobbyTypes {
	public $STATUS;
	public $PLAYERS;
	public $values = [ ];
	public $lobbyType;
	public function fromString($s);
}