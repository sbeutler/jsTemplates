<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'slashworks',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'slashworks\Backend\Dca\JsTemplates'   => 'system/modules/jsTemplates/classes/Backend/Dca/JsTemplates.php',
	'slashworks\Frontend\JsTemplates' => 'system/modules/jsTemplates/classes/Frontend/JsTemplates.php',
));
