<style>
/*
#footer{margin-top:0px}
.footerMenu {padding-top:15px;}
*/
</style>
<div id="footer">
	<div id="footerInner">
       <a href="http://www.topcoder.com/" class="topcoderLogoMed"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/i/tcLogoSmall.png" alt="" /></a>
	  <?php wp_nav_menu( 
        array(
          'container' => false,
          'theme_location' => '',
          'menu_class' => 'footerMenu',
          'menu' => 'bottom'
        ) 
      ); ?>
    </div>
  </div>
</div>
</div>
<div class="modalWrapper"></div>
<!-- Modal Box -->
<div id="modalBox" class="videoModal modalwindow"> <a href="javascript:;" id="closeModal"></a>
  <div class="modalContentBox">
    <div class="header">NASA ISS Longeron Challenge Introduction</div>
    <div class="videoContent">
    <iframe width="600" height="355" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>

	<div class="gameModal modalwindow">
		<iframe frameBorder="0" src="" width="600" height="550" frameborder="0" allowfullscreen></iframe>
		<div class="btnShareWrapper">		
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<div class="fb-share-button" data-href="http://www.topcoder.com/asteroids/" data-width="100" data-type="button"></div>
			    <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>

		</div>
			
	</div>  
	
<!-- Modal Box End -->
</body>
<?php 
    wp_footer();
  ?>
</html>