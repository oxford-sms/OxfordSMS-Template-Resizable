<?php 
/*
<script>


if(window.addEventListener) {
    window.addEventListener('load',showPage,false); //W3C
} else {
    window.attachEvent('onload',showPage); //IE
}

</script>
*/ ?>

	<meta charset="utf-8" />
		
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/index.js"></script>
	
	<script>
		function showPage() {
			document.getElementById("loader").style.display = "none";
		document.getElementById("oxfordSMSDashboard").style.display = "block";
		}

		document.addEventListener("DOMContentLoaded", function(){
		    adaptLayout();
			showPage();
		});
	</script>

	<meta name="viewport" content="width=device-width">
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

	<jdoc:include type="head" />

	<link href="/media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
 
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/frameworks.css" />
	<link crossorigin="anonymous" media="all" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/github.css" />
	
	<!-- WP Top Menu -->
	<link rel='stylesheet' id='avada-stylesheet-css'  href='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/topmenu-fusion.css' type='text/css' media='all' />
