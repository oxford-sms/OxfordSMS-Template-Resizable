<main class="flex-auto">
    <div id="dashboard" class="dashboard">
        <div class="news">

            <div class="d-block d-md-none">
                <div id="oxfordSMSDashboardYeraTermMonthBoxes_Mobile"></div>
                <!--<div id="oxfordSMSPageHeader_Mobile"></div>-->
                <div id="oxfordSMSDashboardCTToolBar_Mobile"></div>
                <div id="oxfordSMSDashboardCTSearchBoxes_Mobile"></div>
            </div>

			<?php //include('_news.php'); ?>
            <!--<h2 class="f4 text-normal d-none js-all-activity-header">All activity</h2>-->


            <div class="js-dashboard-deferred" data-priority="0">
				<?php if (!($option == 'com_customtables' and ($view == 'catalog' or $view == 'edititem'))) : ?>
                <div class="Box p-3 mb-4 mt-2 js-loader">
					<?php endif; ?>

                    <!--  text-center -->
                    <jdoc:include type="message"/>

					<?php if ($this->countModules('before-content')) : ?>
                        <jdoc:include type="modules" name="before-content" style="none"/>
					<?php endif; ?>

                    <jdoc:include type="component"/>
					<?php if (!($option == 'com_customtables' and ($view == 'catalog' or $view == 'edititem'))) : ?>
                </div>
			<?php endif; ?>
            </div>
        </div>
    </div>
</main>

