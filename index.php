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
   $sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
   
   /*
	$jinput = JFactory::getApplication()->input;
	$user = JFactory::getUser();
    $real_userid = $user->get('id');
	$userid = $jinput->getInt('userid',0);
	if($userid==0)
	{
		$userid=$real_userid;
		$jinput->set('userid',$real_userid);
		echo '$real_userid='.$real_userid;
		die;
	}
   */
   
   checkAuthorisation();
	
	require_once(JPATH_SITE.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_oxfordsms'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'oxfordsmsmisc.php');
	require_once(JPATH_SITE.DIRECTORY_SEPARATOR.'administrator'.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_customtables'.DIRECTORY_SEPARATOR.'libraries'.DIRECTORY_SEPARATOR.'misc.php');
	$variables=OxfordSMSMisc::getVariables('');
	
   
	$avatar_image='/components/com_oxfordsms/images/no-photo.svg';
	if(isset($variables->employee) and isset($variables->employee['es_photo']))
	{
		$photo=$variables->employee['es_photo'];
		if($photo!=0)
			$avatar_image='/images/esimages/id_'.$photo.'.jpg';
	}
	elseif(isset($variables->studentid) and isset($variables->student['es_photo']))
	{
		$photo=$variables->student['es_photo'];
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
   <body id="bg" class="logged-in env-production page-responsive full-width">
   
   	<div id="loader"></div>
	<div class="oxfordSMSContainer animate-bottom" style="display:none;" id="oxfordSMSDashboard">

   
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
	  
      <div id='contentArea'
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
            <?php endif; ?>
               
         </div>
      </div>
	  <?php /* */?>
	  <!-- popups -->
      <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
         <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;">
         </div>
      </div>
	</div>  
	  
	<script crossorigin="anonymous" async="async" type="application/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/environment-bootstrap-a544e728.js"></script>
	<script crossorigin="anonymous" async="async" type="application/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor-35c9bc10.js"></script>
    <script crossorigin="anonymous" async="async" type="application/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/frameworks-4f69d005.js"></script>
	
   </body>

</html>

<?php

function checkAuthorisation()
{
    $app = JFactory::getApplication();
    $messages = $app->getMessageQueue();

    /* set login flag to 0 */
    $showlogin = 0;

    /* if there is a message set... */
    if (isset($messages[0])) {

        /* loop through messages and check for the "not authorised" string */
        foreach ($messages as $msg)
        {
            if ($msg["type"] == "error" && strpos($msg["message"], "not authorised") )
                $showlogin = 1;/* if found, update login flag */
        }


        /* include in template body - you could redirect here instead of including login form */
        if ($showlogin) {  echo '
<script>
window.top.location.href = "/";
</script>
';
            die;
            return false;
        }
    }
    return true;
}


?>