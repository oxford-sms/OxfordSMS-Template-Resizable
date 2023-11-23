<?php
/**
 * OxfordSMS - Template - Messages
 * @author Ivan Komlev
 * @copyright Copyright (C) 2020 Ivan Komlev. All rights reserved.
 * @license GNU/GPL
 */

//This loader also prevents douple queries
// no direct access
defined('_JEXEC') or die('Restricted access');

$messages_file = JPATH_SITE . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_oxfordsmsmessaging' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'dashboard.php';

if (isset($variables->real_userid) and $variables->real_userid != 0 and file_exists($messages_file)):

	$link = '/index.php/my-messages?userid=' . $variables->real_userid;

	if ($variables->unread_messages == 0)
		$msg = 'You have no unread messages';
	else
		$msg = 'You have ' . $variables->unread_messages . ' unread message' . ($variables->unread_messages == 1 ? '' : 's');


	?>


    <div class="Header-item mr-0 mr-md-3 flex-order-1 flex-md-order-none">

        <a aria-label="<?php echo $msg; ?>"
           class="Header-link notification-indicator position-relative tooltipped tooltipped-sw js-socket-channel js-notification-indicator"
           href="<?php echo $link; ?>">
            <span class="js-indicator-modifier mail-status <?php echo($variables->unread_messages > 0 ? 'unread' : '') ?>"></span>
            <svg class="octicon octicon-bell" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                 aria-hidden="true">
                <path d="M8 16a2 2 0 001.985-1.75c.017-.137-.097-.25-.235-.25h-3.5c-.138 0-.252.113-.235.25A2 2 0 008 16z"></path>
                <path fill-rule="evenodd"
                      d="M8 1.5A3.5 3.5 0 004.5 5v2.947c0 .346-.102.683-.294.97l-1.703 2.556a.018.018 0 00-.003.01l.001.006c0 .002.002.004.004.006a.017.017 0 00.006.004l.007.001h10.964l.007-.001a.016.016 0 00.006-.004.016.016 0 00.004-.006l.001-.007a.017.017 0 00-.003-.01l-1.703-2.554a1.75 1.75 0 01-.294-.97V5A3.5 3.5 0 008 1.5zM3 5a5 5 0 0110 0v2.947c0 .05.015.098.042.139l1.703 2.555A1.518 1.518 0 0113.482 13H2.518a1.518 1.518 0 01-1.263-2.36l1.703-2.554A.25.25 0 003 7.947V5z"></path>
            </svg>
        </a>
    </div>

<?php
endif;
?>
