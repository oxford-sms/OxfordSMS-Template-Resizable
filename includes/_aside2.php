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

?>


 <aside class="team-left-column col-12 col-md-4 col-lg-3 bg-white border-right border-bottom hide-md hide-sm" aria-label="Account">
          <div class="dashboard-sidebar js-repos-container px-3 px-md-4 px-lg-4 js-sticky overflow-auto top-0" id="org_your_repos" data-pjax-container style="height:100%;padding-top:9px;">

	
	<div id="oxfordSMSPageHeader"></div>
	
	<div id="oxfordSMSDashboardYeraTermMonthBoxes"></div>  
	
	<?php  if($this->countModules('left-bar')) : ?>
	<jdoc:include type="modules" name="left-bar" style="none" />
	<?php endif; ?>
	
	 <!-- <div class="border-bottom py-3 mt-3 mb-4"></div>-->
	
	
	
	
	<div id="oxfordSMSDashboardTabs"></div>
	
	
	
	<div id="oxfordSMSDashboardCTToolBar"></div>  
	<div id="oxfordSMSDashboardCTSearchBoxes"></div>  
	
	
	
	<div id="oxfordSMSDashboardMenu"></div>  
	  

	  
    <div class="mb-3" data-repository-hovercards-enabled><div>

    
		
<div class="leftSideFooter2" style="background-color:#ffffff;">
	      <a title="Home page" class="d-none d-lg-flex footer-octicon footer-octicon no-underline" href="https://oxfordsms.com" target="_blank">
         <div>
            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/oxfordsms-24.png" />
         </div>
         <div>
            <span class="f6 text-gray-light" style="margin-left:5px;">          &copy; 2020 OxfordSMS,S.A.        </span>
         </div>
      </a>  </div>

</div>

      </div>
    </div>



	<!--<div class="d-flex flex-items-between footer container-lg my-5 px-0" role="contentinfo">
<div class="col-lg-4 list-style-none mr-lg-5">-->

   <!--</div>
</div>-->


    </aside>
	


	