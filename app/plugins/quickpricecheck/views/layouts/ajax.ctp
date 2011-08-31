<html>

    <head>
        <link rel="stylesheet" href="/css/mega.css" />
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/css/main.css" />

        <?= $this->Html->script("/js/jqueryUI/js/jquery-1.4.4.min.js"); ?>
        <?= $this->Html->script("/js/jqueryUI/js/jquery-ui-1.8.10.custom.min.js"); ?>
        <style>
            body{
                width:600px;
background-color:#ffffff;
}
        </style>
        <script>
            $(document).ready(function() {


                $("#searchPrice").click(function(){

                    if($("#returnTrip").attr('checked')){
                        isReturn = 'yes';
                    }else{
                        isReturn = 'no';
                    }
                    $.ajax({
                        type: "POST",
                        url: "/lowfair_searches/search",
                        data: "from="+$("#from").val()+"&to="+$("#to").val()+"&returnTrip="+isReturn,
                        success: function(html){
                            $("#res").html(html);
                        }
                    });

                });
            });</script>

        <style>
            #wrapper{

            
                
                border:none;
                background-image:url(/img/select_back.png);background-repeat:  no-repeat;width:170px;height:49px;
            margin-left:5px;
}
select{border:none;background-color:  #006699;font-size:16px;font-weight: bold;color: #ffffff;width:165px;text-shadow:  #000000 1px 1px 1px;}
option{padding:4px;border:none;border-bottom: dotted 1px green;color:black;text-shadow:  #000000 0px 0px 0px;background-color:  #ffffff;}
        </style>
    </head>
    <body>
        <div id="content" style="padding:5px;" >
            <?php echo $content_for_layout ?>
        </div>

    </body>
</html>



