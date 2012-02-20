<?php
/**
 * 
 *
 * @package XML Integrator
 * @author Artjoms Morscakovs
 * @copyright Copyright (c) 2012, XML Integrator Inc
 * @version 1.0
*/

class XmliField {
	private $name;
	
	public function __construct($name){
		$this->name = $name;
	}	
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
}