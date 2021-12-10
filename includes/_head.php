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

	<?php if($version < 4): 
	
		//DO NOT LOAD JQUESRY - JOOMLA LOADS IT
		//$doc->addCustomTag('<script src="'.JURI::root(true).'/media/jui/js/jquery.min.js"></script>');
		$doc->addCustomTag('<script src="'.JURI::root(true).'/media/jui/js/bootstrap.min.js"></script>');
	
	?>
	
	<link href="<?php echo $this->baseurl ?>/media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template-109.css" type="text/css" />
	

	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/frameworks-109.css" />
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/github-109.css" />
	
	<!-- WP Top Menu -->
	<link rel='stylesheet' id='avada-stylesheet-css'  href='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/topmenu-fusion-109.css' type='text/css' media='all' />
	
	<?php else: ?>
	
	<link rel="stylesheet" href="media/system/css/joomla-fontawesome.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template-111.css" type="text/css" />
	
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/frameworks-111.css" />
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/github-111.css" />
	
	
	<!-- WP Top Menu -->
	<link rel='stylesheet' id='avada-stylesheet-css'  href='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/topmenu-fusion-111.css' type='text/css' media='all' />
	

	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/cassiopeia.css" />
	
	<link href="<?php echo $this->baseurl ?>/media/system/css/joomla-fontawesome.min.css?a82b166db64c6914e6174bb8f8084774" rel="lazy-stylesheet" /><noscript><link href="/4/media/system/css/joomla-fontawesome.min.css?a82b166db64c6914e6174bb8f8084774" rel="stylesheet" /></noscript>
	<!--<link href="<?php echo $this->baseurl ?>/templates/cassiopeia/css/global/colors_standard.min.css?a82b166db64c6914e6174bb8f8084774" rel="stylesheet" />-->
	<!--<link href="<?php echo $this->baseurl ?>/templates/cassiopeia/css/template.min.css?a82b166db64c6914e6174bb8f8084774" rel="stylesheet" />-->
	<link href="<?php echo $this->baseurl ?>/media/plg_system_webauthn/css/button.min.css?a82b166db64c6914e6174bb8f8084774" rel="stylesheet" />
	<link href="<?php echo $this->baseurl ?>/templates/cassiopeia/css/vendor/joomla-custom-elements/joomla-alert.min.css?0.2.0" rel="stylesheet" />
	
	
	
	<!--<script type="application/json" class="joomla-script-options new" nonce="YWMyMTgzMTJmMmNiYjY1OWIzNTQxNDVhZmEzOTRmZmVjYmQ2M2UwZDc4YmZkYjVjMzcyNjcwNjk1YzcwMzczYWY5Yzg5MzAwNTA2MjFlNDAyMTFjYzViM2ExMzViYzY3MGEwMmFhOTI3N2E1NjQwNTkzODVjMTQ2MGM0NjcyNDU=">{"joomla.jtext":{"PLG_SYSTEM_WEBAUTHN_ERR_CANNOT_FIND_USERNAME":"Cannot find the username field in the login module. Sorry, Passwordless authentication will not work on this site unless you use a different login module.","PLG_SYSTEM_WEBAUTHN_ERR_EMPTY_USERNAME":"You need to enter your username (but NOT your password) before selecting the Web Authentication login button.","PLG_SYSTEM_WEBAUTHN_ERR_INVALID_USERNAME":"The specified username does not correspond to a user account that has enabled passwordless login on this site.","JSHOWPASSWORD":"Show Password","JHIDEPASSWORD":"Hide Password","ERROR":"Error","MESSAGE":"Message","NOTICE":"Notice","WARNING":"Warning","JCLOSE":"Close","JOK":"OK","JOPEN":"Open"},"system.paths":{"root":"\/4","rootFull":"https:\/\/joomlaboat.com\/4\/","base":"\/4","baseFull":"https:\/\/joomlaboat.com\/4\/"},"csrf.token":"944e7c7bcd35e4f3dfd389470fcadbbd","system.keepalive":{"interval":840000,"uri":"\/4\/index.php\/component\/ajax\/?format=json"}}</script>
	-->
	
	<!--<script src="<?php echo $this->baseurl ?>/media/system/js/core.min.js?c47dc50c9a8b9c85d135bbac3f47a6e9b4100832"></script>-->
	<script src="<?php echo $this->baseurl ?>/templates/cassiopeia/js/template.min.js?a82b166db64c6914e6174bb8f8084774" defer></script>
	<script src="<?php echo $this->baseurl ?>/media/system/js/messages-es5.min.js?3cfa02e233a3320687fe9b7d1134d90c6d88e40a" nomodule defer></script>
	<script src="<?php echo $this->baseurl ?>/media/plg_system_webauthn/js/login.min.js?a82b166db64c6914e6174bb8f8084774" defer></script>
	<script src="<?php echo $this->baseurl ?>/media/system/js/keepalive.min.js?68fd980eeacffe8a5b7e1b5559d1ee4ca1315f6e" defer></script>
	
	<!-- <script src="<?php echo $this->baseurl ?>/media/system/js/fields/passwordview.min.js?bae2911b22f836c780af199d956a1b22c8604694" defer></script>-->
	
	<!--<script src="<?php echo $this->baseurl ?>/media/system/js/messages.min.js?7425e8d1cb9e4f061d5e30271d6d99b085344117" type="module"></script>-->
	<?php endif; ?>

	

<?php
if($before_head = $this->params->get('before_head')) {
	echo $before_head . "\n";
}

?>
