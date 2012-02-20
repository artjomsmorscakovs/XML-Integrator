<?php
/**
 * 
 * @package XML Integrator
 * @author Artjoms Morscakovs
 * @copyright Copyright (c) 2012, XML Integrator Inc
 * @version 1.0
*/
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');

require_once 'lib/TheApplication.php';
require_once 'config.php';

$conf = TheApplication::getInstance(); 
var_dump($conf);
echo '<pre>';
$schema = new XmliSchema('schema');
$type = $schema->addRoot(new XmliType('type'));
$field = $type->addField(new XmliField('field'));

print_r($schema);
echo '</pre>';



