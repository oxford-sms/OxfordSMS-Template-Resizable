<?php
/*------------------------------------------------------------------------
# author Ivan Komlev
# copyright Copyright © 2020 oxfordsms.com All rights reserved.
# @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website https://oxfordsms.com
-------------------------------------------------------------------------*/
// no direct access
defined('_JEXEC') or die;


?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">

<head>
<!--[if lt IE 9]>
	<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
<![endif]-->
<!--<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">-->
<meta name="viewport" content="width=device-width">
<script>
<?php // //This function response to the postMessage request with the document height. This is to be used inside iFrame to adjust the iFrame height every 500ms to document height. ?>

function checkCookie(){
	var url=location.href;
	if(url.indexOf("login")==-1)
		return;
	
    var cookieEnabled = navigator.cookieEnabled;
    if (!cookieEnabled){ 
        document.cookie = "testcookie";
        cookieEnabled = document.cookie.indexOf("testcookie")!=-1;
    }
	
	if(!cookieEnabled)
	{
		var message='Dear user,<br/>In order to log in to our website, cookies on your browser need to be enabled.';// Please click on this link and follow the instructions.';
		
		var isSafari = /^((?!chrome|android|crios|fxios).)*safari/i.test(navigator.userAgent);
		if(isSafari)
			message+='<br><a href="/index.php/how-to-enable-cookies">How to enable cookies.</a>';
		
		document.write('<div id="system-message-container"><div id="system-message"><div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><h4 class="alert-heading">Error</h4><div><div class="alert-message">'+message+'</div></div></div></div></div><p></p>');
		
		//setTimeout(function(){
			document.getElementById("contentArea").innerHTML="";
			//}, 1000);
		
	}
}

function receiveMessage(event)
{
	if(event.data==="height")
	{
		if(document.body)
		{
			var answer="height:"+document.body.clientHeight+",url:"+btoa(location.href);
			event.source.postMessage(answer,event.origin);
		}
	}
}

window.addEventListener("message", receiveMessage, false);

window.onbeforeunload = function (e) {
  document.getElementById("loader").style.display = "block";
  document.getElementById("oxfordSMSDashboard").style.display = "none";
  //return message;
};

function showPage() {
	//alert(123);
  document.getElementById("loader").style.display = "none";
  document.getElementById("oxfordSMSDashboard").style.display = "block";
}


if(window.addEventListener) {
    window.addEventListener('load',showPage,false); //W3C
} else {
    window.attachEvent('onload',showPage); //IE
}

</script>

  <link crossorigin="anonymous" media="all" integrity="sha512-aZYk5AYsRiFiFG04Si6FnQoHFwAugnodzKJXgafKqPWsrgrjoWRsapCn//vFuWqjSzr72ucZfPq8/ZbduuSeQg==" rel="stylesheet" href="https://github.githubassets.com/assets/frameworks-next-699624e4062c462162146d384a2e859d.css" />
  
    <link crossorigin="anonymous" media="all" integrity="sha512-qP/wSs83gQ2Jsrm94mfqU27K5YQ4xKUtKbbl+eMuqODXJdZ/C/K5YajXR6yHDWZ7O4E0Z3FMG8OAOvIJHKvtGA==" rel="stylesheet" href="https://github.githubassets.com/assets/github-next-a8fff04acf37810d89b2b9bde267ea53.css" />
    
    
    

<?php /*
	<link href="/media/jui/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="/media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- <link href="/templates/oxfordsms/github.css" rel="stylesheet" type="text/css" /> 	-->
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/alerts.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/autocomplete.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/avatars.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/base.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/blankslate.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/box.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/branch-name.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/breadcrumb.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/buttons.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/core.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/dropdown.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/forms.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/header.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/labels.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/layout.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/loaders.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/markdown.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/marketing-buttons.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/marketing-support.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/marketing-type.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/marketing-utilities.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/marketing.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/navigation.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/pagination.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/popover.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/primer.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/product.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/progress.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/select-menu.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/subhead.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/support.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/table-object.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/timeline.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/toasts.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/tooltips.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/truncate.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/utilities.min.css" rel="stylesheet" type="text/css" />
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/Primer/14.4.0/primer.css" rel="stylesheet" type="text/css" /> 
	<!--<link href="/templates/oxfordsms/style.css" rel="stylesheet" type="text/css" /> -->
	*/ ?>
	<jdoc:include type="head" />
</head>

<body id="bg">

	<!--<div id="loader"></div>
	<div class="oxfordSMSContainer animate-bottom application-main" style="display:none;" id="oxfordSMSDashboard">-->
		
	<?php  if($this->countModules('left-bar')) : ?>
	<aside class="team-left-column col-12 col-md-4 col-lg-3 bg-white border-right border-bottom hide-md hide-sm" aria-label="Account" style="position:fixed;">
    jdoc:include type="modules" <br/>
	name="left-bar" style="block" />
	sfdvsdfv <br/>
	sfdvsdfv <br/>
	sfdvsdfv <br/>
	sfdvsdfv <br/>
	
	</aside>
	<?php  endif; ?>
	
	<div class="col-12 col-md-8 col-lg-6 p-responsive mt-3 border-bottom d-flex flex-auto" >
      <div class="mx-auto d-flex flex-auto flex-column" style="max-width: 1400px">
        <main class="flex-auto">

<div class="dashboard">

<div class="news">
<?php /*
	<jdoc:include type="message" />

    <?php  if($this->countModules('before-content')) : ?>
    <jdoc:include type="modules" name="before-content" style="block" />
    <?php  endif; ?>
*/ ?>

hem becoming ridiculously narrow on small screens. The first thought might be to create a bunch of media queries and redefine the grid with different numbers of columns. That would work fine, but with the auto-fit keyword, it is all done automatically.

For auto-fit to work the way we want, we need to use the minmax() function. This tells the browser how small the columns can be squeezed down to followed by the maximum width they can expand to. Any smaller, and it will automatically reduce the number of columns. Any larger, and the number of columns increases.

.archive {
  grid-template-columns: repeat (auto-fit, minmax(180px, 1fr));
}

In this example, the browser will fit in as many columns as it can 180px wide. If there is space left over the columns will all grow equally by sharing the remaining space between them —  that’s what the 1fr value is saying: make the columns equal fractions of the available width. 

Drag the window out and as the available space increases the columns all grow equally to use up any additional space. The columns will keep growing until the available space allows for an additional 180px column, at which point a whole new column appears. Decrease the screen width, and the process reverses, perfectly adjusting the grid all the way down to a single column layout. Magic!

And you get all this responsiveness out of just one line of code. How cool is that? 
Creating spans with “autoflow: dense”

So far, we have a responsive grid but all items the same width. For a news or magazine layout we need some content to be featured by spanning two or more columns or even, perhaps, to span all the columns.

To create multi-column spans we can add the column-span feature to the grid items we want to take up more space. For example, if we want the third item in our list to be two columns wide we can add:

.article:nth-child(3) {
  grid-column: span 2;
}

However, once we start adding spans a number of problems can arise. First, gaps may appear in the grid because a wide item may may not fit on the row, so grid auto-fit pushes it onto the next line, leaving a gap where it would have been:


<!--<div id='contentArea'>jdoc:include type="component" /></div>-->
</div>
</div>



</main>
</div>
</div>

<aside class="team-left-column col-12 col-md-3 col-lg-3 pr-3 mt-5 hide-lg hide-md hide-sm border-bottom" aria-label="Explore">
            <div data-team-hovercards-enabled="">
      
  <h4 class=" mb-2 f5 text-bold">Member statuses</h4>

  <div class="mt-1 user-status-container">
    <a class="link-gray-dark d-inline-block v-align-middle text-bold no-underline f6 mr-1" data-hovercard-type="user" data-hovercard-url="/users/joomlaboat/hovercard" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/joomlaboat">
      <img src="https://avatars2.githubusercontent.com/u/8064340?s=32&amp;u=a04f08257406fe11421c5b3bb6ba2c167e84293a&amp;v=4" class="avatar avatar-user mr-1" alt="" width="16" height="16">
      joomlaboat
</a>    <div title="2020-03-20 04:09:23 UTC" class="css-truncate css-truncate-target v-align-middle user-status-message-wrapper f6 text-gray lh-condensed">
      <div>Working from home</div>
    </div>
  </div>


    </div> 

      </aside>


<!--</div>-->

<!-- jdoc:include type="modules" name="counter" />-->



<script>
	//checkCookie();

	
</script>
</body></html>