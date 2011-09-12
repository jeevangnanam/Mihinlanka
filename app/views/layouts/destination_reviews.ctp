<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <?= $this->Html->charset(); ?>
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


        <?= $this->Html->meta('icon'); ?>

        <?= $this->Html->css("/css/style_simple.css"); ?>
        <?= $this->Html->css("/css/style_destination_reviews.css"); ?>
        <?= $this->Html->css("/js/jqueryUI/css/smoothness/jquery-ui-1.8.6.custom.css"); ?>
        <?= $this->Html->css("/css/main.css"); ?>
        

 

        <?= $this->Html->script("/js/jqueryUI/js/jquery-1.4.4.min.js"); ?>
        <?= $this->Html->script("/js/jquery.tinyscrollbar.min.js"); ?>
        <?= $this->Html->script("/js/jqueryUI/js/jquery-ui-1.8.10.custom.min.js"); ?>

        <?= $this->Html->script("/js/main.js"); ?>
        <?= $this->Html->script("/js/home.js"); ?>


        <?= $this->Html->script("/js/jquery.showFilter.js"); ?>

        <?= $this->Html->script("/js/defunkt-facebox-1b7b516/src/facebox.js"); ?>
        <?= $this->Html->css("/js/defunkt-facebox-1b7b516/src/facebox.css"); ?>




        <?= $this->Html->css("/js/Davist11_jQuery_Presentation_201fb8d/stylesheets/screen.css"); ?>

<!--Google fonts--> 
	<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:bold' rel='stylesheet' type='text/css'> 
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'> 
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> 
	<link href='http://fonts.googleapis.com/css?family=Sunshiney' rel='stylesheet' type='text/css'> 
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> 


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

        <?= $scripts_for_layout; ?>
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
        
        <script type="text/javascript">
		$(document).ready(function(){
			$('#content').tinyscrollbar();	
		});
	</script>
    </head>

    <body  style='maring:0px;padding:0px;'>
        <div id="main" style='margin:0px;padding:0px;'>
            
          
            
            
            <div id="content">
            	<div id="goBackToHome"><img src='/img/goback.png' /></div>
                
                <div class="scrollbar">
                	<div class="track">
                    	<div class="thumb">
                        	<div class="end"></div>
                        </div>
                    </div>
                </div>
                
		<div class="viewport">
			 <div class="overview">
                <?php echo $content_for_layout ?>
                </div>
         </div>
            </div>
            <div id="right">
            <?= $this->element("menu/review_places"); ?>
            </div>
            

     </div>
         
         
            <script type="text/javascript" src="/js/Davist11_jQuery_Presentation_201fb8d/scripts/jquery.presentation.js"></script>
            <script type="text/javascript" src="/js/Davist11_jQuery_Presentation_201fb8d/scripts/global.js"></script>


    </body>
</html>
