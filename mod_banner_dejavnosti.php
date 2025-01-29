<?php
/**
 * @package    mod_banner_dejavnosti
 *
 * @author     Elvis Sedić <elvis@spletodrom.si>
 * @copyright  Spletodrom
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://www.spletodrom.si
 */

use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

$image = htmlspecialchars($params->get('banner_image'));
$image_alt = htmlspecialchars($params->get('image_alt'));
$title = htmlspecialchars($params->get('title'));
$quote = $params->get('quote');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_banner_dejavnosti', $params->get('layout', 'default'));
