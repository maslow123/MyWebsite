<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>contoh slick</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../assets/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="../assets/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/slick-animation.css">
</head>
<body bgcolor="#ffd">
	 <section class="regular slider">
    <div>
      <img style="height:200px;"src="../assets/images/q1.png">
    </div>
    <div>
      <img src="../assets/images/q2.png">
    </div>
    <div>
      <img src="../assets/images/instagram.jpg">
    </div>
    <div>
      <img src="../assets/images/twitter.png">
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