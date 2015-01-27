<?php
namespace mcg76\game\api;

/**
 * Configuration Manager Interface - Skeleton
 *
 * Copyright (C) 2014 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * @author MCG76
 *
 */
interface IConfigManager {
	
	private $minPLayer;
    private $maxPlayer;
    private $roundPLayTime;
    private $roundPrepareTime;
    private $kitsAllow;
    private $spectateJoin;
	private $damage;
	
	public function getConfig();
	
	public function getConfigValue($param);
	
	public function setConfig($param, $value);
	
	public function saveConfig($file, $values);
	
	public function loadConfig($file);
	
}