<?php
/**
 * OxfordSMS - Template
 * @author    Ivan Komlev
 * @copyright Copyright (C) 2020 Ivan Komlev. All rights reserved.
 * @license     GNU/GPL
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

if ($this->params->get('logoFile')) {
	$logo = '<img src="' . htmlspecialchars(JUri::root() . $this->params->get('logoFile'), ENT_QUOTES) . '" title="' . $sitename . '" alt="' . $sitename . '" width="295" height="68" style="max-height:68px;height:auto;" />';
} else {
	$logo = $sitename;
}

$dashboardlink = '/dashboard';
if ($this->params->get('dashboardlink') != '')
	$dashboardlink = $this->params->get('dashboardlink');
?>

<a class="Header-link" href="<?php echo $dashboardlink; ?>">
    <div class="fusion-logo" data-margin-top="10px" data-margin-bottom="10px" data-margin-left="0px"
         data-margin-right="0px"><?php echo $logo; ?></div>
</a>
