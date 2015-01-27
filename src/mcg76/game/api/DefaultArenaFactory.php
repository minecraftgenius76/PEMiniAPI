<?php

namespace mcg76\game\api;


/**
 * Default Arena Factory - skeleton
 *
 * Copyright (C) 2015 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * @author MCG76
 *
 */

final class DefaultArenaFactory {
	protected static $newInstance = null; 


	private function __construct($pg) {
		$this->plugin = $pg;
	}

	/**
	 * Instance 
	 * 
	 * @param unknown $plugin
	 * @param unknown $arena
	 * @param unknown $world
	 */
	public static function createArenaFactory($pg) {
		if (static::$newInstance === null) {
			static::$newInstance = new static ($pg);
		}
		return static::$newInstance;
	}
	
	public function newArena() {
	}
		
	public function getPlugIn() {
		return $this->plugin;
	}

	public function getArena() {

	}

	public function addSpawn(Location $loc) {
	}
	public function deleteSpawn(Location $loc) {
	}
	public function setMinBound($x, $y, $z) {
	}
	public function setMaxBound($x, $y, $z) {
	}
	public function writeChange() {
	}
	public function isNewInstance() {
		return $newInstance == null ? null : $newInstance;
	}
	public function destroy() {
	}
}