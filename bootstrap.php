<?php
/**
 * Fuel Sprockets
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel Sprockets
 * @version    1.0
 * @author     Veselin Vasilev
 * @license    MIT License
 * @copyright  2013 Veselin Vasilev
 * @link       http://vesselinv.com
 */

// Composer Autoloader
require __DIR__ .'/vendor/autoload.php';

Autoloader::add_core_namespace('Sprockets');

Autoloader::add_classes(array(
	'Sprockets\\Sprockets'             	=> __DIR__.'/classes/sprockets.php',
	'Sprockets\\Sprockets_Instance'    	=> __DIR__.'/classes/sprockets/instance.php',
	'Sprockets\\Sprockets_File'    			=> __DIR__.'/classes/sprockets/file.php',
	'Sprockets\\Sprockets_Parser'    		=> __DIR__.'/classes/sprockets/parser.php',
	'Sprockets\\Sprockets_Cache'    		=> __DIR__.'/classes/sprockets/cache.php',
	'Sprockets\\Sprockets_Compiler'    	=> __DIR__.'/classes/sprockets/compiler.php',
));

/* End of file bootstrap.php */