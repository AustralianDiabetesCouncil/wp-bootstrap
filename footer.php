<!-- Email Subscribe Offer Start --> 

<a name="footerlink"></a>

<div class="jumbotron">
  <div class="container">
    <h1>Hear it First!</h1>
    <p>Get on our mailing list to get the latest news</p>
    <div class="input-group input-group-lg col-sm-6">
        <input type="text" class="form-control">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Subscribe</button>
        </span>
      </div>
  </div>
</div>


<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <h3>More</h3>
        <ul class="list-unstyled ">
          <li><a href="#">About Us </a></li>
          <li><a href="#">Events and Awards</a></li>
          <li><a href="#">Media </a></li>
          <li><a href="#">News </a></li>
          <li><a href="#">NDSS </a></li>
          <li><a href="#">Volunteer</a></li>
          <li><a href="#">Fundraising</a></li>
          <li><a href="#">Health Professionals</a></li>
          <li><a href="#">Careers </a></li>
          <li><a href="#">Contact Us</a></li>          
        </ul>
      </div>
      
      <div class="col-md-3 col-sm-6">
      <h3>Follow Us</h3>
        <ul class="list-unstyled ">
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

      <div class="col-md-3 col-sm-6">
      <h3>Other Websites</h3>
        <ul class="list-unstyled">
          <li><a href="#">Vitality Workplace Health </a></li>
          <li><a href="#">Diabetes Kids and Teens </a></li>
          <li><a href="#">Beat IT </a></li>
          <li><a href="#">Diabetes Knowledge Centre </a></li>         
        </ul>
      </div>

      <div class="col-md-3 col-sm-6">
        <img src="<?php echo get_template_directory_uri(); ?>/img/asharedvoice.png">
      </div>
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

    <!-- jquery.adaptive-backgrounds.js  https://github.com/briangonzalez/jquery.adaptive-backgrounds.js -->
    <script type="text/javascript" src='<?php echo get_template_directory_uri(); ?>/js/jquery.adaptive-backgrounds.js'></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        $.adaptiveBackground.run({
          normalizeTextColor: true
        })
      });
      </script>
    <!-- jquery.adaptive-backgrounds.js End-->


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
