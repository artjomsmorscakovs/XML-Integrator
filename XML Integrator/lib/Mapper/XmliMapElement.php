<?php
/**
 * Main Map Element methods
 *
 * @package XML Integrator
 * @author Artjoms Morscakovs
 * @copyright Copyright (c) 2012, XML Integrator Inc
 * @version 1.0
*/

abstract class XmliMapElement implements XmliMapElementInterface{
	private $name;
	private $srcField;
	private $dstField;
		
	public function __construct($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setSrcField(XmliField $field){
		$this->srcField = $field;
	}
	
	public function getSrcField(){
		return $this->srcField;
	}
	
	public function setDstField(XmliField $field){
		$this->dstField = $field;
	}
	
	public function getDstField(){
		return $this->dstField;
	}
	
}