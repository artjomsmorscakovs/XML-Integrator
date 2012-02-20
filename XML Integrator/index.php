<?php
/**
 * 
 * @package XML Integrator
 * @author Artjoms Morscakovs
 * @copyright Copyright (c) 2012, XML Integrator Inc
 * @version 1.0
*/

require_once 'lib/TheApplication.php';
require_once 'config.php';

$TheApplication = TheApplication::getInstance(); 

echo '<pre>';


//Creating Source Schema
$SrcSchema = new XmliSchema('SrcSchema');
$SrcType = $SrcSchema->addRoot(new XmliType('SrcType'));
$SrcField = $SrcType->addField(new XmliField('SrcField'));

echo "Source Schema: \n";
print_r($SrcSchema);


//Creating Destination Schema
$DstSchema = new XmliSchema('DstSchema');
$DstType = $DstSchema->addRoot(new XmliType('DstType'));
$DstField = $DstType->addField(new XmliField('DstField'));

echo "Destination Schema: \n";
print_r($DstSchema);

//Creating Map object
$map = new XmliMap();
$ele = $map->addMapElement(new XmliOneToOneMapElement('OneToOne'));
$ele->setSrcField($SrcField);
$ele->setDstField($DstField);

echo "Map: \n";
print_r($map);

$map->map();

echo "After Map: \n";
print_r($map);


echo '</pre>';



