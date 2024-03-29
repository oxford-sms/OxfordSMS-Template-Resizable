<?php
/*------------------------------------------------------------------------
# author Ivan Komlev
# copyright Copyright � 2020-2021 oxfordsms.com All rights reserved.
# @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website https://oxfordsms.com
-------------------------------------------------------------------------*/

defined('_JEXEC') or die;

$attributes = array();

if ($item->anchor_title)
{
	$attributes['title'] = $item->anchor_title;
}

if($item->alias=='dashboard')
	$attributes['class'] = 'fusion-roundborder-highlight';// oxford-button';//$item->anchor_css;
else
	$attributes['class'] = 'fusion-bottombar-highlight';// oxford-button';//$item->anchor_css;

if ($item->anchor_rel)
{
	$attributes['rel'] = $item->anchor_rel;
}


if($item->alias=='dashboard')
{
	$linktype = '<span class="menu-text fusion-button button-portal button-small">'.$item->title.' - '.$sitename_school.'</span>';
}
else
	$linktype = '<span class="menu-text">'.$item->title.'</span>';

if ($item->menu_image)
{
	if ($item->menu_image_css)
	{
		$image_attributes['class'] = $item->menu_image_css;
		$linktype = JHtml::_('image', $item->menu_image, $item->title, $image_attributes);
	}
	else
	{
		$linktype = JHtml::_('image', $item->menu_image, $item->title);
	}

	if ($item->params->get('menu_text', 1))
	{
		$linktype .= '<span class="image-title">' . $item->title . '</span>';
	}
}

if ($item->browserNav == 1)
{
	$attributes['target'] = '_blank';
}
elseif ($item->browserNav == 2)
{
	$options = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes';

	$attributes['onclick'] = "window.open(this.href, 'targetWindow', '" . $options . "'); return false;";
}

echo JHtml::_('link', JFilterOutput::ampReplace(htmlspecialchars($item->flink, ENT_COMPAT, 'UTF-8', false)), $linktype, $attributes);
