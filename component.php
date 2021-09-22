<?php
/*------------------------------------------------------------------------
# author Ivan Komlev
# copyright Copyright © 2020-2021 oxfordsms.com All rights reserved.
# @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website https://oxfordsms.com
-------------------------------------------------------------------------*/
defined('_JEXEC') or die;

?>

<!DOCTYPE html>
<!-- component view -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<title><?php 

	if(class_exists('JoomlaBasicMisc'))
		echo JoomlaBasicMisc::JTextExtended($this->title); 
	else
		echo $this->title;//JText::_();
	
?></title>
<jdoc:include type="head" />
<!--[if lt IE 9]>
	<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
<![endif]-->
</head>
<body id="print">
  <div id="overall">
    <jdoc:include type="message" />
    <jdoc:include type="component" />
  </div>
</body>
</html>