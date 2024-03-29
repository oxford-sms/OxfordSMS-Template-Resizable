<?php

$dashboardlink = '/dashboard';
if ($this->params->get('dashboardlink') != '')
	$dashboardlink = $this->params->get('dashboardlink');

?>

<div class="Header-item Header-item--full flex-column flex-md-row width-full flex-order-2 flex-md-order-none mr-0 mr-md-3 mt-3 mt-md-0 Details-content--hidden-not-important d-md-flex"
     style="width:100%;">
    <div class="header-search header-search-current js-header-search-current flex-auto  flex-self-stretch flex-md-self-auto mr-0 mr-md-3 mb-3 mb-md-0   js-site-search position-relative js-jump-to js-header-search-current-jump-to"
         role="combobox"
         aria-owns="jump-to-results"
         aria-label="Search or jump to"
         aria-haspopup="listbox"
         aria-expanded="false"
    >
        <div class="position-relative"><?php //include('__search.php'); ?> </div>
        <!-- end of the bar -->
    </div>

    <nav class="d-flex flex-column flex-md-row flex-self-stretch flex-md-self-auto" aria-label="Global"
         style="width:100%;">
        <div class="d-none d-md-flex"><?php //include('__breadcrumbs.php'); ?></div>
        <div class="d-none d-md-flex" style="width:100%;">
			<?php // border:1px solid green;border:1px solid yellow;border:1px solid white; ?>
            <div class="NavBreadcrumbs" style="width:100%;">
                <div aria-label="Breadcrumbs " role="navigation" style="width:100%;">
                    <!-- top menu -->
					<?php //include('_wp_top_menu.php'); ?>
                    <div class="fusion-header-v1 fusion-logo-alignment fusion-logo-left fusion-sticky-menu- fusion-sticky-logo- fusion-mobile-logo-1  fusion-mobile-menu-design-modern">
                        <div class="fusion-logo-alignment fusion-logo-left fusion-sticky-menu- fusion-sticky-logo- fusion-mobile-logo-1  fusion-mobile-menu-design-modern"
                             style="width:100%;">
                            <nav class="fusion-main-menu" aria-label="Main Menu" style="width:100%;">
								<?php if ($this->countModules('top-menu')) : ?>
                                    <jdoc:include type="modules" name="top-menu" style="none"/>
								<?php endif; ?>
                            </nav>
                        </div>
                    </div>
                    <!-- end of top menu -->
                </div>
            </div>
        </div>


        <div class="d-block d-md-none">
            <a data-ga-click="Header, click, Nav menu - item:dashboard:user" aria-label="Dashboard"
               href="<?php echo $dashboardlink; ?>">
                <div class="Header-link py-md-3  mr-0 mr-md-3 py-2 border-top border-md-top-0 border-white-fade-15">
                    Dashboard
                </div>
            </a>
        </div>
        <div id="oxfordSMSDashboardMenu_Mobile" class="d-block d-md-none"></div>
        <div class="d-block d-md-none oxfordSMSDashboardMenu_Mobile">
            <!--js-selected-navigation-item Header-link py-md-3 d-block mr-0 mr-md-3 py-2 border-top border-md-top-0 border-white-fade-15-->
            <!-- Header-link py-md-3 d-block d-md-none py-2 border-top border-md-top-0 border-white-fade-15 -->
			<?php /*
               $user = JFactory::getUser();
               if($user->id!=0):
               // class="Header-link d-block d-md-none mr-0 mr-md-3 py-2 py-md-3 border-top border-md-top-0 border-white-fade-15" 
               ?>
            <a href="/change-password" aria-label="User profile" >
               <div class="Header-link py-md-3  mr-0 mr-md-3 py-2 border-top border-md-top-0 border-white-fade-15">
                  <img class="avatar avatar-user" src="<?php echo $avatar_image; ?>" width="20" height="20" alt="<?php echo $user->username; ?>" />User Profile: <?php echo $user->username; ?>
               </div>
            </a>
            <?php endif; */ ?>
        </div>
		<?php /*
            <!-- Profile menu -->
            <div class="d-block d-md-none">
            <div role="none" class="dropdown-divider"></div>
            	  
            	 <?php  if($this->countModules('profilemenu-1')) : ?>
         <jdoc:include type="modules" name="profilemenu-1" style="none" />
         <?php  endif; ?>
      </div>
      <!-- end of profile menu -->
      */ ?>
    </nav>
</div>

