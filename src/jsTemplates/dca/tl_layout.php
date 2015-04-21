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
 * @since       20.04.15 | KW 17 18:35
 * @package     jsTemplates
 *
 */

/**
 * add jsTemplates to default palette
 */

$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace
(
    '{script_legend}',
    '{script_legend},jsTemplates',
    $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']
);

/**
 * jsTemplates dca field
 */

$GLOBALS['TL_DCA']['tl_layout']['fields']['jsTemplates'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['jsTemplates'],
    'exclude'                 => true,
    'filter'                  => true,
    'search'                  => true,
    'inputType'               => 'checkboxWizard',
    'options_callback'        => array('slashworks\Backend\Dca\JsTemplates', 'getJsTemplates'),
    'eval'                    => array('multiple'=>true),
    'sql'                     => "text NULL"
);