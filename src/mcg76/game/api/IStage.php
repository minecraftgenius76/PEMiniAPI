<?php
namespace mcg76\game\api;

/**
 * Stange
 *
 * Copyright (C) 2014 minecraftgenius76
 * YouTube Channel: http://www.youtube.com/user/minecraftgenius76
 *
 * @author MCG76
 *
 */

interface IStage {
  const WAITING=0;
  const PREPARING=1;
  const PLAYING=2;
  const RESETTING = 3;

  public $stages = [];
  
  
  public function values();
  
  public function valuesOf();
  
  
}