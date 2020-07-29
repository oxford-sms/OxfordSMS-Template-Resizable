<header class="Header py-md-0 js-details-container Details flex-wrap flex-md-nowrap px-3" role="banner">
	<!-- wide screen visible area -->
	<div class="Header-item d-none d-md-flex">

<?php /*    
<!-- GihHub Logo -->
    <a class="Header-link" href="https://github.com/" data-hotkey="g d"
  aria-label="Homepage " data-ga-click="Header, go to dashboard, icon:logo">a
  <svg class="octicon octicon-mark-github v-align-middle" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
</a> */
?>
<a class="Header-link" href="/dashboard"><?php $config = JFactory::getConfig(); echo $config->get( 'sitename' );  ?></a>


<?php //include('__breadcrumbs.php'); ?>

	</div>

	<!-- Thee bars button -->
  <div class="Header-item d-md-none">
    <button class="Header-link btn-link js-details-target" type="button" aria-label="Toggle navigation" aria-expanded="false">
      <svg height="24" class="octicon octicon-three-bars" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true"><path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 2.75zm0 5A.75.75 0 011.75 7h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 7.75zM1.75 12a.75.75 0 100 1.5h12.5a.75.75 0 100-1.5H1.75z"></path></svg>
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

  
<?php //include('_messages.php'); ?>

  

  <?php //include('_addnew.php'); ?>
    
  
<?php include('_avatar.php'); ?>
  

</header>

