<?php
/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as 
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

# Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));
App::uses('IniReader', 'Configure', 'Security');
Configure::config('default', new IniReader(APP . 'Config' . DS));

# Load additional config files.
Configure::load('arcs');
Configure::load('assets');

define("TWIG_VIEW_CACHE", APP . 'tmp');
define("LIB", CORE_PATH);
CakePlugin::load('TwigView');
