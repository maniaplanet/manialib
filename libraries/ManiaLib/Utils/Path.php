<?php
/**
 * @version     $Revision: $:
 * @author      $Author: $:
 * @date        $Date: $:
 */
namespace ManiaLib\Utils;

class Path extends Singleton
{
	public $root;
	public $config;
	public $log;
	public $resources;
	
	public function getRoot()
	{
		if (!$this->root && !defined(MANIALIB_APP_PATH))
			throw new \Exception();
		return $this->root ? : MANIALIB_APP_PATH;
	}
	
	public function getConfig()
	{
		return $this->config ? : $this->getRoot().DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR;
	}
	
	public function getLog()
	{
		return $this->log ? : $this->getRoot().DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR;
	}
	
	public function getResources()
	{
		return $this->resources ? : $this->getRoot().DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR;
	}
}
?>