<!DOCTYPE html>
<html>
<head>
  <style>

</style>
 
</head>
<body>
  <button id="go">&raquo; Run</button>


<script>

/* Using multiple unit types within one animation. */

$("#go").click(function(){
  $("#block").animate({
    width: "220",
    opacity: 0.4,
  
    fontSize: "3em"
    
  }, 1500 );
});

$("#hide").click(function(){
    $("#block").animate({
    width: "1%"


},1500);
});
</script>

</body>
</html>