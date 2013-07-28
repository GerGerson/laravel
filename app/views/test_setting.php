<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
	<!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
	<script src="/js/jquery.js" type="text/javascript"></script>
	<script src="/js/bootstrap.js"></script>
	
	
</head>
<body>
	<div id="content"></div>
	

	
</body>
</html>



<script>
	jQuery(document).ready(function() {
		$.post('/GetTemplateSetting/' + <?=$t_id ?> , function(data){
			document.getElementById('content').innerHTML=data;
		});
		
		<?php 
		$str = "";
		$str2 = "";
		$count = 0;
		//foreach($mInfo as $mid){
		for ($i = 0; $i < count($mInfo); $i++){
			$str .= "$.post('". $mInfo[$i]->path ."', function(data){";
			$str.="	document.getElementById('". (string)$i ."').innerHTML=data;";
			$str.="});";
			
			/*$str2 .= "$.post('".$mid->path."/1', function(data){";
			$str2 .= "document.getElementById('div_".$count."').innerHTML=data;";
			$str2 .= "});";*/
		}
		echo $str;
		echo $str2;
		?>
	});
</script>
