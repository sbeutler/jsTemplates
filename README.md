#Contao module jsTemplates

For Contao Version: 3.2.

## Description

This extension allows you to add js_ templates to the frontend layout. Just create an js_ template in the templates folder and add it in the backend to your layout (You`ll find it in the "Script settings" section.)

You have to choose the right frontend template fe_page_jsTemplates in your layout or just add the template variable $this->jsTemplates to your own template.

## Advanced information

You can add your own templates to the jsTemplates loader. Just add your parsed template to $GLOBALS['TL_CSS'][].	