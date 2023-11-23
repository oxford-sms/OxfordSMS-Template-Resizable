<?php

$dashboardlink = '/dashboard';
if ($this->params->get('dashboardlink') != '')
	$dashboardlink = $this->params->get('dashboardlink');

?>

<!-- OxfordSMS Dashboard and tom menu links -->
<div class="NavBreadcrumbs">
    <div aria-label="Breadcrumbs " role="navigation">
        <ul itemscope itemtype="https://schema.org/BreadcrumbList"
            class="js-selected-navigation-item Header-link border-top border-lg-top-0 border-white-fade-15 py-lg-3  mr-0 py-2">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
                <a class=" Header-link js-selected-navigation-item Header-link  border-top border-lg-top-0 border-white-fade-15  py-2"
                   href="<?php echo $dashboardlink; ?>">Dashboard</a>
            </li>
        </ul>
    </div>
</div>
<div class="NavBreadcrumbs">
    <jdoc:include type="modules" name="top-bar"/>
</div>
<!-- End of OxfordSMS Dashboard and tom menu links -->

