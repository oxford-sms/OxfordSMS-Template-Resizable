<?php
/*------------------------------------------------------------------------
# author Ivan Komlev
# copyright Copyright © 2020 oxfordsms.com All rights reserved.
# @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website https://oxfordsms.com
-------------------------------------------------------------------------*/
defined('_JEXEC') or die;

require_once(JPATH_SITE.DIRECTORY_SEPARATOR.'administrator'.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_customtables'.DIRECTORY_SEPARATOR.'libraries'.DIRECTORY_SEPARATOR.'misc.php');
?>

<!DOCTYPE html>
<!-- component view -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<title><?php echo JoomlaBasicMisc::JTextExtended($this->title); ?></title>
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