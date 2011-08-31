<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


        <?= $html->meta('keywords', 'Fly to srilanka,Srilankan flight, Cheap flights to srilanka,', array('type' => 'keywords'), false); ?>
        <?= $html->meta('description', 'Mihin Lanka (Pvt.) Limited is a low-cost airline based in Colombo, Sri Lanka.Its main focus is providing low cost flights from Colombo to a number of cities in India and the Gulf States. Mihin Lanka uses Colombo Bandaranaike International Airport as its hub.', array('type' => 'description'), false); ?>
        <?= $html->meta(array('name' => 'Author', 'content' => 'Cheran krishnamoorthy')); ?>
        <?= $html->meta(array('name' => 'Publisher', 'content' => 'Loops Solutions Pvt Ltd.')); ?>
        <?= $html->meta(array('name' => 'Copyright', 'content' => '© Copyright 2011, Loops Solutions pvt ltd.')); ?>
        <?= $html->meta(array('name' => 'Revisit-After', 'content' => '2 days')); ?>
        <?= $html->meta(array('HTTP-EQUIV' => 'Expires', 'content' => 'none')); ?>
        <?= $html->meta(array('name' => 'Pagetopic', 'content' => 'Travel')); ?>
        <?= $html->meta(array('name' => 'Pagetype', 'content' => 'Instruction')); ?>
        <?= $html->meta(array('name' => 'Audience', 'content' => 'All')); ?>
        <?= $html->meta(array('name' => 'Robots', 'content' => 'INDEX,FOLLOW')); ?>
        <?= $html->meta(array('name' => 'Content-Languag', 'content' => 'English')); ?>



        <?
        if (!isset($title_for_layout)) {
            $title_for_layout = "A low-cost airline based in Colombo, Sri Lanka";
        }
        ?>
        <title><?php __('Mihinlanka!! '); ?><?= $title_for_layout; ?></title>

        


        <? if (isset($language) and !empty($language) and $language != 'eng'): ?>
            <link href="/css/language-<?= $language; ?>.css" rel="stylesheet" type="text/css" />
            <link href="/css/style-<?= $language; ?>.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="../css/main-<?= $language; ?>.css" />


          
        <? else: ?>

                <link rel="stylesheet" href="/css/mega.css" />
                <link href="/css/style.css" rel="stylesheet" type="text/css" />
                <link rel="stylesheet" href="/css/main.css" />


        <? endif; ?>
                <link rel="stylesheet" href="/css/sideslider.css" />


        <?= $this->Html->script("../js/jqueryUI/js/jquery-1.4.4.min.js"); ?>
        <?= $this->Html->script("/js/jqueryUI/js/jquery-ui-1.8.10.custom.min.js"); ?>
        <?= $this->Html->css("/js/jqueryUI/css/smoothness/jquery-ui-1.8.6.custom.css"); ?>
                <script charset="utf-8" src="../js/main.js" type="text/javascript"></script>
                <script charset="utf-8" src="../js/home.js" type="text/javascript"></script>

                <script type="text/javascript" src="/js/slider.js"></script>


                <script type="text/javascript" src="/js/mega.js"></script>
                <script type="text/javascript" src="/js/mega2.js"></script>
                <script type="text/javascript" src="/js/sideslider.js"></script>

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
                    <div id="header">
                        <div id="logo" ><img src="/img/logo/logo.gif" /></div>
                <?= $this->element('body/language'); ?>
            </div>
            <div style="clear:both"></div>

            <div id="menu">
                <?= $this->element('menu/menu'); ?>
            </div>
            <div id="homeContent">
                <?php echo $content_for_layout ?>
            </div>


            <div id="quickLinks">
                <div id="quickLinksOpenCloseDiv">
                    <img  src="/img/quick_links.png" id="quickLinksOpenCloseDivIcon"/>
                </div>
                <div id="quickLinksContent">
                    <?= $this->element('menu/quicklinks'); ?>
                </div>
            </div>




            <div style="clear:both"></div>

            <!-- Footer -->
            <?= $this->element("footer/footer"); ?>

                    <!-- End Footer -->

                </div>





        <?= $this->element("footer/wimbia"); ?>
                    <script type="text/javascript" src="/js/init.js"></script>
                </body>
            </html>
<?php echo $this->element('sql_dump'); ?>