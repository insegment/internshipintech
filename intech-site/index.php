<?php

/*
 * Debugger tool for php https://tracy.nette.org/
 * It may stay enabled all the time since it can handle autodetection for development(local) or production environment
 *
 * You can dump any variable to bebug bar using:
 * Tracy\Debugger::barDump($variable);
 *
 * If you print more variables you may use the 2nd parameter to give a title:
 * Tracy\Debugger::barDump($variable, 'Custom fields');
 */

require('tracy/src/tracy.php');

use Tracy\Debugger;

Debugger::enable();

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
