<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


        <?= $html->meta('keywords', 'srilankan airlines,srilankan air,srilanka,srilankan airways,cheap airlines,cheap tickets,cheap flight ,cheap holidays ,Fly to srilanka,Srilankan flight, Cheap flights to srilanka,Srilankan,flights to colombo,flights to srilanka ', array('type' => 'keywords'), false); ?>
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
            $title_for_layout = "A low-cost srilankan airline based in Colombo, Sri Lanka.Fly to colombo,srilankan holidays , flights to colombo | flights to srilanka | fly to srilanka,Colombo,Dubai ,Gaya ,Tiruchirapalli ,Varanasi ,Kuwait ,Maldives ,Dhaka ,Jakarta ";
        }else{
        ?>
        <title><?php __('Mihinlanka - '); ?><?= $title_for_layout; ?></title>
		<?php }?>
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
            
            <?php echo $content_for_layout ?>
            
            </body>
            
            </html>