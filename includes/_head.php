<?php
/*------------------------------------------------------------------------
# author Ivan Komlev
# copyright Copyright © 2020-2021 oxfordsms.com All rights reserved.
# @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website https://oxfordsms.com
-------------------------------------------------------------------------*/
defined('_JEXEC') or die;

if(isset($active->alias))
	$alias=$active->alias;

?>
	<meta charset="utf-8" />
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/index-110.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/modal.js"></script>
	
	<style>
	:root {
		--topMenuFontColor: <?php echo ($this->params->get('topMenuFontColor')!="" ? $this->params->get('topMenuFontColor') : '#FFFFFF') ?>;;
		
		--topMenuBGColor: <?php echo ($this->params->get('topMenuBGColor')!="" ? $this->params->get('topMenuBGColor') : '#103157') ?>;
		
		--topMenuHighlightBarColor: <?php echo ($this->params->get('topMenuHighlightBar')!="" ? $this->params->get('topMenuHighlightBar') : '#a28f38') ?>;
		
		--topMenuSubFontColor: <?php echo ($this->params->get('topMenuSubFontColor')!="" ? $this->params->get('topMenuSubFontColor') : '#4677b0') ?>;
		--topMenuSubFontColorHover: <?php echo ($this->params->get('topMenuSubFontColorHover')!="" ? $this->params->get('topMenuSubFontColorHover') : '#103157') ?>;
		
		--topMenuSubBar: <?php echo ($this->params->get('topMenuSubBar')!="" ? $this->params->get('topMenuSubBar') : '#9f2828') ?>;
		
		--leftSideBG: <?php echo ($this->params->get('leftSideBG')!="" ? $this->params->get('leftSideBG') : '#ffffff') ?>;
		
		--ButtonColor: <?php echo ($this->params->get('ButtonColor')!="" ? $this->params->get('ButtonColor') : '#0366d6') ?>;
		--primaryButtonColor: <?php echo ($this->params->get('primaryButtonColor')!="" ? $this->params->get('primaryButtonColor') : '#0366d6') ?>;
		--primaryButtonHoverColor: <?php echo ($this->params->get('primaryButtonHoverColor')!="" ? $this->params->get('primaryButtonHoverColor') : '#0366d6') ?>;
		--successButtonColor: <?php echo ($this->params->get('successButtonColor')!="" ? $this->params->get('successButtonColor') : '#92d782') ?>;
		--successButtonHoverColor: <?php echo ($this->params->get('successButtonHoverColor')!="" ? $this->params->get('successButtonHoverColor') : '#25970a') ?>;
	
	}
	</style>
	
	<script>
		var menuItemAlias="<?php echo $alias; ?>";
		
		function showPage() {
			document.getElementById("loader").style.display = "none";
		document.getElementById("oxfordSMSDashboard").style.display = "block";
		}

		document.addEventListener("DOMContentLoaded", function(){
		    adaptLayout();
			showPage();
		});
	</script>
	
	<title><?php 
	
	if(class_exists('JoomlaBasicMisc'))
		echo JoomlaBasicMisc::JTextExtended($this->title); 
	else
		echo $this->title;//JText::_();
		
	?></title>

	<meta name="viewport" content="width=device-width">
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

	<jdoc:include type="head" />

	<?php if($version < 4): ?>
	<link href="<?php echo $this->baseurl ?>/media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<?php endif; ?>
	
	<!--<script src="/media/jui/js/bootstrap.min.js?baddb2f97e5165e2ad4048acd1cd6a7f"></script>-->
	
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template-109.css" type="text/css" />
 
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/frameworks-109.css" />
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/github-111.css" />
	
	<!-- WP Top Menu -->
	<link rel='stylesheet' id='avada-stylesheet-css'  href='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/topmenu-fusion-109.css' type='text/css' media='all' />

<?php
if($before_head = $this->params->get('before_head')) {
	echo $before_head . "\n";
}

?>
