<?php
/**
 * @package OS_Touch_Slider
 * @subpackage  mod_OS_TouchSlider
 * @copyright Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Sergey Bunyaev(sergey@bunyaev.ru); Sergey Solovyev(solovyev@solovyev.in.ua)
 * @Homepage: http://www.ordasoft.com
 * @version: 3.1 
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 * */
defined('_JEXEC') or die;
require_once dirname(__FILE__).'/helpers/images.php';
$show_type =$params->get('type','horizontal');
JHtml::_('stylesheet',JURI::base()."/modules/mod_OS_TouchSlider/assets/css/idangerous.swiper.css");
if($params->get('jquery-local',1) == "1" && $params->get('jquery',1) == "1") {
    JHtml::_('script',JURI::base()."/modules/mod_OS_TouchSlider/assets/js/jquery-1.7.1.min.js");
} elseif ($params->get('jquery',1) == "1") {
    JHtml::_('script','//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
}
if($params->get('no-conflict',0) == '1') {
    $doc =JFactory::getDocument();
    $doc->addScriptDeclaration("jQuery.noConflict();");
}

if(!is_numeric($height = $params->get('height'))) $height = 180;

if($params->get('width')){
  $width = $params->get('width');
}else{
  $width = 240;
}

if(substr($width,strlen($width)-1) == '%'){
  $format='%';
}else{
  $format='px';
}

//JHtml::_('script',JURI::base()."/modules/mod_OS_TouchSlider/assets/js/slider.js");
JHtml::_('script',JURI::base()."/modules/mod_OS_TouchSlider/assets/js/idangerous.swiper-2.1.min.js");
$dir = JPATH_ROOT . '/images/os_touchslider_' . $module->id;
$arrows = $params->get('arrows','1');
$dots = $params->get('dots','1');
$autoplay = $params->get('autoplay','1');
$sufix = $params->get('sufix','');
$respect_quite = $params->get('respect_quite','1');
require JModuleHelper::getLayoutPath('mod_OS_TouchSlider', $params->get('layout', 'default'));
