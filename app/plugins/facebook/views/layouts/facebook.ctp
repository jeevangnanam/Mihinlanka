<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mihinlanka.com</title>
      

        <?= $this->Html->css("/facebook/css/facebook"); ?>
  

  


        <?= $this->Html->script("../js/jqueryUI/js/jquery-1.4.4.min.js"); ?>
        <?= $this->Html->script("/js/jqueryUI/js/jquery-ui-1.8.10.custom.min.js"); ?>
        <?= $this->Html->css("/js/jqueryUI/css/smoothness/jquery-ui-1.8.6.custom.css"); ?>
        <script charset="utf-8" src="../js/main.js" type="text/javascript"></script>
        <script charset="utf-8" src="../js/home.js" type="text/javascript"></script>



        <?= $this->Html->script("/js/defunkt-facebox-1b7b516/src/facebox.js"); ?>
        <?= $this->Html->css("/js/defunkt-facebox-1b7b516/src/facebox.css"); ?>

        <script>

            $(function() {
                var availableTags = [<?= Configure::read('cities'); ?>];
                $( "#seldcity1" ).autocomplete({
                    source: availableTags
                });
                $( "#selacity1" ).autocomplete({
                    source: availableTags
                });
            });
        </script>

        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1619420-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

    </head>

    <body>

        <div id="main">

            <div style="clear:both"></div>

         
            <div id="homeContent">
                <?php echo $content_for_layout ?>
            </div>





            <div style="clear:both"></div>

            <!-- Footer -->
            <?= $this->element("footer/footer"); ?>

                    <!-- End Footer -->

                </div>





  
        <script type="text/javascript" src="/js/init.js"></script>

        <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({appId: '210615615621665', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());





</script>

    </body>
</html>
