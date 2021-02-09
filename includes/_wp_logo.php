<?php
/**
* OxfordSMS - Template
* @author    Ivan Komlev
* @copyright Copyright (C) 2020 Ivan Komlev. All rights reserved.
* @license	 GNU/GPL
*/

//This loader also prevents douple queries

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

//<img src="<?php echo $this->baseurl >templates/<?php echo $this->template; >/images/oxford-logo.png" 

if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . htmlspecialchars(JUri::root() . $this->params->get('logoFile'), ENT_QUOTES) . '" title="' . $sitename . '" alt="' . $sitename . '" width="295" height="68" style="max-height:68px;height:auto;" />';
	
}
else
{
	$logo = $sitename;
}
?>

<a class="Header-link" href="<?php echo JURI::root(); ?>dashboard">
<div class="fusion-logo" data-margin-top="10px" data-margin-bottom="10px" data-margin-left="0px" data-margin-right="0px">
    <?php echo $logo; ?>
</div>
</a>
