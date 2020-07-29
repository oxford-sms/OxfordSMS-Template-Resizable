<?php
/**
* OxfordSMS - Themplate
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
   
   require('loader/loader.php');
   $oxfordsms = new OxfordSMSLoader();
	$avatar_image='/components/com_oxfordsms/images/no-photo.png';
	if(isset($oxfordsms->variables->employee) and isset($oxfordsms->variables->employee['es_photo']))
	{
		$photo=$oxfordsms->variables->employee['es_photo'];
		if($photo!=0)
			$avatar_image='/images/esimages/id_'.$photo.'.jpg';
	}


   
   if($task == "edit" || $layout == "form" )
   {
   	//disable sides
   	$fullWidth = 1;
   	
   }
   else
   {
   	$fullWidth = 0;
   }
   
   /** @var JDocumentHtml $this */
   
   //JHtml::_('behavior.framework', true);
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include('includes'.DIRECTORY_SEPARATOR.'_head.php'); ?>
   </head>
   <body class="logged-in env-production page-responsive full-width">
      <?php include('includes'.DIRECTORY_SEPARATOR.'_header.php'); ?>
	  <?php /**/?>
      <div id="start-of-content" class="show-on-focus"></div>
      <div id="js-flash-container">
         <template class="js-flash-template">
            <div class="flash flash-full  js-flash-template-container">
               <div class="container-lg px-2" >
                  <button class="flash-close js-flash-close" type="button" aria-label="Dismiss this message">
                     <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path>
                     </svg>
                  </button>
                  <div class="js-flash-template-message"></div>
               </div>
            </div>
         </template>
      </div>
	  
      <div
         class="application-main "
         data-commit-hovercards-enabled
         data-discussion-hovercards-enabled
         data-issue-and-pr-hovercards-enabled
         >
         <?php include('includes'.DIRECTORY_SEPARATOR.'_aside1.php'); ?>
         <div class="d-flex flex-wrap bg-gray" style="min-height: 100vh;position:relative;">
            <?php include('includes'.DIRECTORY_SEPARATOR.'_aside2.php'); ?>
			
			
			
			
            <div class="col-12 col-md-8 col-lg-6 p-responsive mt-3 border-bottom d-flex flex-auto">
               <div class="mx-auto d-flex flex-auto flex-column" style="max-width: 1400px">
                  <?php include('includes'.DIRECTORY_SEPARATOR.'_main.php'); ?>
                  <?php //include('includes'.DIRECTORY_SEPARATOR.'_footer.php'); ?>
               </div>
            </div>
			
            <?php  if($this->countModules('right-bar')) : ?>
			<!-- right side bar -->
            <aside class="team-left-column col-12 col-md-3 col-lg-3 pr-3 mt-5 hide-lg hide-md hide-sm border-bottom" aria-label="Explore">
				<div data-team-hovercards-enabled>
                  <jdoc:include type="modules" name="right-bar" style="none" />
				</div>
            </aside>
            <?php  endif; ?>
               
         </div>
      </div>
	  <?php /* */?>
	  <!-- popups -->
      <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
         <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;">
         </div>
      </div>
	  
	  
	<script crossorigin="anonymous" async="async" type="application/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/environment-bootstrap-a544e728.js"></script>
	<script crossorigin="anonymous" async="async" type="application/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor-35c9bc10.js"></script>
    <script crossorigin="anonymous" async="async" type="application/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/frameworks-4f69d005.js"></script>
	
   </body>
</html>

