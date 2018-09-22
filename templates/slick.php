<!DOCTYPE html>
<html>
<head>
	<title>contoh slick</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="../assets/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/slick-animation.css">
	<style>
		.parallax{
	   width:auto;
     height:450px;
	 	 background-image:url('../assets/images/parallax1.jpg');
	 	 background-attachment: fixed;
	 	 background-size:1300px;
	 	 margin-top:-150px;
 		}
 		.welcome{
 			font-family: 'Pacifico',cursive,sans-serif;
 			text-align:center;
 			color :#5F9EA0;
 			font-weight:lighter;
 			font-size:21px;
 			padding:30px;
 		}
 	</style>
</head>
<body>
	<?php include 'header.php'?>
	<section class="parallax">
	 		<section class="regular slider">
    			<div>
      				<img src="../assets/images/kakashi.png">
    			</div>
    			<div>
      				<img src="../assets/images/es.png" height=230px>
    			</div>
    			<div>
      				<img src="../assets/images/izumi.png" height=230px>
    			</div>
    			<div>
    	  			<img src="../assets/images/ripper.png">
	    		</div>
  			</section>
  			<div class="welcome">
  				<h1>Welcome to our website</h1>
  			</div>
  	</section>
  	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  	<script src="../assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  	<script type="text/javascript">
  	$(document).on('ready',function(){
  		$(".regular").slick({  // 8
        dots: true,
        infinite: true,
        slidesToShow:3,
        slidesToScroll:1,
        autoplay:true,
        autoplaySpeed:2000,
      });
  	});
  	</script>
</body>
</html>
</html>