<?php
/**
* Oxford SMSm - Themplate - Avatar
* @author    Ivan Komlev
* @copyright Copyright (C) 2020 Ivan Komlev. All rights reserved.
* @license	 GNU/GPL
*/

//This loader also prevents douple queries

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


if($oxfordsms->variables->real_userid!=0 and $oxfordsms->variables->employee!=0):

	$image='/components/com_oxfordsms/images/no-photo.png';
	if(isset($oxfordsms->variables->employee) and isset($oxfordsms->variables->employee['es_photo']))
	{
		$photo=$oxfordsms->variables->employee['es_photo'];
		if($photo!=0)
			$image='/images/esimages/id_'.$photo.'.jpg';
	}


?>

<div class="Header-item position-relative mr-0 d-none d-lg-flex">
    
  <details style="z-index:4000" class="details-overlay details-reset js-feature-preview-indicator-container" data-feature-preview-indicator-src="/users/joomlaboat/feature_preview/indicator_check">

  <summary class="Header-link" style="z-index:3000"
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
	  
	 <?php  if($this->countModules('profilemenu-1')) : ?><jdoc:include type="modules" name="profilemenu-1" style="none" /><?php  endif; ?>
	 
	</div>
	
    </details-menu>
	
	
</details>
	   
</div>
      
     <?php /*   <div role="none" class="dropdown-divider"></div><div class="pl-3 pr-3 f6 user-status-container js-user-status-context lh-condensed" data-url="/users/status?compact=1&amp;link_mentions=0&amp;truncate=1">
<div class="js-user-status-container rounded-1 px-2 py-1 mt-2 border"
  data-team-hovercards-enabled>
  <!--<details class="js-user-status-details details-reset details-overlay details-overlay-dark">
    <summary class="btn-link btn-block link-gray no-underline js-toggle-user-status-edit toggle-user-status-edit "
      role="menuitem" >
      <div class="d-flex flex-items-center flex-items-stretch">
        <div class="f6 lh-condensed user-status-header d-flex user-status-emoji-only-header circle">
          <div class="user-status-emoji-container flex-shrink-0 mr-2 d-flex flex-items-center flex-justify-center lh-condensed-ultra v-align-bottom">
            <div><g-emoji class="g-emoji" alias="house" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3e0.png">??</g-emoji></div>
          </div>
        </div>-->
		
        <div class="
          
           user-status-message-wrapper f6 min-width-0"
           style="line-height: 20px;" >
          <div class="css-truncate css-truncate-target width-fit text-gray-dark text-left">
                <span>Dashboard</span>
          </div>
        </div>
		
     <!-- </div>
    </summary>
	</details>-->
  
  <?php //include('_status.php'); ?>
</div>
</div>
*/ 

endif;
?>

