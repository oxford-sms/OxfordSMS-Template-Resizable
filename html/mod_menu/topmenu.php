<?php
/*------------------------------------------------------------------------
# author Ivan Komlev
# copyright Copyright © 2020-2021 oxfordsms.com All rights reserved.
# @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website https://oxfordsms.com
-------------------------------------------------------------------------*/

defined('_JEXEC') or die;


$app = JFactory::getApplication();
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
$sitename_parts=explode('-',$sitename);
$sitename_school=trim(end($sitename_parts));


$id = '';

if ($tagId = $params->get('tag_id', ''))
{
	$id = ' id="' . $tagId . '"';
}

// The menu class is deprecated. Use nav instead
?>
<ul id="menu-main" class="fusion-menu">
<?php foreach ($list as $i => &$item)
{
	$class = '';//menu-item-type-post_type menu-item-object-page menu-item-122';//'item-' . $item->id;
	
	if($item->level==1)
	{
		if($item->alias=='dashboard')
		{
			$class .= ' top-menu-round-border menu-item-type-custom menu-item-object-custom current-menu-item current-menu-ancestor fusion-menu-item-button';
		}
		else
		{
			if ($item->deeper)
			{
				$class .= ' menu-item-type-custom menu-item-object-custom menu-item-has-children  fusion-dropdown-menu';
			}
			else
			{
				$class .= ' menu-item-type-post_type menu-item-object-page';
			}
		}
	}
	else
	{
		if ($item->deeper)
		{
			$class .= ' menu-item-type-post_type menu-item-object-page fusion-dropdown-submenu menu-item-has-children';
		}
		else
		{
			$class .= ' menu-item-type-post_type menu-item-object-page fusion-dropdown-submenu';
		}
	}
	
	echo '<li class="' . $class . '">';

	switch ($item->type) :
		case 'separator':
		case 'component':
		case 'heading':
		case 'url':
			require JModuleHelper::getLayoutPath('mod_menu', 'topmenu_' . $item->type);
			break;

		default:
			require JModuleHelper::getLayoutPath('mod_menu', 'topmenu_url');
			break;
	endswitch;

	// The next item is deeper.
	if ($item->deeper)
	{
		echo '<ul class="sub-menu">';
	}
	// The next item is shallower.
	elseif ($item->shallower)
	{
		echo '</li>';
		echo str_repeat('</ul></li>', $item->level_diff);
	}
	// The next item is on the same level.
	else
	{
		echo '</li>';
	}
}
?></ul>
