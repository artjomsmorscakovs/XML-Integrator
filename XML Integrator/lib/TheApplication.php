<?php
/**
 * The main Application class which puts all together
 * 
 * @package XML Integrator
 * @author Artjoms Morscakovs
 * @copyright Copyright (c) 2012, XML Integrator Inc
 * @version 1.0
*/

require_once 'Autoloader.php';

class TheApplication {
    private static $instance;
    private $config;

    /**
     * 
     * Load configuration data
     * Register Autoloader class
     */
    private function __construct(){
    	$this->config = new Config();
		Autoloader::addClassPath($this->config->lib_path);
		Autoloader::setCacheFilePath($_SERVER["DOCUMENT_ROOT"].$this->config->class_cache_file);
		spl_autoload_register(array('Autoloader', 'loadClass'));
    }
    
    /**
     * 
     * Save loaded class cache into file
     */
    public function __destruct(){
    	Autoloader::saveCachedPaths();
    }

    public static function getInstance(){
        if (!isset(self::$instance)) {
            //echo 'Creating new Instance';
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }
    
    public function getConfig(){
    	return $this->config;
    }

    public function __clone(){
        trigger_error('It is not allowed to clone Application Singleton', E_USER_ERROR);
    }

    public function __wakeup(){
        trigger_error('Deserialization is not allowed for Application Singleton', E_USER_ERROR);
	}
}