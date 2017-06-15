<?php
/**
 * @version 3.0
 * @package LocationMap
 * @copyright 2009 OrdaSoft
 * @author 2009 Sergey Brovko-OrdaSoft(brovinho@mail.ru)
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @description Location map for Joomla 3.0
*/
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$link = modLocationHelper::getLink($params);

require JModuleHelper::getLayoutPath('mod_location_map_j3', $params->get('layout'));
