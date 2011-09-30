<html>
	<head>
    	<style>
		.image_pr{
			width:100px;
			height:100px;
			border:solid #CCC 2px;
			padding:2px;
			
		}
		/*.image_pr:hover {
			z-index:10000px;
		    width:150px;
			height:150px;
		}*/
		
		</style>
        <script type="text/javascript">
		/*function loadRealSize(obj){
			alert(obj);
		}*/
		
		</script>
    </head>
	<body>
		<div style="width:100%;">
			<div>
			<?php 
			//$dirname=ROOT .DS.  'vendors' . DS; APP.'webroot'.DS. 'img' . DS. 
			$dirname=APP.'webroot'.DS. 'img' . DS. 'dest_reviews' .DS .'places_for_shopping'.DS .'kuwait'.DS ;//;
			$dh= opendir($dirname); 
			$files=array(); 
			while (false !== ($entry= readdir($dh))) 
			{ 
					if ( $entry!= '..' && $entry!= '.') 
					{ 
						 $files[$entry]=$entry;
						 $s="/"; 
 echo $this->Html->image('dest_reviews' .$s.'places_for_shopping'.$s.'kuwait'.$s.$entry, 
 array('alt' => $entry,'class' => 'image_pr','rel' => 'lightbox'));//,'onclick'=>'loadRealSize(this)'
						
					} 
			} 

?> 	
		</div>
	</body>
</html>