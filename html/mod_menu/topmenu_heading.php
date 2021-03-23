<?php
/*------------------------------------------------------------------------
# author Ivan Komlev
# copyright Copyright © 2020-2021 oxfordsms.com All rights reserved.
# @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website https://oxfordsms.com
-------------------------------------------------------------------------*/

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

$linktype = '<span class="menu-text">'.$item->title.'</span>';

if ($item->deeper)
	$linktype.= ' <span class="fusion-caret"><i class="fusion-dropdown-indicator"></i></span>';


?>
<?php echo '<a class="fusion-bottombar-highlight">'.$linktype.'</a>'; ?>
