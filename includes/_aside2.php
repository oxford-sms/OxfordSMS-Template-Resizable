<?php
/**
 * OxfordSMS - Template - Avatar
 * @author    Ivan Komlev
 * @copyright Copyright (C) 2020-2021 Ivan Komlev. All rights reserved.
 * @license     GNU/GPL
 */

//This loader also prevents douple queries

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<!-- hide-md hide-sm  overflow-auto bg-white-->

<aside class="team-left-column col-12 col-md-4 col-lg-3 border-right border-bottom" aria-label="Account">
    <div class="dashboard-sidebar js-repos-container px-3 px-md-4 px-lg-4 top-0" id="org_your_repos" data-pjax-container
         style="height:100%;padding-top:9px;">

        <div id="oxfordSMSPageHeader"></div>
        <div id="oxfordSMSDashboardYeraTermMonthBoxes"></div>


        <!-- <div class="border-bottom py-3 mt-3 mb-4"></div>-->
        <div id="oxfordSMSDashboardTabs"></div>
        <div id="oxfordSMSDashboardCTToolBar"></div>
        <div id="oxfordSMSDashboardCTSearchBoxes"></div>
        <div id="oxfordSMSDashboardMenu"></div>


		<?php if ($this->countModules('left-bar')) : ?>
            <jdoc:include type="modules" name="left-bar" style="card"/>
		<?php endif; ?>

		<?php if ($this->countModules('left-bar-loginbox', true) and $real_userid == 0 and !($option == 'com_users' and $view == 'login')) : ?>

            <jdoc:include type="modules" name="left-bar-loginbox" style="card"/>

		<?php endif; ?>


        <div class="mb-3" data-repository-hovercards-enabled>
            <div>
				<?php if ($alias != 'application-form'): ?>
                    <div class="leftSideFooter2">
                        <a title="Home page" class="d-none d-lg-flex footer-octicon footer-octicon no-underline"
                           href="https://oxfordsms.com" target="_blank">
                            <div>
								<?php
								$smalllogo = $this->baseurl . '/templates/' . $this->template . '/images/oxfordsms-24.png';
								if ($this->params->get('smalllogo') != '')
									$smalllogo = $this->params->get('smalllogo');

								?>
                                <img src="<?php echo $smalllogo; ?>" style="height:24px;"/>
                            </div>
                            <div>
                     <span class="f6 text-gray-light" style="margin-left:5px;"><?php
	                     $copyright = '&copy; 2020-2022 OxfordSMS,S.A.';
	                     if ($this->params->get('copyright') != '')
		                     $copyright = $this->params->get('copyright');

	                     echo $copyright;


	                     ?></span>
                            </div>
                        </a>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
    <!--<div class="d-flex flex-items-between footer container-lg my-5 px-0" role="contentinfo">
	   <div class="col-lg-4 list-style-none mr-lg-5">-->
    <!--</div>
	   </div>-->
</aside>

