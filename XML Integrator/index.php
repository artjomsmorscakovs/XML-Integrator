<?php
/**
 * 
 * @package XML Integrator
 * @author Artjoms Morscakovs
 * @copyright Copyright (c) 2012, XML Integrator Inc
 * @version 1.0
*/

require_once 'lib/TheApplication.php';

//@TODO to decide which option is better to use.
//$conf = TheApplication::getInstance()->getConfig(); 
$conf = TheApplication()->getConfig();
var_dump($conf);

echo 'ok';

function TheApplication(){
	return TheApplication::getInstance();
}
