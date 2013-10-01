<div class="zurb-footer-top">
  <div class="row property">
    <div class="large-4 columns">
    	<div class="property-info">
        <h3><a href="#">Ink</a></h3>
        <p>Ink is made by <a href="http://zurb.com">ZURB</a>, a product design company in Campbell, California. We've put more than 15 years of experience building web products, services and websites into this framework.</p>
    	</div>
    </div>
    
    <div class="large-8 columns">
      <div class="row collapse">
	      <div class="large-4 columns hide-for-small">
		      <div class="learn-links">
		        <h4>Want more?</h4>
		        <ul>
		          <li><a href="http://zurb.com/expo/courses">Training</a></li>
		          <li><a href="http://zurb.com/responsive">Responsive</a></li>
		          <li><a href="http://zurb.com/services/our-work">Our Work</a></li>
		          <li><a href="http://zurb.com/apps">ZURB Apps</a></li>
		        </ul>
		      </div>
		  </div>
	      <div class="large-4 columns">
		      <div class="support-links">
		          <h4>Talk to us</h4>
		          <p><a href="http://twitter.com/inkzurb">@inkzurb</a></p>
		          <p>Not a big talker? Email us at <a href="http://zurb.com/contact">ink@zurb.com</a></p>
		      </div>
	      </div>
		  <div class="large-4 columns">
	        <div class="connect-links">
	          <h4>Stay in touch</h4>
	          <p>Get monthly updates from ZURB in your inbox. Read our <a href="http://zurb.com/news">latest news &amp; buzz.</a></p>
	          <a href="#" class="small button">Get ZURBnews!</a>         
	        </div>
	      </div>
      </div> 
    </div>
  </div>
  <div class="row global">
    <div class="large-3 small-6 columns">
      <a href="http://zurb.com/services" class="footer-link-block services">
        <span class="title">Studios</span>
        <span>Helping more than 200 startups succeed since 1998.</span>
      </a>
    </div>
    <div class="large-3 small-6 columns">
      <a href="http://foundation.zurb.com/" class="footer-link-block foundation">
        <span class="title">Foundation</span>
        <span>The most advanced front-end framework in the world.</span>
      </a>
    </div>
    <div class="large-3 small-6 columns">
      <a href="http://zurb.com/apps" class="footer-link-block apps">
        <span class="title">Products</span>
        <span>Prototype, iterate and collect feedback on your products.</span>
      </a>
    </div>
    <div class="large-3 small-6 columns">
      <a href="http://zurb.com/expo" class="footer-link-block expo">
        <span class="title">Expo</span>
        <span>Ideas, thoughts and design resources shared with you.</span>
      </a>
  </div>
  </div>
</div>
<div class="zurb-footer-bottom">
  <div class="row">
    <div class="large-4 push-8 columns">
      <ul class="home-social">
          <li><a href="http://www.twitter.com/ZURB" class="twitter"></a></li>
          <li><a href="http://www.facebook.com/ZURB" class="facebook"></a></li>
          <li><a href="http://zurb.com/contact" class="mail"></a></li>
        </ul>
     </div>
     <div class="large-8 pull-4 columns">
        <a href="http://www.zurb.com" class="zurb-logo regular"></a>
        <ul class="zurb-links">
          <li><a href="http://zurb.com/about">About</a></li>
          <li><a href="http://zurb.com/blog">Blog</a></li>
          <li><a href="http://zurb.com/news">News<span class="show-for-medium-up"> &amp; Events</span></a></li>
          <li><a href="http://zurb.com/contact">Contact</a></li>
          <li><a href="http://zurb.com/sitemap">Sitemap</a></li>
       </ul>
       <p class="copyright">&copy; 1998&ndash;2013 ZURB, Inc. All rights reserved.</p>
    </div>          
  </div>
</div>





  <script src="javascripts/vendor/jquery.js"></script>

  <script src="javascripts/foundation/foundation.js"></script>
	<script src="javascripts/foundation/foundation.abide.js"></script>
	<script src="javascripts/foundation/foundation.alerts.js"></script>
	<script src="javascripts/foundation/foundation.clearing.js"></script>
	<script src="javascripts/foundation/foundation.cookie.js"></script>
	<script src="javascripts/foundation/foundation.dropdown.js"></script>
	<script src="javascripts/foundation/foundation.forms.js"></script>
	<script src="javascripts/foundation/foundation.interchange.js"></script>
  <script src="javascripts/foundation/foundation.joyride.js"></script>
	<script src="javascripts/foundation/foundation.magellan.js"></script>
	<script src="javascripts/foundation/foundation.orbit.js"></script>
	<script src="javascripts/foundation/foundation.placeholder.js"></script>
	<script src="javascripts/foundation/foundation.reveal.js"></script>
	<script src="javascripts/foundation/foundation.section.js"></script>
	<script src="javascripts/foundation/foundation.tooltips.js"></script>
	<script src="javascripts/foundation/foundation.topbar.js"></script>
		<script src="javascripts/foundation/jquery.offcanvas.js"></script>
	
  
  <script>
    $(document).foundation();
    $(document).ready(function(){
      $('.doc-nav a').click(function(e){
        e.preventDefault();
        var target = $(this).attr('href');
        var offset = $(target).offset().top;
        $('html, body').animate({
          scrollTop : offset
        }, Math.sqrt(offset)*15);
      });
      $('.inky').addClass('loaded'
    });
  </script>

<?php include 'includes/_offcanvas-menu.php' ?>
