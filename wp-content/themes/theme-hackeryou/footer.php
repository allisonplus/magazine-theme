<footer>
  <div class="container containerFooter clearfix">


  <div class="footer-nav">

	  <div class="footerInfo clearfix">
	 
		<h5>Our Company</h5>
	
	        <?php wp_nav_menu( array(
	          'container' => false,
	          'menu' => 'footer-main'

	        )); ?>
	  </div>
	  <!-- footer info -->
	  <div class="footerInfo clearfix">

	  	<h5>Follow Us</h5>
         <?php wp_nav_menu(array(
           'container' => false,
           'menu'=>'footer-social'
           )); ?>
      </div>
      <!-- footerInfo -->

      <div class="footerInfo clearfix">
		  <h5>Visit Us</h5>
		  	<p>483 Queen St. West</p>
		  	<p>Toronto, On</p>
		  	<p>M5V 2A9</p>
		</div>
		<!-- footerinfo -->
	<div class="footerInfo clearfix">
  <h5>Contact Us</h5>
	  <p><a href="hello@nailedit.com">hello@nailedit.com</a></p>
	  <p><a href="tel:1416888888"></a>416-888-8888</p>
  </div>
  <!-- footerInfo -->
      </div> 
      <!-- footer-nav -->
<div class="copyright">
    <p>&copy; AlliSarah '<?php echo date('y'); ?></p>
</div>
<!-- end copyright -->

</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>