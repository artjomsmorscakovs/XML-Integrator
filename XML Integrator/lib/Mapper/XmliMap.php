<?php
/**
 * 
 *
 * @package XML Integrator
 * @author Artjoms Morscakovs
 * @copyright Copyright (c) 2012, XML Integrator Inc
 * @version 1.0
*/

class XmliMap {
	private $mapElements = array();
	
	public function map(){
		foreach ($this->mapElements as $mapElement){
			$mapElement->mapElement();
		}
	}

	public function addMapElement(XmliMapElement $mapElement){
		$this->mapElements[$mapElement->getName()] = $mapElement;
		
		return $mapElement;
	}
	
	public function deleteMapElement($mapElementName){
		unset($this->mapElements[$mapElementName]);
	}
	
	public function mapElementExists($mapElementName){
		return isset($this->mapElements[$mapElementName]);
	}
	
	public function getMapElement($mapElementName){
		return isset($this->mapElements[$mapElementName]) ? $this->mapElements[$mapElementName] : null;
	}
		
}