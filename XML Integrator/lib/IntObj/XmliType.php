<?php
/**
 * 
 *
 * @package XML Integrator
 * @author Artjoms Morscakovs
 * @copyright Copyright (c) 2012, XML Integrator Inc
 * @version 1.0
*/

class XmliType {
	private $name;
	private $fields = array();
	private $types = array();
	
	public function __construct($name){
		$this->name = $name;
	}	
	
	public function addField(XmliField $field){
		$this->fields[$field->getName()] = $field;
		
		return $field;
	}
	
	public function removeField($fieldName){
		unset($this->fields[$fieldName]);
	}
	
	public function fieldExists($fieldName){
		return isset($this->fields[$fieldName]);
	}
	
	public function getField($fieldName){
		return isset($this->fields[$fieldName]) ? $this->fields[$fieldName] : null;
	}
	
	public function addType(XmliType $type){
		$this->types[$type->getName()] = $type;
		
		return $type;
	}
	
	public function removeType($typeName){
		unset($this->types[$typeName]);
	}
	
	public function typeExists($typeName){
		return isset($this->types[$typeName]) ;
	}
	
	public function getType($typeName){
		return isset($this->types[$typeName]) ? $this->types[$typeName] : null;
	}
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
}