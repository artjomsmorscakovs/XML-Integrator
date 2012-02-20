<?php
/**
 * 
 *
 * @package XML Integrator
 * @author Artjoms Morscakovs
 * @copyright Copyright (c) 2012, XML Integrator Inc
 * @version 1.0
*/

class XmliSchema {
	private $name;
	private $root = array();
	
	public function __construct($name){
		$this->name = $name;
	}
	
	public function addRoot(XmliType $root){
		$this->root[$root->getName()] = $root;
		
		return $root;
	}
	
	public function removeRoot($rootName){
		unset($this->addRoot[$rootName]);
	}
	
	public function rootExists($rootName){
		return isset($this->root[$rootName]);
	}
	
	public function getRoot($rootName){
		return isset($this->root[$rootName]) ? $this->root[$rootName] : null;
	}	
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
}