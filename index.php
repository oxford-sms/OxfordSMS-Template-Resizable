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

if($task == "edit" || $layout == "form" )
{
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
    <meta charset="utf-8">
		
	<script src="/templates/oxfordsms/index.js"></script>
    
	<script>
	/*
	if(window.attachEvent) {
    window.attachEvent('onload', MoveTopMenu);
} else {
    if(window.onload) {
        var curronload = window.onload;
        var newonload = function(evt) {
            curronload(evt);
            MoveTopMenu(evt);
        };
        window.onload = newonload;
    } else {
        window.onload = MoveTopMenu;
    }
}
*/
document.addEventListener("DOMContentLoaded", function(){
	
    MoveTopMenu();
});
	</script>
    


  <meta name="viewport" content="width=device-width">
  
  <?php /*<link rel="mask-icon" href="https://github.githubassets.com/pinned-octocat.svg" color="#000000">*/ ?>
  <?php /*<link rel="alternate icon" class="js-site-favicon" type="image/png" href="https://github.githubassets.com/favicons/favicon.png">*/ ?>
<?php /*  <link rel="icon" class="js-site-favicon" type="image/svg+xml" href="https://github.githubassets.com/favicons/favicon.svg"> */ ?>

<?php /*<meta name="theme-color" content="#1e2327">*/?>

<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

  <!--<link rel="manifest" href="/manifest.json" crossOrigin="use-credentials">-->
<jdoc:include type="head" />

	<!--<link href="/media/jui/css/bootstrap.css" rel="stylesheet" type="text/css" />-->
	

<link href="/media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<style>

.btn{
	all: unset;
}

.dropdown-menu{
	all: unset;
}
</style>
<link href="/templates/oxfordsms/s.css" rel="stylesheet" type="text/css" />
<link crossorigin="anonymous" media="all" integrity="sha512-aZYk5AYsRiFiFG04Si6FnQoHFwAugnodzKJXgafKqPWsrgrjoWRsapCn//vFuWqjSzr72ucZfPq8/ZbduuSeQg==" rel="stylesheet" href="https://github.githubassets.com/assets/frameworks-next-699624e4062c462162146d384a2e859d.css" /> 

  
    <link crossorigin="anonymous" media="all" integrity="sha512-qP/wSs83gQ2Jsrm94mfqU27K5YQ4xKUtKbbl+eMuqODXJdZ/C/K5YajXR6yHDWZ7O4E0Z3FMG8OAOvIJHKvtGA==" rel="stylesheet" href="https://github.githubassets.com/assets/github-next-a8fff04acf37810d89b2b9bde267ea53.css" />

<!--	


	<link href="/media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/media/jui/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<link href="/media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	-->
	
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	-->
	
	

  </head>

  <body class="logged-in env-production page-responsive full-width">
    

    <div class="position-relative js-header-wrapper ">
      <a href="#start-of-content" class="p-3 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
      <span class="Progress progress-pjax-loader position-fixed width-full js-pjax-loader-bar">
        <span class="progress-pjax-loader-bar top-0 left-0" style="width: 0%;"></span>
      </span>

      
      



          <header class="Header py-lg-0 js-details-container Details flex-wrap flex-lg-nowrap px-3" role="banner">
  <div class="Header-item d-none d-lg-flex">
  
  
  


  </div>
  


  <div class="Header-item Header-item--full flex-column flex-lg-row width-full flex-order-2 flex-lg-order-none mr-0 mr-lg-3 mt-3 mt-lg-0 Details-content--hidden">
        <div class="header-search header-search-current js-header-search-current  flex-self-stretch flex-lg-self-auto mr-0 mr-lg-3 mb-3 mb-lg-0 scoped-search site-scoped-search js-site-search position-relative js-jump-to js-header-search-current-jump-to"
  role="combobox"
  aria-owns="jump-to-results"
  aria-label="Search or jump to"
  aria-haspopup="listbox"
  aria-expanded="false"
>
<a class="Header-link border-top border-lg-top-0 border-white-fade-15" href="/dashboard"><?php $config = JFactory::getConfig(); echo $config->get( 'sitename' );  ?></a>
<!--js-selected-navigation-item  py-lg-3  mr-0 mr-lg-3 py-2 -->
<!--
  <div class="position-relative">-->
    <!-- '"` --><!-- </textarea></xmp> </option></form>-->
	
	<!--<form class="js-site-search-form" role="search" aria-label="Site" data-scope-type="Organization" data-scope-id="62612355" data-scoped-search-url="/orgs/oxford-sms/search" data-unscoped-search-url="/search" action="/orgs/oxford-sms/search" accept-charset="UTF-8" method="get">
      <label class="form-control input-sm header-search-wrapper p-0 header-search-wrapper-jump-to position-relative d-flex flex-justify-between flex-items-center js-chromeless-input-container">
        <input type="text"
          class="form-control input-sm header-search-input jump-to-field js-jump-to-field js-site-search-focus js-site-search-field is-clearable"
          data-hotkey="s,/"
          name="q"
          value=""
          placeholder="Search or jump to…"
          data-unscoped-placeholder="Search or jump to…"
          data-scoped-placeholder="Search or jump to…"
          autocapitalize="off"
          aria-autocomplete="list"
          aria-controls="jump-to-results"
          aria-label="Search or jump to…"
          data-jump-to-suggestions-path="/_graphql/GetSuggestedNavigationDestinations"
          spellcheck="false"
          autocomplete="off"
          >
          <input type="hidden" value="qHabnOAxAt+jD7PzhP8PYhCSoXmYI99657hTU3xfNojgKK7/Tj5qfC7mb/T9T3mXNHVkPkx3Oxe0QNFa5Sg9PQ==" data-csrf="true" class="js-data-jump-to-suggestions-path-csrf" />
          <input type="hidden" class="js-site-search-type-field" name="type" >
            <img src="https://github.githubassets.com/images/search-key-slash.svg" alt="" class="mr-2 header-search-key-slash">

            <div class="Box position-absolute overflow-hidden d-none jump-to-suggestions js-jump-to-suggestions-container">
              
<ul class="d-none js-jump-to-suggestions-template-container">
  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-suggestion" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M1.75 0A1.75 1.75 0 000 1.75v12.5C0 15.216.784 16 1.75 16h12.5A1.75 1.75 0 0016 14.25V1.75A1.75 1.75 0 0014.25 0H1.75zM1.5 1.75a.25.25 0 01.25-.25h12.5a.25.25 0 01.25.25v12.5a.25.25 0 01-.25.25H1.75a.25.25 0 01-.25-.25V1.75zM11.75 3a.75.75 0 00-.75.75v7.5a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75zm-8.25.75a.75.75 0 011.5 0v5.5a.75.75 0 01-1.5 0v-5.5zM8 3a.75.75 0 00-.75.75v3.5a.75.75 0 001.5 0v-3.5A.75.75 0 008 3z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this organization">
        In this organization
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">?</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">?</span>
    </div>
  </a>
</li>

</ul>

<ul class="d-none js-jump-to-no-results-template-container">
  <li class="d-flex flex-justify-center flex-items-center f5 d-none js-jump-to-suggestion p-2">
    <span class="text-gray">No suggested jump to results</span>
  </li>
</ul>

<ul id="jump-to-results" role="listbox" class="p-0 m-0 js-navigation-container jump-to-suggestions-results-container js-jump-to-suggestions-results-container">
  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-scoped-search d-none" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M1.75 0A1.75 1.75 0 000 1.75v12.5C0 15.216.784 16 1.75 16h12.5A1.75 1.75 0 0016 14.25V1.75A1.75 1.75 0 0014.25 0H1.75zM1.5 1.75a.25.25 0 01.25-.25h12.5a.25.25 0 01.25.25v12.5a.25.25 0 01-.25.25H1.75a.25.25 0 01-.25-.25V1.75zM11.75 3a.75.75 0 00-.75.75v7.5a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75zm-8.25.75a.75.75 0 011.5 0v5.5a.75.75 0 01-1.5 0v-5.5zM8 3a.75.75 0 00-.75.75v3.5a.75.75 0 001.5 0v-3.5A.75.75 0 008 3z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this organization">
        In this organization
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">?</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">?</span>
    </div>
  </a>
</li>

  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-global-search d-none" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M1.75 0A1.75 1.75 0 000 1.75v12.5C0 15.216.784 16 1.75 16h12.5A1.75 1.75 0 0016 14.25V1.75A1.75 1.75 0 0014.25 0H1.75zM1.5 1.75a.25.25 0 01.25-.25h12.5a.25.25 0 01.25.25v12.5a.25.25 0 01-.25.25H1.75a.25.25 0 01-.25-.25V1.75zM11.75 3a.75.75 0 00-.75.75v7.5a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75zm-8.25.75a.75.75 0 011.5 0v5.5a.75.75 0 01-1.5 0v-5.5zM8 3a.75.75 0 00-.75.75v3.5a.75.75 0 001.5 0v-3.5A.75.75 0 008 3z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this organization">
        In this organization
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">?</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">?</span>
    </div>
  </a>
</li>


    <li class="d-flex flex-justify-center flex-items-center p-0 f5 js-jump-to-suggestion">
      <img src="https://github.githubassets.com/images/spinners/octocat-spinner-128.gif" alt="Octocat Spinner Icon" class="m-2" width="28">
    </li>
</ul>

            </div>
      </label>
</form>-->  </div><!--
</div>
-->

    <nav class="d-flex flex-column flex-lg-row flex-self-stretch flex-lg-self-auto" aria-label="Global">
    
	<?php /* <a class="Header-link py-lg-3 d-block d-lg-none py-2 border-top border-lg-top-0 border-white-fade-15" data-ga-click="Header, click, Nav menu - item:dashboard:user" aria-label="Dashboard" href="/dashboard">
      Dashboard
	  <!-- Header-link py-lg-3 d-block d-lg-none py-2 border-top border-lg-top-0 border-white-fade-15 -->
</a>
*/ ?>
<!-- 
 data-hotkey="g p" data-ga-click="Header, click, Nav menu - item:pulls context:user" aria-label="Pull requests you created" data-selected-links="/pulls /pulls/assigned /pulls/mentioned /pulls"
-->
<?php /* <div class="NavBreadcrumbs">
<ul class="breadcrumb-none js-selected-navigation-item Header-link py-lg-3  mr-0 mr-lg-3 py-2 border-top border-lg-top-0 border-white-fade-15">
					
						<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="active">
						
<a class=" Header-link js-selected-navigation-item Header-link py-lg-3  mr-0 mr-lg-3 py-2 border-top border-lg-top-0 border-white-fade-15" href="/dashboard">
<!---none js-selected-navigation-item Header-link py-lg-3  mr-0 mr-lg-3 py-2 border-top border-lg-top-0 border-white-fade-15
js-selected-navigation-item Header-link border-top border-lg-top-0 border-white-fade-15
 py-lg-3  mr-0 mr-lg-3 py-2 
py-lg-3  mr-0 mr-lg-3 py-2  -->
    Dashboard
</a>
</li></ul>


py-lg-3  mr-0 mr-lg-3 py-2
 py-lg-3 mr-0
 
 
 
 py-2
 
 
 mr-lg-3
</div> */ ?>
<div class="NavBreadcrumbs">
						<div aria-label="Breadcrumbs " role="navigation">
	<ul itemscope itemtype="https://schema.org/BreadcrumbList" class="js-selected-navigation-item Header-link border-top border-lg-top-0 border-white-fade-15 py-lg-3  mr-0 py-2">
					
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
					<a class=" Header-link js-selected-navigation-item Header-link  border-top border-lg-top-0 border-white-fade-15  py-2" href="/dashboard">
						Dashboard
					</a>
				</li>
				</ul>
</div>

					</div>


<div class="NavBreadcrumbs">
						<jdoc:include type="modules" name="top-menu" />
					</div>


<!--
  
  <a class="js-selected-navigation-item Header-link py-lg-3  mr-0 mr-lg-3 py-2 border-top border-lg-top-0 border-white-fade-15" data-hotkey="g i" data-ga-click="Header, click, Nav menu - item:issues context:user" aria-label="Issues you created" data-selected-links="/issues /issues/assigned /issues/mentioned /issues" href="/issues">
    Issues
</a>

    <div class="mr-0 mr-lg-3 py-2 py-lg-0 border-top border-lg-top-0 border-white-fade-15">
      <a class="js-selected-navigation-item Header-link py-lg-3 d-inline-block" data-ga-click="Header, click, Nav menu - item:marketplace context:user" data-octo-click="marketplace_click" data-octo-dimensions="location:nav_bar" data-selected-links=" /marketplace" href="/marketplace">
        Marketplace
</a>      

    </div>

  <a class="js-selected-navigation-item Header-link py-lg-3  mr-0 mr-lg-3 py-2 border-top border-lg-top-0 border-white-fade-15" data-ga-click="Header, click, Nav menu - item:explore" data-selected-links="/explore /trending /trending/developers /integrations /integrations/feature/code /integrations/feature/collaborate /integrations/feature/ship showcases showcases_search showcases_landing /explore" href="/explore">
    Explore
</a>

-->
    <a class="Header-link d-block d-lg-none mr-0 mr-lg-3 py-2 py-lg-3 border-top border-lg-top-0 border-white-fade-15" href="/joomlaboat">
      
	  
  <img class="avatar avatar-user" src="https://avatars1.githubusercontent.com/u/8064340?s=40&amp;v=4" width="20" height="20" alt="@joomlaboat" />
      joomlaboat
	  
</a>
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form action="/logout" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="wxO8sK2YbbSFywL0eGhom9YsKLQBrcxbi8f9GywKTjEYhzzD8D3/orAP76gK0LCAascJCwKUV87EoQ5pOZYb+w==" />
      <button type="submit" class="Header-link mr-0 mr-lg-3 py-2 py-lg-3 border-top border-lg-top-0 border-white-fade-15 d-lg-none btn-link d-block width-full text-left" data-ga-click="Header, sign out, icon:logout" style="padding-left: 2px;">
        <svg class="octicon octicon-sign-out v-align-middle" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm10.44 4.5H6.75a.75.75 0 000 1.5h5.69l-1.97 1.97a.75.75 0 101.06 1.06l3.25-3.25a.75.75 0 000-1.06l-3.25-3.25a.75.75 0 10-1.06 1.06l1.97 1.97z"></path></svg>
        Sign out
      </button>
</form></nav>

  </div>

  <div class="Header-item Header-item--full flex-justify-center d-lg-none position-relative">
    <a class="Header-link" href="https://github.com/orgs/oxford-sms/dashboard" data-hotkey="g d"
  aria-label="Homepage " data-ga-click="Header, go to dashboard, icon:logo">
  <svg class="octicon octicon-mark-github v-align-middle" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
</a>

  </div>

  <div class="Header-item mr-0 mr-lg-3 flex-order-1 flex-lg-order-none">
    
    <a aria-label="You have unread notifications" class="Header-link notification-indicator position-relative tooltipped tooltipped-sw js-socket-channel js-notification-indicator" data-hotkey="g n" data-ga-click="Header, go to notifications, icon:unread" data-channel="eyJjIjoibm90aWZpY2F0aW9uLWNoYW5nZWQ6ODA2NDM0MCIsInQiOjE1OTMxOTE0MDl9--afe6c2348e90e9454f811abd2eca8d900a2ebfacb913e3626207708501e9819e" href="/notifications">
        <span class="js-indicator-modifier mail-status unread"></span>
        <svg class="octicon octicon-bell" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path d="M8 16a2 2 0 001.985-1.75c.017-.137-.097-.25-.235-.25h-3.5c-.138 0-.252.113-.235.25A2 2 0 008 16z"></path><path fill-rule="evenodd" d="M8 1.5A3.5 3.5 0 004.5 5v2.947c0 .346-.102.683-.294.97l-1.703 2.556a.018.018 0 00-.003.01l.001.006c0 .002.002.004.004.006a.017.017 0 00.006.004l.007.001h10.964l.007-.001a.016.016 0 00.006-.004.016.016 0 00.004-.006l.001-.007a.017.017 0 00-.003-.01l-1.703-2.554a1.75 1.75 0 01-.294-.97V5A3.5 3.5 0 008 1.5zM3 5a5 5 0 0110 0v2.947c0 .05.015.098.042.139l1.703 2.555A1.518 1.518 0 0113.482 13H2.518a1.518 1.518 0 01-1.263-2.36l1.703-2.554A.25.25 0 003 7.947V5z"></path></svg>
</a>
  </div>



    <?php //include('_addnew.php'); ?>



  <div class="Header-item position-relative mr-0 d-none d-lg-flex">
    
  <details style="z-index:4000" class="details-overlay details-reset js-feature-preview-indicator-container" data-feature-preview-indicator-src="/users/joomlaboat/feature_preview/indicator_check">

  <summary class="Header-link" style="z-index:3000"
    aria-label="View profile and more"
    data-ga-click="Header, show menu, icon:avatar">
	<div id="OxfordSMSAvatar">AAA
	<?php /*<img
  
  width="20"
  height="20"
  src="https://avatars2.githubusercontent.com/u/8064340?s=60&amp;v=4" class="avatar avatar-user " /> */ ?>
  </div>
    

      <span class="feature-preview-indicator js-feature-preview-indicator" style="top: 10px;" hidden></span>
    <span class="dropdown-caret"></span>
  </summary>
  <details-menu class="dropdown-menu dropdown-menu-sw mt-n2" style="width: 180px" >
  
    <div class="header-nav-current-user css-truncate">
	<!--<a role="menuitem" class="no-underline user-profile-link px-3 pt-2 pb-2 mb-n2 mt-n1 d-block" href="/joomlaboat" data-ga-click="Header, go to profile, text:Signed in as">-->
	<?php
	
	$user = JFactory::getUser();
	echo '<span class="no-underline user-profile-link px-3 pt-2 pb-2 mb-n2 mt-n1 d-block">Signed in as <strong class="css-truncate-target">'.$user->username.'</strong></span></div>';
	
	?>
	
    

      
     <?php /*   <div role="none" class="dropdown-divider"></div><div class="pl-3 pr-3 f6 user-status-container js-user-status-context lh-condensed" data-url="/users/status?compact=1&amp;link_mentions=0&amp;truncate=1">
<div class="js-user-status-container rounded-1 px-2 py-1 mt-2 border"
  data-team-hovercards-enabled>
  <!--<details class="js-user-status-details details-reset details-overlay details-overlay-dark">
    <summary class="btn-link btn-block link-gray no-underline js-toggle-user-status-edit toggle-user-status-edit "
      role="menuitem" >
      <div class="d-flex flex-items-center flex-items-stretch">
        <div class="f6 lh-condensed user-status-header d-flex user-status-emoji-only-header circle">
          <div class="user-status-emoji-container flex-shrink-0 mr-2 d-flex flex-items-center flex-justify-center lh-condensed-ultra v-align-bottom">
            <div><g-emoji class="g-emoji" alias="house" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3e0.png">??</g-emoji></div>
          </div>
        </div>-->
		
        <div class="
          
           user-status-message-wrapper f6 min-width-0"
           style="line-height: 20px;" >
          <div class="css-truncate css-truncate-target width-fit text-gray-dark text-left">
                <span>Dashboard</span>
          </div>
        </div>
		
     <!-- </div>
    </summary>
	</details>-->
  
  <?php //include('_status.php'); ?>
</div>
</div>
*/ ?>
      
      <div role="none" class="dropdown-divider"></div>
	  
	  <?php  if($this->countModules('profilemenu-1')) : ?><jdoc:include type="modules" name="profilemenu-1" style="none" /><?php  endif; ?>
	  <?php /*

    <a role="menuitem" class="dropdown-item" href="/joomlaboat" data-ga-click="Header, go to profile, text:your profile" data-hydro-click="{&quot;event_type&quot;:&quot;global_header.user_menu_dropdown.click&quot;,&quot;payload&quot;:{&quot;request_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;target&quot;:&quot;YOUR_PROFILE&quot;,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;user_id&quot;:8064340}}" data-hydro-click-hmac="51798cfaf1133c636398709a3ddd77dfe17870f704b796894cc441bf4221622f" >Your profile</a>

    <a role="menuitem" class="dropdown-item" href="/joomlaboat?tab=repositories" data-ga-click="Header, go to repositories, text:your repositories" data-hydro-click="{&quot;event_type&quot;:&quot;global_header.user_menu_dropdown.click&quot;,&quot;payload&quot;:{&quot;request_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;target&quot;:&quot;YOUR_REPOSITORIES&quot;,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;user_id&quot;:8064340}}" data-hydro-click-hmac="9afb26c43537de414004053c60ad24456df7c5860881ee2f6f60a48193268889" >Your repositories</a>

      <a role="menuitem"
         class="dropdown-item"
         href="/settings/organizations"
         
         data-ga-click="Header, go to organizations, text:your organizations"
         data-hydro-click="{&quot;event_type&quot;:&quot;global_header.user_menu_dropdown.click&quot;,&quot;payload&quot;:{&quot;request_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;target&quot;:&quot;YOUR_ORGANIZATIONS&quot;,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;user_id&quot;:8064340}}" data-hydro-click-hmac="47017418f9eb34925060b2a51faee9750b362d5685f06241c6cc01f547bb6550"
         >Your organizations</a>

    <a role="menuitem" class="dropdown-item" href="/joomlaboat?tab=projects" data-ga-click="Header, go to projects, text:your projects" data-hydro-click="{&quot;event_type&quot;:&quot;global_header.user_menu_dropdown.click&quot;,&quot;payload&quot;:{&quot;request_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;target&quot;:&quot;YOUR_PROJECTS&quot;,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;user_id&quot;:8064340}}" data-hydro-click-hmac="f87caa2eefa7662be0c76158527b6e83faadb7efcfce2f0b4192d74a2e2f97e2" >Your projects</a>

    <a role="menuitem" class="dropdown-item" href="/joomlaboat?tab=stars" data-ga-click="Header, go to starred repos, text:your stars" data-hydro-click="{&quot;event_type&quot;:&quot;global_header.user_menu_dropdown.click&quot;,&quot;payload&quot;:{&quot;request_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;target&quot;:&quot;YOUR_STARS&quot;,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;user_id&quot;:8064340}}" data-hydro-click-hmac="fe346f09fa8ce2ecc2e893285606563e9ee68ca81bcc47dc5f365543af5d571f" >Your stars</a>
      <a role="menuitem" class="dropdown-item" href="https://gist.github.com/mine" data-ga-click="Header, your gists, text:your gists" data-hydro-click="{&quot;event_type&quot;:&quot;global_header.user_menu_dropdown.click&quot;,&quot;payload&quot;:{&quot;request_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;target&quot;:&quot;YOUR_GISTS&quot;,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;,&quot;user_id&quot;:8064340}}" data-hydro-click-hmac="07e640f531a2984e875e748272b06abcc5480024c6d5e6a957dd905c8e780f3d" >Your gists</a>

<div role="none" class="dropdown-divider"></div>
*/ ?>

<?

   



  </div>

</header>

        

    </div>

  <div id="start-of-content" class="show-on-focus"></div>




    <div id="js-flash-container">


  <template class="js-flash-template">
    <div class="flash flash-full  js-flash-template-container">
  <div class="container-lg px-2" >
    <button class="flash-close js-flash-close" type="button" aria-label="Dismiss this message">
      <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
    </button>
    
      <div class="js-flash-template-message"></div>

  </div>
</div>
  </template>
</div>


    

  <include-fragment class="js-notification-shelf-include-fragment" data-base-src="https://github.com/notifications/beta/shelf"></include-fragment>



  <div
    class="application-main "
    data-commit-hovercards-enabled
    data-discussion-hovercards-enabled
    data-issue-and-pr-hovercards-enabled
  >
            <aside class="hide-xl hide-lg width-full bg-white border-bottom py-3 p-responsive" aria-label="Account context">
      
<details
  class="details-reset details-overlay d-inline-block position-relative"
  id="details-1f7db5">
        <summary
        class="no-underline btn-link text-gray-dark text-bold width-full"
        title="Switch account context"
        
        data-ga-click="Dashboard, click, Opened account context switcher - context:organization">
        <img
  alt="@oxford-sms"
  width="20"
  height="20"
  src="https://avatars0.githubusercontent.com/u/62612355?s=60&amp;v=4"
  class="avatar " />

        <span class="css-truncate css-truncate-target ml-1">oxford-sms</span>
        <span class="dropdown-caret"></span>
      </summary>

  <details-menu
    class="SelectMenu"
      src="/dashboard/ajax_context_list?current_context=oxford-sms"
      preload
      role="menu"
      aria-label="Switch dashboard context"
    >
    <div class="SelectMenu-modal">
        <header class="SelectMenu-header">
            <div class="SelectMenu-title">Switch dashboard context</div>
          <button class="SelectMenu-closeButton" type="button" aria-label="Close menu" data-toggle-for="details-1f7db5">
            <svg height="16" class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>

          </button>
        </header>
      <div
        id="filter-menu-1f7db5"
        class="d-flex flex-column flex-1 overflow-hidden"
>
        <div
          class="SelectMenu-list"
          >

            <include-fragment class="SelectMenu-loading" aria-label="Loading">
              <svg class="octicon octicon-octoface anim-pulse" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"></path></svg>
            </include-fragment>
        </div>
            <div class="border-top border-gray-light position-relative">
      <a
  class="SelectMenu-item"
  href="/account/organizations"
  role="menuitem"
  
  data-ga-click="Dashboard, click, Manage orgs link in context switcher - context:organization">
    
        <svg class="octicon octicon-organization SelectMenu-icon" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M1.5 14.25c0 .138.112.25.25.25H4v-1.25a.75.75 0 01.75-.75h2.5a.75.75 0 01.75.75v1.25h2.25a.25.25 0 00.25-.25V1.75a.25.25 0 00-.25-.25h-8.5a.25.25 0 00-.25.25v12.5zM1.75 16A1.75 1.75 0 010 14.25V1.75C0 .784.784 0 1.75 0h8.5C11.216 0 12 .784 12 1.75v12.5c0 .085-.006.168-.018.25h2.268a.25.25 0 00.25-.25V8.285a.25.25 0 00-.111-.208l-1.055-.703a.75.75 0 11.832-1.248l1.055.703c.487.325.779.871.779 1.456v5.965A1.75 1.75 0 0114.25 16h-3.5a.75.75 0 01-.197-.026c-.099.017-.2.026-.303.026h-3a.75.75 0 01-.75-.75V14h-1v1.25a.75.75 0 01-.75.75h-3zM3 3.75A.75.75 0 013.75 3h.5a.75.75 0 010 1.5h-.5A.75.75 0 013 3.75zM3.75 6a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM3 9.75A.75.75 0 013.75 9h.5a.75.75 0 010 1.5h-.5A.75.75 0 013 9.75zM7.75 9a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM7 6.75A.75.75 0 017.75 6h.5a.75.75 0 010 1.5h-.5A.75.75 0 017 6.75zM7.75 3a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5z"></path></svg>
        Manage organizations


</a>
        <a
  class="SelectMenu-item"
  href="/account/organizations/new"
  role="menuitem"
  
  data-ga-click="Dashboard, click, Create org link in context switcher - context:organization">
    
          <svg class="octicon octicon-plus SelectMenu-icon" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 2a.75.75 0 01.75.75v4.5h4.5a.75.75 0 010 1.5h-4.5v4.5a.75.75 0 01-1.5 0v-4.5h-4.5a.75.75 0 010-1.5h4.5v-4.5A.75.75 0 018 2z"></path></svg>
          Create organization


</a>
    </div>

      </div>
    </div>
  </details-menu>
</details>


    </aside>

  

  <div class="d-flex flex-wrap bg-gray" style="min-height: 100vh;">
    <aside class="team-left-column col-12 col-md-4 col-lg-3 bg-white border-right border-bottom hide-md hide-sm" aria-label="Account">
          <div class="dashboard-sidebar js-repos-container px-3 px-md-4 px-lg-4 js-sticky overflow-auto top-0" id="org_your_repos" data-pjax-container>
<?php /*
      <div class="border-bottom py-3 mt-3 mb-4">
        
<details
  class="details-reset details-overlay d-inline-block position-relative"
  id="details-bfe4a3">
        <summary
        class="no-underline btn-link text-gray-dark text-bold width-full"
        title="Switch account context"
        
        data-ga-click="Dashboard, click, Opened account context switcher - context:organization">
        <img
  alt="@oxford-sms"
  width="20"
  height="20"
  src="https://avatars0.githubusercontent.com/u/62612355?s=60&amp;v=4"
  class="avatar " />

        <span class="css-truncate css-truncate-target ml-1">oxford-sms</span>
        <span class="dropdown-caret"></span>
      </summary>

  <details-menu
    class="SelectMenu"
      src="/dashboard/ajax_context_list?current_context=oxford-sms"
      preload
      role="menu"
      aria-label="Switch dashboard context"
    >
    <div class="SelectMenu-modal">
        <header class="SelectMenu-header">
            <div class="SelectMenu-title">Switch dashboard context</div>
          <button class="SelectMenu-closeButton" type="button" aria-label="Close menu" data-toggle-for="details-bfe4a3">
            <svg height="16" class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>

          </button>
        </header>
      <div
        id="filter-menu-bfe4a3"
        class="d-flex flex-column flex-1 overflow-hidden"
>
        <div
          class="SelectMenu-list"
          >

            <include-fragment class="SelectMenu-loading" aria-label="Loading">
              <svg class="octicon octicon-octoface anim-pulse" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"></path></svg>
            </include-fragment>
        </div>
            <div class="border-top border-gray-light position-relative">
      <a
  class="SelectMenu-item"
  href="/account/organizations"
  role="menuitem"
  
  data-ga-click="Dashboard, click, Manage orgs link in context switcher - context:organization">
    
        <svg class="octicon octicon-organization SelectMenu-icon" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M1.5 14.25c0 .138.112.25.25.25H4v-1.25a.75.75 0 01.75-.75h2.5a.75.75 0 01.75.75v1.25h2.25a.25.25 0 00.25-.25V1.75a.25.25 0 00-.25-.25h-8.5a.25.25 0 00-.25.25v12.5zM1.75 16A1.75 1.75 0 010 14.25V1.75C0 .784.784 0 1.75 0h8.5C11.216 0 12 .784 12 1.75v12.5c0 .085-.006.168-.018.25h2.268a.25.25 0 00.25-.25V8.285a.25.25 0 00-.111-.208l-1.055-.703a.75.75 0 11.832-1.248l1.055.703c.487.325.779.871.779 1.456v5.965A1.75 1.75 0 0114.25 16h-3.5a.75.75 0 01-.197-.026c-.099.017-.2.026-.303.026h-3a.75.75 0 01-.75-.75V14h-1v1.25a.75.75 0 01-.75.75h-3zM3 3.75A.75.75 0 013.75 3h.5a.75.75 0 010 1.5h-.5A.75.75 0 013 3.75zM3.75 6a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM3 9.75A.75.75 0 013.75 9h.5a.75.75 0 010 1.5h-.5A.75.75 0 013 9.75zM7.75 9a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM7 6.75A.75.75 0 017.75 6h.5a.75.75 0 010 1.5h-.5A.75.75 0 017 6.75zM7.75 3a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5z"></path></svg>
        Manage organizations


</a>
        <a
  class="SelectMenu-item"
  href="/account/organizations/new"
  role="menuitem"
  
  data-ga-click="Dashboard, click, Create org link in context switcher - context:organization">
    
          <svg class="octicon octicon-plus SelectMenu-icon" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 2a.75.75 0 01.75.75v4.5h4.5a.75.75 0 010 1.5h-4.5v4.5a.75.75 0 01-1.5 0v-4.5h-4.5a.75.75 0 010-1.5h4.5v-4.5A.75.75 0 018 2z"></path></svg>
          Create organization


</a>
    </div>

      </div>
    </div>
  </details-menu>
</details>


      </div>
	  */ ?>
	  
	 <!-- <div class="border-bottom py-3 mt-3 mb-4"></div>-->
	  
	<div id="oxfordSMSDashboardMenu"></div>  
	  
	  <?php /*
      <a class="btn btn-outline f6 width-full mb-3" data-ga-click="Dashboard, click, Nav menu - item:org-profile context:organization" data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;target&quot;:&quot;ORG_PROFILE&quot;,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="f14cef9c97485e65a1195310e4a7d416ac2f3d0ad6561ee9e852292137bfd275" href="https://github.com/oxford-sms">View organization</a>
	  
	  */ ?>
	  
      <div class="mb-3" data-repository-hovercards-enabled>
        
<div>
<?php /*
  <h2 class="f4 hide-sm hide-md f5 mb-1 d-flex flex-justify-between flex-items-center">
    Repositories
      <a class="btn btn-sm btn-primary text-white" data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;NEW_REPOSITORY_BUTTON&quot;,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="949c7a362d5f405be5509916e3a9b79e343cd8e6f0e8587fb0365939390f56d1" data-ga-click="Dashboard, click, Sidebar header new repo button - context:organization" href="/organizations/oxford-sms/repositories/new">
        <svg class="octicon octicon-repo" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path></svg> New
</a>  </h2>
    <input type="text" class="form-control input-block mt-2 mb-3 js-filterable-field js-your-repositories-search" id="org-repos-filter-xl" placeholder="Find a repository&hellip;" aria-label="Find a repository&hellip;" data-url="https://github.com/orgs/oxford-sms/dashboard" data-query-name="q" value="" autocomplete="off"> */ ?>
    
	
	<div id="oxfordSMSDashboardTabs"></div>
	
	<?php /*
<ul class="list-style-none" data-filterable-for="org-repos-filter-xl" data-filterable-type="substring">
    <li class="private source">
      <a href="/oxford-sms/Grading"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:249786263,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="b1565f1318755cf3d0c673daade921918bbb133bd7f4fe683128cf98eeb8fa21" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Grading/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Grading">
          <span>Grading</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Streaming-Groups"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:262866015,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="849389316bf17108a6c2ea93105ec686af34f83e4e59f1ac14d92674cfb9869a" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Streaming-Groups/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Streaming-Groups">
          <span>Streaming-Groups</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Study-Guides"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:249776319,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="2efb158f9fe5c5f441258e6414046e49a54bfbd304050af83308826436bb01fc" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Study-Guides/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Study-Guides">
          <span>Study-Guides</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Parents"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:262686965,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="5cc544f44197b355db6dc60b906c060864fffde221ffb0f916b51b9feeceb1a8" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Parents/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Parents">
          <span>Parents</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Attendance"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:257401319,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="27089d95197dc3a413ed9e3150db74a8eb4b2caab00b0e8acd4e5d4d1e5e8cf0" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Attendance/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Attendance">
          <span>Attendance</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Oxford-School-Management-System"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:262804878,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="c281882fb67ca2200954bb8250d8fc28eff31bbb7c3dce428bd68a24f90e2b4c" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Oxford-School-Management-System/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Oxford-School-Management-System">
          <span>Oxford-School-Management-System</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/mod_a2copayment"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:263111224,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="fdf504e4aae2e3b49650d4634f6e1e8d17435ce750e6a7cfbb507711e849aceb" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/mod_a2copayment/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/mod_a2copayment">
          <span>mod_a2copayment</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Human-Resources"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:249780119,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="7e1695c925e2d5d06ea773771740a8b7ed8223d06c9e008ca11437b9d2a9aeb0" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Human-Resources/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Human-Resources">
          <span>Human-Resources</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Lesson-Plans"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:266231287,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="6852a677cb0dcf3423fb798a0b3ac5d9386d754a8fe876ecc0df4099e07adf87" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Lesson-Plans/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Lesson-Plans">
          <span>Lesson-Plans</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Report-Card"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:265893136,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="2b14c487c5a1f22e4df16338c50be0ad2b9cf66fbabfa6f002cd5e57cae6e128" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Report-Card/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Report-Card">
          <span>Report-Card</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Programs-Suggestions"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:271092946,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="cc19a10cce54a81ab4a342e995db81fd6be6f1ca2a45632c835813e84e66e96c" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Programs-Suggestions/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Programs-Suggestions">
          <span>Programs-Suggestions</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Media"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:264034784,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="e30b072259c4a0839bc781895beb6f868d7ad2af165a477592650521c6f4781f" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Media/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Media">
          <span>Media</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Homeroom"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:271629445,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="7da3f3551d5717969081f6ce44e2b9b5616b141429bd43d65286cb496479b116" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Homeroom/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Homeroom">
          <span>Homeroom</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/OxfordSMS-Template-Resizable"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:272596408,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="c44817dba0809ea4a31bec2841872922e0d2d37778591e16cdfd9fa42978a5cb" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/OxfordSMS-Template-Resizable/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/OxfordSMS-Template-Resizable">
          <span>OxfordSMS-Template-Resizable</span>
        </span>
      </a>
    </li>
</ul>

*/ ?>
</div>

      </div>
    </div>

    </aside>

    <div class="col-12 col-md-8 col-lg-6 p-responsive mt-3 border-bottom d-flex flex-auto">
      <div class="mx-auto d-flex flex-auto flex-column" style="max-width: 1400px">
        <main class="flex-auto">
          








<div id="dashboard" class="dashboard">


  <div class="news">

    <div class="js-dashboard-deferred" data-src="/dashboard/recent-activity?organization_id=MDEyOk9yZ2FuaXphdGlvbjYyNjEyMzU1" data-priority="1" >
  <div class="Box text-center p-3 mb-4 d-none js-loader">
    <div class="loading-message">
      <img alt="" src="https://github.githubassets.com/images/spinners/octocat-spinner-64.gif" width="32" height="32" />
      <p class="text-gray my-2 mb-0">Loading recent activity...</p>
    </div>
  </div>
</div>


    <div class="d-block d-md-none">
      <div class="mt-2 mb-4 Details js-repos-container" id="dashboard-org-repos-box" data-pjax-container role="navigation">
        <h2 class="f4 mb-1 text-normal d-flex flex-justify-between flex-items-center">Repositories</h2>
        <div class="Box px-2 py-1 mb-3 pb-2">
          
<div>
  <h2 class="f4 hide-sm hide-md f5 mb-1 d-flex flex-justify-between flex-items-center">
    Repositories
      <a class="btn btn-sm btn-primary text-white" data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;NEW_REPOSITORY_BUTTON&quot;,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="949c7a362d5f405be5509916e3a9b79e343cd8e6f0e8587fb0365939390f56d1" data-ga-click="Dashboard, click, Sidebar header new repo button - context:organization" href="/organizations/oxford-sms/repositories/new">
        <svg class="octicon octicon-repo" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path></svg> New
</a>  </h2>
    <input type="text" class="form-control input-block mt-2 mb-3 js-filterable-field js-your-repositories-search" id="org-repos-filter-sm" placeholder="Find a repository&hellip;" aria-label="Find a repository&hellip;" data-url="https://github.com/orgs/oxford-sms/dashboard" data-query-name="q" value="" autocomplete="off">
    
<ul class="list-style-none" data-filterable-for="org-repos-filter-sm" data-filterable-type="substring">
    <li class="private source">
      <a href="/oxford-sms/Grading"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:249786263,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="b1565f1318755cf3d0c673daade921918bbb133bd7f4fe683128cf98eeb8fa21" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Grading/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Grading">
          <span>Grading</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Streaming-Groups"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:262866015,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="849389316bf17108a6c2ea93105ec686af34f83e4e59f1ac14d92674cfb9869a" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Streaming-Groups/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Streaming-Groups">
          <span>Streaming-Groups</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Study-Guides"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:249776319,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="2efb158f9fe5c5f441258e6414046e49a54bfbd304050af83308826436bb01fc" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Study-Guides/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Study-Guides">
          <span>Study-Guides</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Parents"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:262686965,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="5cc544f44197b355db6dc60b906c060864fffde221ffb0f916b51b9feeceb1a8" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Parents/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Parents">
          <span>Parents</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Attendance"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:257401319,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="27089d95197dc3a413ed9e3150db74a8eb4b2caab00b0e8acd4e5d4d1e5e8cf0" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Attendance/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Attendance">
          <span>Attendance</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Oxford-School-Management-System"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:262804878,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="c281882fb67ca2200954bb8250d8fc28eff31bbb7c3dce428bd68a24f90e2b4c" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Oxford-School-Management-System/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Oxford-School-Management-System">
          <span>Oxford-School-Management-System</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/mod_a2copayment"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:263111224,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="fdf504e4aae2e3b49650d4634f6e1e8d17435ce750e6a7cfbb507711e849aceb" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/mod_a2copayment/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/mod_a2copayment">
          <span>mod_a2copayment</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Human-Resources"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:249780119,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="7e1695c925e2d5d06ea773771740a8b7ed8223d06c9e008ca11437b9d2a9aeb0" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Human-Resources/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Human-Resources">
          <span>Human-Resources</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Lesson-Plans"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:266231287,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="6852a677cb0dcf3423fb798a0b3ac5d9386d754a8fe876ecc0df4099e07adf87" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Lesson-Plans/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Lesson-Plans">
          <span>Lesson-Plans</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Report-Card"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:265893136,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="2b14c487c5a1f22e4df16338c50be0ad2b9cf66fbabfa6f002cd5e57cae6e128" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Report-Card/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Report-Card">
          <span>Report-Card</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Programs-Suggestions"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:271092946,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="cc19a10cce54a81ab4a342e995db81fd6be6f1ca2a45632c835813e84e66e96c" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Programs-Suggestions/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Programs-Suggestions">
          <span>Programs-Suggestions</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Media"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:264034784,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="e30b072259c4a0839bc781895beb6f868d7ad2af165a477592650521c6f4781f" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Media/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Media">
          <span>Media</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/Homeroom"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:271629445,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="7da3f3551d5717969081f6ce44e2b9b5616b141429bd43d65286cb496479b116" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/Homeroom/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/Homeroom">
          <span>Homeroom</span>
        </span>
      </a>
    </li>
    <li class="private source">
      <a href="/oxford-sms/OxfordSMS-Template-Resizable"
        class="d-flex flex-items-center f5 mt-1 css-truncate dashboard-underlined-link"
        data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:272596408,&quot;dashboard_context&quot;:&quot;organization&quot;,&quot;dashboard_version&quot;:2,&quot;user_id&quot;:8064340,&quot;originating_url&quot;:&quot;https://github.com/orgs/oxford-sms/dashboard&quot;}}" data-hydro-click-hmac="c44817dba0809ea4a31bec2841872922e0d2d37778591e16cdfd9fa42978a5cb" data-ga-click="Dashboard, click, Repo list item click - context:organization visibility:private fork:false"
        data-hovercard-type="repository" data-hovercard-url="/oxford-sms/OxfordSMS-Template-Resizable/hovercard">
          <svg class="octicon octicon-lock text-gray mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z"></path></svg>
        <span class="text-bold css-truncate-target" style="max-width:240px" title="oxford-sms/OxfordSMS-Template-Resizable">
          <span>OxfordSMS-Template-Resizable</span>
        </span>
      </a>
    </li>
</ul>


</div>

        </div>
      </div>
    </div>

    <h2 class="f4 text-normal d-none js-all-activity-header">All activity</h2>
<div class="js-dashboard-deferred" data-src="/orgs/oxford-sms/news-feed" data-priority="0">
  <div class="Box p-3 mb-4 mt-2 js-loader"><!--  text-center -->
    <!--<div class="loading-message">
      <img alt="" src="https://github.githubassets.com/images/spinners/octocat-spinner-64.gif" width="32" height="32" />
      <p class="text-gray my-2 mb-0">Loading activity...</p>
    </div>
    <div class="error-message">
      <p class="text-gray my-2 mb-2">There was an error in loading the activity feed. <a href="/" aria-label="Reload this page">Reload this page</a>.</p>
    </div>
	-->
	
	<jdoc:include type="component" />
	</div>
  
</div>

<!--
    <div class="f6 mb-2">
      <a class="link-gray mt-4 d-inline-block" href="/organizations/oxford-sms/joomlaboat.private.atom?token=AB5Q2VERB46YEMEDO4ZV3KV5AIGPC" data-ga-click="Dashboard, click, News feed atom/RSS link - context:organization"><svg class="octicon octicon-rss mr-1" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2.002 2.725a.75.75 0 01.797-.699C8.79 2.42 13.58 7.21 13.974 13.201a.75.75 0 11-1.497.098 10.502 10.502 0 00-9.776-9.776.75.75 0 01-.7-.798zM2 13a1 1 0 112 0 1 1 0 01-2 0zm.84-5.95a.75.75 0 00-.179 1.489c2.509.3 4.5 2.291 4.8 4.8a.75.75 0 101.49-.178A7.003 7.003 0 002.838 7.05z"></path></svg>Subscribe to the <strong>oxford-sms</strong> organization news feed</a>
    </div>-->
  </div>
</div><!-- /#dashboard -->


        </main>
        
<div class="d-flex flex-items-between footer container-lg my-5 px-0" role="contentinfo">
  <div class="col-lg-4 list-style-none mr-lg-5">
    <a title="Home page" class="d-none d-lg-flex footer-octicon footer-octicon no-underline" href="https://github.com">
      <div>
		<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/oxfordsms-24.png" />
      </div>

      <div>
        <span class="f6 text-gray-light" style="margin-left:5px;">          &copy; 2020 OxfordSMS,S.A.        </span>

      </div>
</a>  </div>

  <div class="d-flex flex-justify-start flex-row flex-auto">
  <!--
    <ul class="col-4 col-sm-4 col-lg-4 col-xl-3 list-style-none f6 text-gray pl-lg-4">
        <li class="mb-1"><a class="link-gray" href="https://github.blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li class="mb-1"><a class="link-gray" data-ga-click="Footer, go to about, text:about" href="https://github.com/about">About</a></li>
      <li class="mb-1"><a class="link-gray" href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li class="mb-1"><a class="link-gray" data-ga-click="Footer, go to contact, text:contact" href="https://github.com/contact">Contact GitHub</a></li>
        <li class="mb-1"><a href="/pricing" data-ga-click="Footer, go to Pricing, text:Pricing" class="link-gray">Pricing</a></li>
    </ul>

    <ul class="col-4 col-sm-4 col-lg-4 col-xl-3 list-style-none f6 text-gray pl-lg-4">
      <li class="mb-1"><a class="link-gray" href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li class="mb-1"><a class="link-gray" href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>

        <li class="mb-1">
          <a class="link-gray" href="https://githubstatus.com/" data-ga-click="Footer, go to status, text:status">Status</a>
        </li>
        <li class="mb-1">
          <a class="link-gray" href="https://help.github.com/articles/github-security/" data-ga-click="Footer, go to security, text:security">Security</a>
        </li>
    </ul>

      <ul class="col-4 col-sm-4 col-lg-4 col-xl-3 list-style-none f6 text-gray pl-lg-4">
        <li class="mb-1">
          <a class="link-gray" data-ga-click="Footer, go to terms, text:terms" href="https://github.com/site/terms">Terms</a>
        </li>
        <li class="mb-1">
          <a class="link-gray" data-ga-click="Footer, go to privacy, text:privacy" href="https://github.com/site/privacy">Privacy</a>
        </li>
        <li class="mb-1">
          <a class="link-gray" data-ga-click="Footer, go to help, text:help" href="https://help.github.com">Help</a>
        </li>
      </ul>
	  -->
	  
	  <?php  if($this->countModules('footer')) : ?><jdoc:include type="modules" name="footer" style="none" /><?php  endif; ?>
  </div>
</div>

      </div>
    </div>
      <aside class="team-left-column col-12 col-md-3 col-lg-3 pr-3 mt-5 hide-lg hide-md hide-sm border-bottom" aria-label="Explore">
            <div data-team-hovercards-enabled>
      <!--<include-fragment src="/users/status/members?id=MDEyOk9yZ2FuaXphdGlvbjYyNjEyMzU1&amp;org=1"></include-fragment>-->
	  
	  <?php  if($this->countModules('right-bar')) : ?><jdoc:include type="modules" name="right-bar" style="none" /><?php  endif; ?>
	  
	  
    </div>

      </aside>
  </div>


  </div>


<!--
  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
    </button>
    You can’t perform that action at this time.
  </div>
  -->

<!--
    <script crossorigin="anonymous" async="async" integrity="sha512-WcQmT2vhcClFVOaaAJV/M+HqsJ2Gq/myvl6F3gCVBxykazXTs+i5fvxncSXwyG1CSfcrqmLFw/R/bmFYzprX2A==" type="application/javascript" id="js-conditional-compat" data-src="https://github.githubassets.com/assets/compat-bootstrap-59c4264f.js"></script>
    <script crossorigin="anonymous" integrity="sha512-47cvnR4cfmRA+p1TUeCLY+nCEqD7tni9XPMTW5kLy2C4SUhMCAw0NWiKqvZEM0iZRBw+8u8DgeD30fC56eV02w==" type="application/javascript" src="https://github.githubassets.com/assets/environment-bootstrap-e3b72f9d.js"></script>
    <script crossorigin="anonymous" async="async" integrity="sha512-7TxtlURVUWrbnU4wcYZ7jLSTg7Wu9kx7YNV/Pul+Cst5LlM1iXEhbvJ0dxkwVU3SbXcxFHwuljtm7BwP/2ZyKw==" type="application/javascript" src="https://github.githubassets.com/assets/vendor-ed3c6d95.js"></script>
    <script crossorigin="anonymous" async="async" integrity="sha512-a1TbnbJAeMGDxojD1x632hdgYt2pavdYxDtxU7WVnZtsjRSkF/3d0dZHdR5uqOD3uTHrS4Qx9avmXwhDWbjPhA==" type="application/javascript" src="https://github.githubassets.com/assets/frameworks-6b54db9d.js"></script>
    
    <script crossorigin="anonymous" async="async" integrity="sha512-Ci86toMMy+ru92OIHnFZKlzngrdV/56S1nN7R/iT4nBy/tYJsHZDP2AoPUcYuQ7FKjkhn9xSLH8aNi5Z86ly9g==" type="application/javascript" src="https://github.githubassets.com/assets/github-bootstrap-0a2f3ab6.js"></script>
    
      <script crossorigin="anonymous" async="async" integrity="sha512-4GcSWGoe36+BoWho4gtJcByZe8j43w+lt2/PDe3rmBxRVSgD29YipDwuIywe8fvOd2b2CszBqaPGxSznUtE3Xg==" type="application/javascript" data-module-id="./drag-drop.js" data-src="https://github.githubassets.com/assets/drag-drop-e0671258.js"></script>
      <script crossorigin="anonymous" async="async" integrity="sha512-2k8dDHk0yt52uKvOvgc9cwOXOeJhxBfVP5kPS2BrCdytDmtEIJ2yone26vFENAyk1a2aFQ7KDgEevRQafuAf8A==" type="application/javascript" data-module-id="./gist-vendor.js" data-src="https://github.githubassets.com/assets/gist-vendor-da4f1d0c.js"></script>
      <script crossorigin="anonymous" async="async" integrity="sha512-iv+4yAluOjiG50ZypUBIWIUCRDo6JEBf2twvmd5AelxgPQJO/XC1oNMGTMdDfKt30p7G7fHEOTZ2utHWDJ9PPQ==" type="application/javascript" data-module-id="./randomColor.js" data-src="https://github.githubassets.com/assets/randomColor-8affb8c8.js"></script>
      <script crossorigin="anonymous" async="async" integrity="sha512-ShzV7vprHXaDjCZjqqanCgQ6qxq7WolhMAwEDxrtWu+gUbNY7ecenqBotoMiky/qpYF8B4X7Maktl0kFy0xakA==" type="application/javascript" src="https://github.githubassets.com/assets/dashboard-bootstrap-4a1cd5ee.js"></script>
-->
   <!-- 
  <div class="js-stale-session-flash flash flash-warn flash-banner" hidden
    >
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
    <span class="js-stale-session-flash-signed-in" hidden>You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="js-stale-session-flash-signed-out" hidden>You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>-->
  <!--
  <template id="site-details-dialog">
  <details class="details-reset details-overlay details-overlay-dark lh-default text-gray-dark hx_rsm" open>
    <summary role="button" aria-label="Close dialog"></summary>
    <details-dialog class="Box Box--overlay d-flex flex-column anim-fade-in fast hx_rsm-dialog hx_rsm-modal">
      <button class="Box-btn-octicon m-0 btn-octicon position-absolute right-0 top-0" type="button" aria-label="Close dialog" data-close-dialog>
        <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
      </button>
      <div class="octocat-spinner my-6 js-details-dialog-spinner"></div>
    </details-dialog>
  </details>
</template>
-->

  <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
  <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;">
  </div>
</div>


  </body>
</html>


