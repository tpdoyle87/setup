<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="marketing-site-footer">
  <div class="grid-x medium-unstack">
    <div class="medium-6 cell first-section">
      <h4 class="marketing-site-footer-name">Through the Darkness</h4>
      <p>A collection of experiences, both good and bad, as one man tells about his battle with depression</p>
      <ul class="menu marketing-site-footer-menu-social simple flex-container align-spaced align-middle social-icons">
        <li><a href="http://www.youtube.com"><i class="fab fa-youtube-square fa-2x" aria-hidden="true"></i></a></li>
         <li><a href="http://www.facebook.com"><i class="fab fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
         <li><a href="http://www.twitter.com""><i class="fab fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    <div class="medium-6 cell grid-x align-center">
      <div>
        <h4 class="marketing-site-footer-title">Contact Info</h4>
        <div class="marketing-site-footer-block">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <p>100 W Rincon<br>San Francisco, CA 94015</p>
        </div>
        <div class="marketing-site-footer-block">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <p>1 (800) 555-5555</p>
        </div>
        <div class="marketing-site-footer-block">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <p>antklob@darkness.com</p>
        </div>
      </div>
    </div>
  </div>
  <div class="marketing-site-footer-bottom ">
    <div class="flex-container align-center-middle">
        <p>&copy; <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<?php
// don't track admins or editors and google analytics option is filled in
if ( ! current_user_can( 'edit_pages' ) && get_option( 'client_google_analytics' ) ) :
    $analytics_id = get_option( 'client_google_analytics' ); ?>

    <!-- Google Universal Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', '<?php echo $analytics_id; ?>', 'auto');ga('send', 'pageview');
    </script>
<?php endif; ?>

</body>
</html>
