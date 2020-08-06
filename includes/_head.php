<?php ?>


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


<!-- -------------------------------------- -->


 <meta charset="utf-8" />
		
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/index.js"></script>
    
	
	<script>
	
document.addEventListener("DOMContentLoaded", function(){
	
    adaptLayout();
});
	</script>
    


	<meta name="viewport" content="width=device-width">
  
 

	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

	<jdoc:include type="head" />

	<link href="/media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />


  
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/frameworks.css" />
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/github.css" />
	
	
