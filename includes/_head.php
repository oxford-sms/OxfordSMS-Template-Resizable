<?php 
/*
<script>


if(window.addEventListener) {
    window.addEventListener('load',showPage,false); //W3C
} else {
    window.attachEvent('onload',showPage); //IE
}

</script>

*/ 

if(isset($active->alias))
	$alias=$active->alias;

?>

	<meta charset="utf-8" />
		
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/index-102.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/modal.js"></script>
	
	<style>
	:root {
		--topMenuFontColor: <?php echo ($this->params->get('topMenuFontColor')!="" ? $this->params->get('topMenuFontColor') : '#FFFFFF') ?>;;
		
		--topMenuBGColor: <?php echo ($this->params->get('topMenuBGColor')!="" ? $this->params->get('topMenuBGColor') : '#103157') ?>;
		
		--topMenuHighlightBarColor: <?php echo ($this->params->get('topMenuHighlightBar')!="" ? $this->params->get('topMenuHighlightBar') : '#a28f38') ?>;
		
		--topMenuSubFontColor: <?php echo ($this->params->get('topMenuSubFontColor')!="" ? $this->params->get('topMenuSubFontColor') : '#4677b0') ?>;
		--topMenuSubFontColorHover: <?php echo ($this->params->get('topMenuSubFontColorHover')!="" ? $this->params->get('topMenuSubFontColorHover') : '#103157') ?>;
		
		--topMenuSubBar: <?php echo ($this->params->get('topMenuSubBar')!="" ? $this->params->get('topMenuSubBar') : '#9f2828') ?>;
		
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
	
	<title><?php echo JoomlaBasicMisc::JTextExtended($this->title); ?></title>

	<meta name="viewport" content="width=device-width">
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

	<jdoc:include type="head" />

	<link href="/media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template-103.css" type="text/css" />
 
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/frameworks-103.css" />
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/github-103.css" />
	
	<!-- WP Top Menu -->
	<link rel='stylesheet' id='avada-stylesheet-css'  href='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/topmenu-fusion-103.css' type='text/css' media='all' />
