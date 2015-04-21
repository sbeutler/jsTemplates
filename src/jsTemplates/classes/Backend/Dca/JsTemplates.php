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
 * @since       20.04.15 | KW 17 18:41
 * @package     jsTemplates
 *
 */

namespace slashworks\Backend\Dca;

/**
 * Class JsTemplates
 * @package slashworks\BE\Dca
 */

class JsTemplates extends \Backend
{

    /**
     * get all templates with js_ prefix and returns them as array
     * @return array
     */

    public function getJsTemplates()
    {
        return $this->getTemplateGroup('js_');
    }

} 