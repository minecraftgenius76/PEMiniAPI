<?php
namespace mcg76\game\api;


/**
 * Game Button  -  Skeleton
 *
 * Copyright (C) 2014 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * @author MCG76
 *
 */

Abstract class AbstractGameButton {
	private $x;
	private $y;
	private $z; 
	
	private $plugin;
	private $world;
	private $arena;
	private $number;
	private $type;
	private $index;
	
	public function __construct($x,$y,$z,$plugin, $world, $arena, $idx,$lobbytype) {

	}
	
	public function getX() {
		return $x;
	}	
	
	public function getY() {
		return $y;
	}
	
	public function getZ() {
		
	}
	public function getWorld() {
		
	}
	public function setWorld() {
		
	}
	
	public function getArena() {
		
	}
	
	public function setArena($a) {
		$this->arena = $a;
	}
	
	public function getNumber() {
		return $this->number;
	}
	
	public function setNumber($n) {
		$this->number = $n;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($lobbyType) {
		$this->type=$lobbyType;
	}
	
	public function getWorld($w) {
		$this->world = $w;		
	}
	
}