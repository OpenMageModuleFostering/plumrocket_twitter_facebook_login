<?php
/**
 * Plumrocket Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the End-user License Agreement
 * that is available through the world-wide-web at this URL:
 * http://wiki.plumrocket.net/wiki/EULA
 * If you are unable to obtain it through the world-wide-web, please
 * send an email to support@plumrocket.com so we can send you a copy immediately.
 *
 * @package     Plumrocket_SocialLogin
 * @copyright   Copyright (c) 2014 Plumrocket Inc. (http://www.plumrocket.com)
 * @license     http://wiki.plumrocket.net/wiki/EULA  End-user License Agreement
 */


class Plumrocket_SocialLogin_Block_System_Config_Callbackurl extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /*public function render(Varien_Data_Form_Element_Abstract $element)
    {
        // $moduleNode     = Mage::getConfig()->getNode('modules/Plumrocket_SocialLogin');
        // $name           = $moduleNode->name;
        // $version        = $moduleNode->version;
        // $wiki           = $moduleNode->wiki;

        $path = Mage::helper('pslogin')->getCallbackURL('_PROVIDER_');
        return '<tr id="row_pslogin_facebook_callbackurl"><td class="label">Callback URL</td><td class="value"><input id="pslogin_facebook_callbackurl" type="text" name="" value="'. $path .'" class="input-text pslogin-callbackurl-autofocus" readonly="readonly" /></td><td></td><td></td></tr>';
    }*/

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $url = Mage::helper('pslogin')->getCallbackURL('_PROVIDER_');
        return '<input id="'. $element->getHtmlId() .'" type="text" name="" value="'. $url .'" class="input-text pslogin-callbackurl-autofocus" style="background-color: #EEE; color: #999;" readonly="readonly" />';
    }
}