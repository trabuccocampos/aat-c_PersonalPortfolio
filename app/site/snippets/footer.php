  <footer role="contentinfo">
    <?php echo kirbytext($site->copyright()) ?>
  </footer>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-60155462-2', 'auto');
    ga('send', 'pageview');
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <?php echo js('assets/scripts/build/main.min.js') ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/layzr.js/1.4.3/layzr.min.js"></script>
  <script type="text/javascript">
      var layzr = new Layzr({
       callback: function() {
        this.classList.add('fades');
       }
     });
  </script>
</body>
</html>
