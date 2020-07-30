<?php
/**
* OxfordSMS - Themplate - Header
* @author    Ivan Komlev
* @copyright Copyright (C) 2020 Ivan Komlev. All rights reserved.
* @license	 GNU/GPL
*/

//This loader also prevents douple queries

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


?>

    <div class="position-relative js-header-wrapper ">
      <a href="#start-of-content" class="p-3 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
      <span class="Progress progress-pjax-loader position-fixed width-full js-pjax-loader-bar">
        <span class="progress-pjax-loader-bar top-0 left-0" style="width: 0%;"></span>
      </span>


<header class="Header py-lg-0 js-details-container Details flex-wrap flex-lg-nowrap px-3" role="banner">
  <div class="Header-item d-none d-lg-flex">
  
  
  <!-- this was the space for the logo -->
**

  </div>
  <!-- Thee bars mobile menu -->
  <div class="Header-item d-md-none">
    <button class="Header-link btn-link js-details-target" type="button" aria-label="Toggle navigation" aria-expanded="false">
      <svg height="24" class="octicon octicon-three-bars" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true"><path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 2.75zm0 5A.75.75 0 011.75 7h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 7.75zM1.75 12a.75.75 0 100 1.5h12.5a.75.75 0 100-1.5H1.75z"></path></svg>
    </button>
  </div>

<div class="Header-item Header-item--full flex-column flex-md-row width-full flex-order-2 flex-md-order-none mr-0 mr-md-3 mt-3 mt-md-0 Details-content--hidden-not-important d-md-flex">
LOL
</div>
  <div class="Header-item Header-item--full flex-column flex-lg-row width-full flex-order-2 flex-lg-order-none mr-0 mr-lg-3 mt-3 mt-lg-0 Details-content--hidden">
        <div class="header-search header-search-current js-header-search-current  flex-self-stretch flex-lg-self-auto mr-0 mr-lg-3 mb-3 mb-lg-0 scoped-search site-scoped-search js-site-search position-relative js-jump-to js-header-search-current-jump-to"
  role="combobox"
  aria-owns="jump-to-results"
  aria-label="Search or jump to"
  aria-haspopup="listbox"
  aria-expanded="false"
>89898
<a class="Header-link border-top border-lg-top-0 border-white-fade-15" href="/dashboard"><?php $config = JFactory::getConfig(); echo $config->get( 'sitename' );  ?></a>
<!--js-selected-navigation-item  py-lg-3  mr-0 mr-lg-3 py-2 -->
<!--
  <div class="position-relative">-->
    <!-- '"` --><!-- </textarea></xmp> </option></form>-->
	
	<!---->  </div><!--
</div>
-->

    <nav class="d-flex flex-column flex-lg-row flex-self-stretch flex-lg-self-auto" aria-label="Global">
    
	<?php /* <a class="Header-link py-lg-3 d-block d-lg-none py-2 border-top border-lg-top-0 border-white-fade-15" data-ga-click="Header, click, Nav menu - item:dashboard:user" aria-label="Dashboard" href="/dashboard">
      Dashboard
	  <!-- Header-link py-lg-3 d-block d-lg-none py-2 border-top border-lg-top-0 border-white-fade-15 -->
</a>
*/ ?>
<!-- 
 data-hotkey="g p" data-ga-click="Header, click, Nav menu - item:pulls context:user" aria-label="Pull requests you created" data-selected-links="/pulls /pulls/assigned /pulls/mentioned /pulls"
-->
<?php /* <div class="NavBreadcrumbs">
<ul class="breadcrumb-none js-selected-navigation-item Header-link py-lg-3  mr-0 mr-lg-3 py-2 border-top border-lg-top-0 border-white-fade-15">
					
						<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="active">
						
<a class=" Header-link js-selected-navigation-item Header-link py-lg-3  mr-0 mr-lg-3 py-2 border-top border-lg-top-0 border-white-fade-15" href="/dashboard">
<!---none js-selected-navigation-item Header-link py-lg-3  mr-0 mr-lg-3 py-2 border-top border-lg-top-0 border-white-fade-15
js-selected-navigation-item Header-link border-top border-lg-top-0 border-white-fade-15
 py-lg-3  mr-0 mr-lg-3 py-2 
py-lg-3  mr-0 mr-lg-3 py-2  -->
    Dashboard
</a>
</li></ul>


py-lg-3  mr-0 mr-lg-3 py-2
 py-lg-3 mr-0
 
 
 
 py-2
 
 
 mr-lg-3
</div> */ ?>
<div class="NavBreadcrumbs">
						<div aria-label="Breadcrumbs " role="navigation">
	<ul itemscope itemtype="https://schema.org/BreadcrumbList" class="js-selected-navigation-item Header-link border-top border-lg-top-0 border-white-fade-15 py-lg-3  mr-0 py-2">
					
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a class=" Header-link js-selected-navigation-item Header-link  border-top border-lg-top-0 border-white-fade-15  py-2" href="/dashboard">
						Dashboard
					</a>
				</li>
				</ul>
</div>

					</div>


<div class="NavBreadcrumbs">
						<jdoc:include type="modules" name="top-menu" />
					</div>



    <a class="Header-link d-block d-lg-none mr-0 mr-lg-3 py-2 py-lg-3 border-top border-lg-top-0 border-white-fade-15" href="/joomlaboat">
      
	  
  <img class="avatar avatar-user" src="https://avatars1.githubusercontent.com/u/8064340?s=40&amp;v=4" width="20" height="20" alt="@joomlaboat" />
      joomlaboat
	  
</a>
    <!-- '"` --><!-- </textarea></xmp> --></option></form></nav>

  </div>

  <div class="Header-item Header-item--full flex-justify-center d-lg-none position-relative">
    <a class="Header-link" href="https://github.com/orgs/oxford-sms/dashboard" data-hotkey="g d"
  aria-label="Homepage " data-ga-click="Header, go to dashboard, icon:logo">
  <svg class="octicon octicon-mark-github v-align-middle" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
</a>

  </div>

	<?php include('__messages.php'); ?>
  

    <?php //include('_addnew.php'); ?>

<?php include('_avatar.php'); ?>
	  <?php /*
  <div class="Header-item position-relative mr-0 d-none d-lg-flex">
    
  <details style="z-index:4000" class="details-overlay details-reset js-feature-preview-indicator-container" data-feature-preview-indicator-src="/users/joomlaboat/feature_preview/indicator_check">

  <summary class="Header-link" style="z-index:3000"
    aria-label="View profile and more"
    data-ga-click="Header, show menu, icon:avatar">
	<div id="OxfordSMSAvatar">AAA</div>
    

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


    


<?

   



  </div>
*/ ?>
</header>



        

    </div>