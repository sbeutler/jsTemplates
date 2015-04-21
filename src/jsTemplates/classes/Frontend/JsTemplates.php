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

namespace slashworks\Frontend;


/**
 * Class JsTemplates
 */

class JsTemplates extends \Frontend
{

    /**
     * include the jsTemplates into PageRegular
     * @param \PageModel $oPage
     * @param \LayoutModel $oLayout
     * @param \PageRegular $oPageRegular
     */

    public function loadJsTemplates(\PageModel $oPage, \LayoutModel $oLayout, \PageRegular $oPageRegular)
    {

        $aJsTemplates = deserialize($oLayout->jsTemplates);

        if($aJsTemplates) {
            foreach($aJsTemplates as $sFile)
            {
                $GLOBALS['TL_JS'][] = static::generateJsTemplate($sFile);
            }
        }

        $oPageRegular->Template->jsTemplates = static::returnJsTemplates();

    }

    /**
     * genreates templates
     * @param $sFile
     * @return string
     */

    static private function generateJsTemplate($sFile)
    {

        $aGetFileName = explode('.',$sFile);
        $tpl = new \FrontendTemplate($aGetFileName[0]);
        return $tpl->parse();

    }

    /**
     * Returns all templates as string
     * @return string
     */

    static private function returnJsTemplates()
    {

        $sReturn = '';

        foreach($GLOBALS['TL_JS'] as $sTemplate)
        {

            $sReturn .= $sTemplate;

        }

        return $sReturn;

    }

} 