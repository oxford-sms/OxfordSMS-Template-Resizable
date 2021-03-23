

<header class="Header py-md-0 js-details-container Details flex-wrap flex-md-nowrap px-3" role="banner" style="background-color:<?php echo ($this->params->get('topMenuBGColor')!="" ? $this->params->get('topMenuBGColor') : '#103157') ?> !important;">
   <!-- wide screen visible area -->
   <div class="Header-item d-none d-md-flex">
      <?php include('_wp_logo.php'); ?>
      <?php //include('__breadcrumbs.php'); ?>
   </div>
   <!-- Thee bars button -->
   <div class="Header-item d-md-none">
      <button class="Header-link btn-link js-details-target" type="button" aria-label="Toggle navigation" aria-expanded="false">
         <svg height="24" class="octicon octicon-three-bars" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true">
            <path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 2.75zm0 5A.75.75 0 011.75 7h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 7.75zM1.75 12a.75.75 0 100 1.5h12.5a.75.75 0 100-1.5H1.75z"></path>
         </svg>
      </button>
   </div>
   <?php include('__header_foldable_bar.php'); ?>
   <!-- mobile screen visible area -->
   <div class="Header-item Header-item--full flex-justify-center d-md-none position-relative">
      <!-- Website Name -->
      <?php $user = JFactory::getUser();	if($user->id!=0):	?>
      <a class="Header-link" href="/dashboard"><img class="avatar avatar-user" src="<?php echo $avatar_image; ?>" width="20" height="20" alt="<?php echo $user->username; ?>" /> <?php $config = JFactory::getConfig(); echo $config->get( 'sitename' );  ?></a>
      <?php else: ?>
      <a class="Header-link" href="/dashboard"><?php $config = JFactory::getConfig(); echo $config->get( 'sitename' );  ?></a>
      <?php endif; ?>
   </div>
   <?php include('__messages.php'); ?>
   <?php //include('_addnew.php'); ?>
   <?php include('_avatar.php'); ?>
</header>

