
  
    <footer class="footer" role="contentinfo">
        <div class="row">
            <a class="logo" href="/">
                <!-- Place Logo Here -->
            </a>
            <nav class="footer-nav">
                <?php wp_nav_menu( array('theme_location' => 'footer_nav', 'container' => '') ); ?>
            </nav>
        </div><!-- .row -->
    </footer>



    <?php wp_footer(); ?>

    <?php /* :::::::::: DHX analytics :::::::::: */ ?>
    <!--
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-74863938-1', 'auto');
      ga('send', 'pageview');
    </script>
    -->

  </body>
</html>
