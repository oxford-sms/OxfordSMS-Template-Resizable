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
<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
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

	<link href="/media/jui/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="/media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/templates/oxfordsms/github.css" rel="stylesheet" type="text/css" /> 	
	<link href="/templates/oxfordsms/style.css" rel="stylesheet" type="text/css" /> 
	
	<jdoc:include type="head" />
</head>

<body id="bg">

	<div id="loader"></div>
	<div class="oxfordSMSContainer animate-bottom" style="display:none;" id="oxfordSMSDashboard">
		
	<?php  if($this->countModules('before-news')) : ?>
    <div style="position:relative;height:34px;"><jdoc:include type="modules" name="before-news" style="block" /></div>

	<?php  endif; ?>


	<jdoc:include type="message" />

    <?php  if($this->countModules('before-content')) : ?>
    <jdoc:include type="modules" name="before-content" style="block" />
    <?php  endif; ?>


<div id='contentArea'><jdoc:include type="component" /></div>
</div><jdoc:include type="modules" name="counter" />
<script>
	checkCookie();

	
</script>
</body></html>