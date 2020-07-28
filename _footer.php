

<?php ?>
<div class="d-flex flex-items-between footer container-lg my-5 px-0" role="contentinfo">
   <div class="col-lg-4 list-style-none mr-lg-5">
      <a title="Home page" class="d-none d-lg-flex footer-octicon footer-octicon no-underline" href="https://github.com">
         <div>
            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/oxfordsms-24.png" />
         </div>
         <div>
            <span class="f6 text-gray-light" style="margin-left:5px;">          &copy; 2020 OxfordSMS,S.A.        </span>
         </div>
      </a>
   </div>
   <div class="d-flex flex-justify-start flex-row flex-auto">
      <?php  if($this->countModules('footer')) : ?>
      <jdoc:include type="modules" name="footer" style="none" />
      <?php  endif; ?>
   </div>
</div>

