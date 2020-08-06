<?php
/**
* OxfordSMS - Themplate - Avatar
* @author    Ivan Komlev
* @copyright Copyright (C) 2020 Ivan Komlev. All rights reserved.
* @license	 GNU/GPL
*/

//This loader also prevents douple queries

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


//if($oxfordsms->variables->real_userid!=0 and $oxfordsms->variables->employee!=0):

	$image='/components/com_oxfordsms/images/no-photo.png';
	 
	if(isset($oxfordsms->variables->employee) and isset($oxfordsms->variables->employee['es_photo']))
	{
		$photo=$oxfordsms->variables->employee['es_photo'];
		if($photo!=0)
			$image='/images/esimages/id_'.$photo.'.jpg';
	}


?>

<div class="Header-item position-relative mr-0 d-none d-md-flex">
<details class="details-overlay details-reset js-feature-preview-indicator-container" data-feature-preview-indicator-src="/users/joomlaboat/feature_preview/indicator_check">

  <summary class="Header-link"
    aria-label="View profile and more"
    data-ga-click="Header, show menu, icon:avatar">
<img class="avatar avatar-user" src="<?php echo $image; ?>" />


      <span class="feature-preview-indicator js-feature-preview-indicator" style="top: 10px;" hidden></span>
    <span class="dropdown-caret"></span>
  </summary>
  

  <details-menu class="dropdown-menu dropdown-menu-sw mt-n2" style="width: 180px" >
  
    <div class="header-nav-current-user css-truncate">
	<!--<a role="menuitem" class="no-underline user-profile-link px-3 pt-2 pb-2 mb-n2 mt-n1 d-block" href="/joomlaboat" data-ga-click="Header, go to profile, text:Signed in as">-->
	<?php
	
	$user = JFactory::getUser();
	echo '<span class="no-underline user-profile-link px-3 pt-2 pb-2 mb-n2 mt-n1 d-block">Signed in as <strong class="css-truncate-target">'.$user->username.'</strong></span></div>';
	
	?>
	
	<div role="none" class="dropdown-divider"></div>
	  
	 <?php  if($this->countModules('profilemenu-1')) : ?><div id="OxfordSMSSideMenus"><jdoc:include type="modules" name="profilemenu-1" style="none" /></div><?php  endif; ?>
	 
	</div>
	
    </details-menu>




</details>
</div>