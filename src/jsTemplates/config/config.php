<?php
 /**
 *
 *          _           _                       _
 *         | |         | |                     | |
 *      ___| | __ _ ___| |____      _____  _ __| | _____
 *     / __| |/ _` / __| '_ \ \ /\ / / _ \| '__| |/ / __|
 *     \__ \ | (_| \__ \ | | \ V  V / (_) | |  |   <\__ \
 *     |___/_|\__,_|___/_| |_|\_/\_/ \___/|_|  |_|\_\___/
 *                                        web development
 *
 *     http://www.slash-works.de </> hallo@slash-works.de
 *
 *
 * @author      jrgregory
 * @copyright   jrgregory@slashworks
 * @since       20.04.15 | KW 17 18:55
 * @package     jsTemplates
 *
 */

/**
 * Global js array to register new templates
 */

$GLOBALS['TL_JS'] = array();

/**
 * hook to include the module into page
 */

$GLOBALS['TL_HOOKS']['generatePage'][] = array('slashworks\Frontend\JsTemplates', 'loadJsTemplates');