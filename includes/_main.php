<main class="flex-auto">


   <div id="dashboard" class="dashboard">
      <div class="news">
	  
		<?php /*
         <div class="js-dashboard-deferred" data-src="/dashboard/recent-activity?organization_id=MDEyOk9yZ2FuaXphdGlvbjYyNjEyMzU1" data-priority="1" >
            <div class="Box text-center p-3 mb-4 d-none js-loader">
               <div class="loading-message">
                  <img alt="" src="https://github.githubassets.com/images/spinners/octocat-spinner-64.gif" width="32" height="32" />
                  <p class="text-gray my-2 mb-0">Loading recent activity...</p>
               </div>
            </div>
         </div>
		 */ ?>
		<div class="d-block d-md-none">
			<div id="oxfordSMSDashboardYeraTermMonthBoxes_Mobile"></div>
			<!--<div id="oxfordSMSPageHeader_Mobile"></div>-->
			<div id="oxfordSMSDashboardCTToolBar_Mobile"></div>  
			<div id="oxfordSMSDashboardCTSearchBoxes_Mobile"></div>  
		</div>
	
         <?php //include('_news.php'); ?>
         <!--<h2 class="f4 text-normal d-none js-all-activity-header">All activity</h2>-->
         
		 
		 <div class="js-dashboard-deferred" data-src="/orgs/oxfordsms/news-feed" data-priority="0">
		 <?php if(!($option=='com_customtables' and ($view=='catalog' or $view=='edititem'))) : ?>
            <div class="Box p-3 mb-4 mt-2 js-loader">
				<?php endif; ?>
				
               <!--  text-center -->
			   <jdoc:include type="message" />
               <jdoc:include type="component" />
			<?php if(!($option=='com_customtables' and ($view=='catalog' or $view=='edititem'))) : ?>
            </div>
			<?php endif; ?>
         </div>
		 
		 
		 
      </div>
   </div>
   
</main>

