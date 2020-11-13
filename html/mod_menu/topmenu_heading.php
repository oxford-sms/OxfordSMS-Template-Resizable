<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


$attributes = array();

if ($item->anchor_title)
{
	$attributes['title'] = $item->anchor_title;
}


	$attributes['class'] = 'fusion-bottombar-highlight';// oxford-button';//$item->anchor_css;


if ($item->anchor_rel)
{
	$attributes['rel'] = $item->anchor_rel;
}
 //oxford-center
$linktype = '<span class="menu-text">'.$item->title.'</span>';

if ($item->deeper)
	$linktype.= ' <span class="fusion-caret"><i class="fusion-dropdown-indicator"></i></span>';


?>
<?php echo '<a class="fusion-bottombar-highlight">'.$linktype.'</a>'; ?>
