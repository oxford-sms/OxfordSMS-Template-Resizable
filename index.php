<?php
/**
* OxfordSMS - Template
* @author    Ivan Komlev
* @copyright Copyright (C) 2020-2021 Ivan Komlev. All rights reserved.
* @license	 GNU/GPL
*/
   
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

use CustomTables\CT;
use Joomla\CMS\Version;

$version_object = new Version;
$version = (int)$version_object->getShortVersion();
      
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
$menu      = $app->getMenu(); // Load the JMenuSite Object
   
$active    = $menu->getActive(); // Load the Active Menu Item as an stdClass Object
    
      
// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
      $sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
      $sitename_parts=explode('-',$sitename);
      $sitename_school=trim(end($sitename_parts));
      $alias="";
    
	$user = JFactory::getUser();
	$real_userid = $user->get('id');
	
	
	checkAuthorisation();
   	
   	$oxfordsms_file=JPATH_SITE.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_oxfordsms'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'oxfordsmsmisc.php';
   	if(file_exists($oxfordsms_file))
   	{
   		require_once($oxfordsms_file);
   		$variables=OxfordSMSMisc::getVariables('');
   	}
   	else
   		$variables=array();
	
	$is_mobile=false;
	$path=JPATH_SITE.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_customtables'.DIRECTORY_SEPARATOR.'libraries'.DIRECTORY_SEPARATOR.'customtables'.DIRECTORY_SEPARATOR;
	if(file_exists($path.'loader.php'))
	{
		require_once($path.'loader.php');
		CTLoader();
		$ct = new CT;
		
		if($ct->Env->isMobile)
		{
			$is_mobile=true;
		}
	}
   	
   	$avatar_image='templates/oxfordsms/images/no-photo.svg';
   	if(isset($variables->employee) and isset($variables->employee['es_photo']))
   	{
   		$photo=$variables->employee['es_photo'];
   		if($photo!=0)
   			$avatar_image='images/esimages/id_'.$photo.'.jpg';
   	}
   	elseif(isset($variables->studentid) and isset($variables->student['es_photo']))
   	{
   		$photo=$variables->student['es_photo'];
   		if($photo!=0)
   			$avatar_image='images/esimages/id_'.$photo.'.jpg';
   	}
   
   	$filepath_avatar_image=JPATH_SITE.str_replace('/',DIRECTORY_SEPARATOR,$avatar_image);
   	if(!file_exists($filepath_avatar_image))
   		$avatar_image='templates/oxfordsms/images/no-photo.svg';
      
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
	  
	//Custom CSS
	if($custom_css = $this->params->get('custom_css')) {
		$doc->addStyledeclaration( $custom_css );
	}

	//Custom JS
	if($custom_js = $this->params->get('custom_js')) {
		$doc->addScriptdeclaration( $custom_js );
	}

	  
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
            <?php //include('includes'.DIRECTORY_SEPARATOR.'_account_selector.php'); 
			
			//
			?>
            <div class="d-flex flex-wrap bg-gray leftSideBar">
               <?php 
				if(!$is_mobile)
					include('includes'.DIRECTORY_SEPARATOR.'_aside2.php'); 
				?>
               <div class="col-12 col-md-8 col-lg-6 p-responsive mt-3 border-bottom d-flex flex-auto">
                  <div class="mx-auto d-flex flex-auto flex-column" style="max-width: 1400px">
				  
					<?php  if($this->countModules('before-content-area')) : ?>
					<jdoc:include type="modules" name="before-content-area" style="none" />
					<?php endif; ?>  
				  
                     <?php include('includes'.DIRECTORY_SEPARATOR.'_main.php'); ?>
                     <?php //include('includes'.DIRECTORY_SEPARATOR.'_footer.php'); ?>
                  </div>
               </div>
			   
			   <?php 
				if($is_mobile)
					include('includes'.DIRECTORY_SEPARATOR.'_aside2.php'); 
				?>
			   
               <?php  if($this->countModules('right-bar')) : ?>
               <!-- right side bar -->
			   <!--  hide-lg hide-md hide-sm  -->
               <aside class="team-left-column col-12 col-md-3 col-lg-3 pr-3 mt-5border-bottom" aria-label="Explore">
                  <div data-team-hovercards-enabled class="aside_news">
                     <div style="height:40px;margin: 30px 0 -8px 0;">
                        School News
                     </div>
                     <!-- background-image: url(templates/oxfordsms/images/news.png);background-repeat: no-repeat; width:335px;heoght:33px;background-image: url(templates/oxfordsms/news.png);background-repeat: no-repeat;-->
                     <jdoc:include type="modules" name="right-bar" style="none" />
                  </div>
               </aside>
               <?php endif; ?>
            </div>
         </div>
      </div>
      <!-- Modal content -->
      <div id="ctModal" class="ctModal">
         <div id="ctModal_box" class="ctModal_content">
            <span id="ctModal_close" class="ctModal_close">&times;</span>
            <div id="ctModal_content">
               <p>Some text in the Modal..</p>
            </div>
         </div>
      </div>
      <!-- end of the modal -->
      <script crossorigin="anonymous" async="async" type="application/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/environment-bootstrap-a544e728.js"></script>
      <script crossorigin="anonymous" async="async" type="application/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor-35c9bc10.js"></script>
      <script crossorigin="anonymous" async="async" type="application/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/frameworks-4f69d005.js"></script>
      <?php
         if(isset($variables->employee) and $variables->employee!=0 and $this->params->get('freshworksid')!=''): ?>
      <script>
         window.fwSettings={
         "widget_id":<?php echo $this->params->get('freshworksid'); ?>
         };
         !function(){if("function"!=typeof window.FreshworksWidget){var n=function(){n.q.push(arguments)};n.q=[],window.FreshworksWidget=n}}()
      </script>
      <script type="text/javascript" src="https://widget.freshworks.com/widgets/<?php echo $this->params->get('freshworksid'); ?>.js" async defer></script>
      <?php endif; ?>
	  
	<?php 
		if($before_body = $this->params->get('before_body')) {
			echo $before_body . "\n";
		}
	?>
	  
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
   		
   		
   		
           if ($showlogin) {
			echo 
'
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
