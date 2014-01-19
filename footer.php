
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-3">
              <h3><a href="#">About Us</a></h3>
                <ul class="list-unstyled">
                  <li><a href="#">Our Board and Committees </a></li>
                  <li><a href="#">Advocacy and Support </a></li>
                  <li><a href="#">Indigenous Australians </a></li>
                  <li><a href="#">Annual Reports </a></li>
                  <li><a href="#">IDF Life for a Child </a></li>
                  <li><a href="#">NDSS </a></li>
                  <li><a href="#">Careers </a></li>
                  <li><a href="#">Contact Us </a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-3">
              <h3><a href="#">Support Us</a></h3>
                <ul class="list-unstyled">
                  <li><a href="#">Donate </a></li>
                  <li><a href="#">Leave a Bequest </a></li>
                  <li><a href="#">Give a gift in Memory </a></li>
                  <li><a href="#">Fundraise for Us </a></li>
                  <li><a href="#">Give a Regular Gift </a></li>
                  <li><a href="#">Become a Sponsor </a></li>
                  <li><a href="#">Volunteer</a></li>
                  <li><a href="#">Membership </a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-3">
              <h3><a href="#">Events</a></h3>
                <ul class="list-unstyled">
                  <li><a href="#">Kellion Award </a></li>
                  <li><a href="#">Sir Kempson Maddox Award </a></li>
                  <li><a href="#">Diabetes Awareness Week </a></li>
                  <li><a href="#">Buzz Day </a></li>
                  <li><a href="#">World Diabetes Day </a></li>
                  <li><a href="#">75th Year Anniversary </a></li>
                  <li><a href="#">Buzz Ball </a></li>
                  <li><a href="#">Sustainable Populations Forum </a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-3">
              <h3><a href="#">Our Websites</a></h3>
                <ul class="list-unstyled">
                  <li><a href="#">Vitality Workplace Health </a></li>
                  <li><a href="#">Diabetes Kids and Teens </a></li>
                  <li><a href="#">Beat IT </a></li>
                  <li><a href="#">Diabetes Knowledge Centre </a></li>
                 
                </ul>
            </div>

            <div class="col-md-4 col-sm-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/asharedvoice.png">
                 
            </div>
          </div>

          
          <div>
                <ul class="list-inline">
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Linkedin</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Youtube </a></li>
                  <li><a href="#">Soundcloud </a></li>
                  <li><a href="#">Google +</a></li>
                  <li><a href="#">Pinterest </a></li>
                  <li><a href="<?php bloginfo('rss2_url'); ?>">Latest Stories RSS</a></li>
                  <li><a href="<?php comments_rss_link('comment feed'); ?>">Comments RSS</a></li>
                </ul>
            </div>


          <hr>

          <p class="list-inline pull-left">&copy; 2014, <?php bloginfo('name'); ?>. All rights reserved. ABN 84 001 363 766 - CFN 12458.</p>
          <ul class="list-inline pull-right">
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>


        </div>

      </footer>
    </div> <!-- /container -->        







    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.1.min.js"><\/script>')</script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jbootstrap.min.js"><\/script>')</script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

        <!-- New Menu July 2013 -->
<script>
    jQuery(document).ready(function() {
        var navToggle = jQuery('.menu'),
          navWrap = jQuery('.main-nav-wrap'),
          header = jQuery('#header'),
          headerWrap = jQuery('.header-wrap'),
          winWidth = jQuery(window).outerWidth(),
          search = jQuery('.search'),
          navToggleWrap = jQuery('.main-nav-toggle');

        navToggle.on('click', function() {
          navWrap.toggleClass('show');
          header.toggleClass('nav-active');
        });

        if ( winWidth <= 680 ) {
          navWrap.after(search);
        } else {
          navToggleWrap.before(search);
        }
    });

    jQuery(window).resize(function() {
        var winWidth = jQuery(window).outerWidth(),
          mainNavWrap = jQuery('.main-nav-wrap'),
          header = jQuery('#header'),
          headerWrap = jQuery('.header-wrap'),
          search = jQuery('.search'),
          navToggle = jQuery('.main-nav-toggle');

        if ( winWidth <= 680 ) {
          mainNavWrap.removeClass('show');
          header.removeClass('nav-active');
          mainNavWrap.after(search);
        } else {
          navToggle.before(search);
          mainNavWrap.removeClass('show');
          header.removeClass('nav-active');
        }
    });
</script>
  <script>
// clicking submit button
jQuery('#search-button').click(function() {
  window.location='http://www.australiandiabetescouncil.com/search-results?q=' + this.form.q.value
});
// click search icon
jQuery('.search-icon').click(function() {
  window.location='http://www.australiandiabetescouncil.com/search-results?q=' + $(this).siblings('#q').val();
});
// Presing enter when in input
jQuery(document).keypress(function(e) {
    if(e.which == 13) {
        e.preventDefault();
        window.location='http://www.australiandiabetescouncil.com/search-results?q=' + $('#q').val();
    }
});
</script>
  <!-- END New Menu July 2013 -->

</body>
</html>
