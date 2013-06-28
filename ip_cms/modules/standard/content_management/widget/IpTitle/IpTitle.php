<?php
/**
 * @package ImpressPages
 * @copyright   Copyright (C) 2011 ImpressPages LTD.
 *
 */
namespace Modules\standard\content_management\widget;

if (!defined('CMS')) exit;



class IpTitle extends \Modules\standard\content_management\Widget{


    public function getTitle() {
        global $parametersMod;
        return $parametersMod->getValue('standard', 'content_management', 'widget_title', 'title');
    }
    
}