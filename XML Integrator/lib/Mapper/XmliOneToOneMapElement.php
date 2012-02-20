<?php
/**
 * 
 *
 * @package XML Integrator
 * @author Artjoms Morscakovs
 * @copyright Copyright (c) 2012, XML Integrator Inc
 * @version 1.0
*/

class XmliOneToOneMapElement extends XmliMapElement {
	
	public function mapElement(){
		//This just a test
		$this->setDstField($this->getSrcField());
		
		return $this->getDstField();
	}
	
}