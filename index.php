

<?php
   // No direct access.
   defined('_JEXEC') or die;
   
   
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
      <?php include('_head.php'); ?>
   </head>
   <body class="logged-in env-production page-responsive full-width">
      <?php include('_header.php'); ?>
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
         <?php include('_aside1.php'); ?>
         <div class="d-flex flex-wrap bg-gray" style="min-height: 100vh;">
            <?php include('_aside2.php'); ?>
            <div class="col-12 col-md-8 col-lg-6 p-responsive mt-3 border-bottom d-flex flex-auto">
               <div class="mx-auto d-flex flex-auto flex-column" style="max-width: 1400px">
                  <?php include('_main.php'); ?>
                  <?php include('_footer.php'); ?>
               </div>
            </div>
            <aside class="team-left-column col-12 col-md-3 col-lg-3 pr-3 mt-5 hide-lg hide-md hide-sm border-bottom" aria-label="Explore">
               <div data-team-hovercards-enabled>
                  <?php  if($this->countModules('right-bar')) : ?>
                  <jdoc:include type="modules" name="right-bar" style="none" />
                  <?php  endif; ?>
               </div>
            </aside>
         </div>
      </div>
      <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
         <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;">
         </div>
      </div>
   </body>
</html>

