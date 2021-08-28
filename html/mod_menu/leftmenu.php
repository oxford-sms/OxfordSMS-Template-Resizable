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
<div class="oxfordSMSDashboardMenu">
<?php foreach ($list as $i => &$item)
{
	$attributes = array();
	
	if ($item->anchor_title)
		$attributes['title'] = $item->anchor_title;
	
	$img = ($item->menu_image ? JHtml::_('image', $item->menu_image, $item->title) : '');
	
	$linktype='<div class="1"><button class="btn btn-outline f6 width-full mb-3">'.$img.'<span>'.$item->title.'</span></button></div>';
	
	echo JHtml::_('link', JFilterOutput::ampReplace(htmlspecialchars($item->flink, ENT_COMPAT, 'UTF-8', false)), $linktype, $attributes);

}
?></div>
