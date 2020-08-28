<?php
   /**
   * OxfordSMS - Template - Avatar
   * @author    Ivan Komlev
   * @copyright Copyright (C) 2020 Ivan Komlev. All rights reserved.
   * @license	 GNU/GPL
   */
   
   //This loader also prevents douple queries
   
   // no direct access
   defined( '_JEXEC' ) or die( 'Restricted access' );
   
?>

<div class="Header-item position-relative mr-0 d-none d-md-flex">
   <details class="details-overlay details-reset js-feature-preview-indicator-container" data-feature-preview-indicator-src="/users/joomlaboat/feature_preview/indicator_check">
      <summary class="Header-link"
         aria-label="View profile and more"
         data-ga-click="Header, show menu, icon:avatar">
         <img class="avatar avatar-user" src="<?php echo $avatar_image; ?>" />
         <span class="feature-preview-indicator js-feature-preview-indicator" style="top: 10px;" hidden></span>
         <span class="dropdown-caret"></span>
      </summary>
	  <details-menu class="dropdown-menu dropdown-menu-sw mt-n2" style="width: 180px" >

      <div class="header-nav-current-user css-truncate">
         <?php
            $user = JFactory::getUser();
			if($user->id!=0)
			{
				echo '<span class="no-underline user-profile-link px-3 pt-2 pb-2 mb-n2 mt-n1 d-block">Signed in as <strong class="css-truncate-target">'.$user->username.'</strong></span>';
				echo '<div role="none" class="dropdown-divider"></div>';
			}
            ?>
         
         <?php  if($this->countModules('profilemenu-1')) : ?>
         <div id="OxfordSMSSideMenus">
            <jdoc:include type="modules" name="profilemenu-1" style="none" />
         </div>
         <?php  endif; ?>
      </div>
	  </details-menu>
   </details>
</div>

