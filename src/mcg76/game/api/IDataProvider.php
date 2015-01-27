<?php

namespace mcg76\game\api;

use pocketmine\utils\TextFormat;

/**
 * Datas Provider Interface - Skeleton
 *
 * Copyright (C) 2015 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * @author MCG76
 *
 */

interface IDataProvider {

	public function getAllData();
	
	public function getDataByKey($key);
		
	public function removeDataByKey($key);
	
	public function removeAllData();
	
	public function saveAllData($values);
	
	public function saveData($key, $values);
	
	public function searchDataByParamter($param, $value);

}

