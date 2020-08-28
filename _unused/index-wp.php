<?php
/**
* OxfordSMS - Template
* @author    Ivan Komlev
* @copyright Copyright (C) 2020 Ivan Komlev. All rights reserved.
* @license	 GNU/GPL
*/

//This loader also prevents douple queries

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
   
   
   $app = JFactory::getApplication();
   $doc = JFactory::getDocument();
   $this->language = $doc->language;
   $this->direction = $doc->direction;
   
   // Detecting Active Variables
   $option   = $app->input->getCmd('option', '');
   $view     = $app->input->getCmd('view', '');
   $layout   = $app->input->getCmd('layout', '');
   $task     = $app->input->getCmd('task', '');
   $itemid   = $app->input->getCmd('Itemid', '');
   $sitename = $app->getCfg('sitename');


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


      <link rel='stylesheet' id='avada-stylesheet-css'  href='/templates/oxfordsms/avada.css' type='text/css' media='all' />

		 
		 <jdoc:include type="head" />
		 <?php 
		 
		 JHtml::_('jquery.framework');
		 ?>
		 
		<script type='text/javascript'>
/* <![CDATA[ */
var avadaMenuVars = {"site_layout":"wide","header_position":"top","logo_alignment":"left","header_sticky":"1","header_sticky_mobile":"","header_sticky_tablet":"","side_header_break_point":"1000","megamenu_base_width":"site_width","mobile_menu_design":"modern","dropdown_goto":"Go to...","mobile_nav_cart":"Shopping Cart","mobile_submenu_open":"Open submenu of %s","mobile_submenu_close":"Close submenu of %s","submenu_slideout":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.oxford.edu.pa/wp-content/themes/Avada/includes/lib/assets/min/js/library/modernizr.js?ver=3.3.1'></script>
		 <script type='text/javascript' src='https://www.oxford.edu.pa/wp-content/themes/Avada/assets/min/js/general/avada-menu.js?ver=6.1.2'></script>
   </head>
   <body class="page-template-default page page-id-1583 fusion-image-hovers fusion-pagination-sizing fusion-button_size-medium fusion-button_type-flat fusion-button_span-no avada-image-rollover-circle-yes avada-image-rollover-yes avada-image-rollover-direction-left fusion-body ltr fusion-sticky-header no-tablet-sticky-header no-mobile-sticky-header no-mobile-slidingbar no-mobile-totop fusion-disable-outline fusion-sub-menu-fade mobile-logo-pos-left layout-wide-mode avada-has-boxed-modal-shadow- layout-scroll-offset-full avada-has-zero-margin-offset-top fusion-top-header menu-text-align-center mobile-menu-design-modern fusion-show-pagination-text fusion-header-layout-v1 avada-responsive avada-footer-fx-none avada-menu-highlight-style-bottombar fusion-search-form-classic fusion-main-menu-search-dropdown fusion-avatar-square avada-dropdown-styles avada-blog-layout-large avada-blog-archive-layout-large avada-header-shadow-no avada-menu-icon-position-left avada-has-megamenu-shadow avada-has-mainmenu-dropdown-divider avada-has-header-100-width avada-has-breadcrumb-mobile-hidden avada-has-titlebar-hide avada-has-pagination-width_height avada-flyout-menu-direction-fade">
      <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
      <div id="boxed-wrapper">
         <div class="fusion-sides-frame"></div>
         <div id="wrapper" class="fusion-wrapper">
            <div id="home" style="position:relative;top:-1px;"></div>
            <header class="fusion-header-wrapper">
               <div class="fusion-header-v1 fusion-logo-alignment fusion-logo-left fusion-sticky-menu- fusion-sticky-logo- fusion-mobile-logo-1  fusion-mobile-menu-design-modern">
                  <div class="fusion-header-sticky-height"></div>
                  <div class="fusion-header">
                     <div class="fusion-row">
                        
						<?php //include('includes'.DIRECTORY_SEPARATOR.'_wp_logo.php'); ?>
						
						<?php //include('includes'.DIRECTORY_SEPARATOR.'_wp_top_menu.php'); ?>
                        
                     </div>
                  </div>
               </div>
               <div class="fusion-clearfix"></div>
            </header>
            <div id="sliders-container">
            </div>
            <div class="avada-page-titlebar-wrapper">
            </div>
            <main id="main" class="clearfix ">
               <div class="fusion-row" style="">
                  <section id="content" style="width: 100%;">
                     <div id="post-1583" class="post-1583 page type-page status-publish hentry">
                        <span class="entry-title rich-snippet-hidden">Parent Portal &#8211; Panama</span><span class="vcard rich-snippet-hidden"><span class="fn"><a href="https://www.oxford.edu.pa/author/ivan-komlev/" title="Posts by Ivan" rel="author">Ivan</a></span></span><span class="updated rich-snippet-hidden">2020-01-29T15:55:30+00:00</span>
                        <div class="post-content">
                           HERE IS THE WEBSITE CONTENT
                        </div>
                     </div>
                  </section>
               </div>
               <!-- fusion-row -->
            </main>
            <!-- #main -->
			<?php //include('includes'.DIRECTORY_SEPARATOR.'_wp_footer.php'); ?>
            
         </div>
         <!-- wrapper -->
      </div>
      <!-- #boxed-wrapper -->
      <div class="fusion-top-frame"></div>
      <div class="fusion-bottom-frame"></div>
      <div class="fusion-boxed-shadow"></div>
      <a class="fusion-one-page-text-link fusion-page-load-link"></a>
     
   </body>
</html>

