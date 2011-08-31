<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mihinlanka.com</title>


        <?= $this->Html->css("/admin/css/admin"); ?>
        <?= $this->Html->css("/admin/css/custom"); ?>
        <?= $this->Html->css("/admin/css/mega.css"); ?>




        <?= $this->Html->script("../js/jqueryUI/js/jquery-1.4.4.min.js"); ?>
        <?= $this->Html->script("/js/jqueryUI/js/jquery-ui-1.8.10.custom.min.js"); ?>
        <?= $this->Html->css("/js/jqueryUI/css/smoothness/jquery-ui-1.8.6.custom.css"); ?>
        <script charset="utf-8" src="../js/main.js" type="text/javascript"></script>
        <script charset="utf-8" src="../js/home.js" type="text/javascript"></script>
        <?= $this->Html->script("/js/jquery.showFilter.js"); ?>


        <?= $this->Html->script("../js/mega.js"); ?>
        <?= $this->Html->script("/js/mega2.js"); ?>
        <?= $this->Html->script("/js/defunkt-facebox-1b7b516/src/facebox.js"); ?>
        <?= $this->Html->css("/js/defunkt-facebox-1b7b516/src/facebox.css"); ?>


        <?= $this->Html->css("/js/colorpicker/css/colorpicker.css"); ?>
        <?= $this->Html->script("/js/colorpicker/js/colorpicker.js"); ?>
        
        <?= $this->Html->script("/js/slider.js"); ?>

        <script>

            $(function() {
                var availableTags = [<?= Configure::read('cities'); ?>];
                $( "#seldcity1" ).autocomplete({
                    source: availableTags
                });
                $( "#selacity1" ).autocomplete({
                    source: availableTags
                });

                $('#color').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val("#"+hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor("#"+this.value);
	}
})
.bind('keyup', function(){
	$(this).ColorPickerSetColor(this.value);
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

    <body style="background-image:url(/admin/img/blue035.jpg);background-repeat: repeat">
        
       
          <div id="main">
                    <div id="header">
                        <div id="adminLogo" style="float:left;"><img src="http://www.mihinlanka.com/img/logo/logo.gif" /></div>
                        <div style="float:right;margin-top:15px;">
                <?= $this->element('body/language'); ?>&nbsp;<span style="color:gray;font-size:10px"><?=ucfirst($language);?>&nbsp;</span>
                        </div>
            </div>
            <div style="clear:both"></div>
     
        <div id="menu">
            <?= $this->element('menu/menu'); ?>
        </div>
            <div style="clear:both;height:50px;width:200px"></div>


            <div id="homeContent">
                <?php echo $content_for_layout ?>
            </div>

          </div>
            <script type="text/javascript" src="/js/init.js"></script>

    </body>

</html>
<?php echo $this->element('sql_dump'); ?>