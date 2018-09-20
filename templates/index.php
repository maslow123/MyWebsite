<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
	<meta charset="UTF-8">
	<style>
		.parallax-content{
			background-image:url('../assets/images/content.jpg');
			background-attachment:fixed;
			background-size: 1260px;
			width:1260px;
			height: 800px;
			margin-top:-15px;
			font-family:"Lucida Grande","Verdana","Sans-serif";
		}
		.parallax-content h3{
			background-color:#fff;
			margin:40px;
			font-size:26px;
			color:#4F5155;
			text-align: center;
		}
		.hr{
			width:50%; 
			border:2px solid grey; 
			margin-top:0px;
			background:transparent;
		}
		.content, .content2, .content3 {
			background:#fff;
			box-shadow: 1px 0px 1px 2px #c0c0c0 ;
			border-radius:10px;
			text-align:left;
			border:1px solid #fff;
			padding:10px;
			height:300px;
			margin-left:170px;
			font-family:"Lucida Grande","Verdana","Sans-serif";
			font-size:14px;
			font-weight:bold;
			color:#4F5155;		}
		.content2{
			margin:0 0 0 100px;
		}
		.content3{
			margin:50px 0 0 430px;
		}
		.hr-content{
			width:250px;
			border:1px solid black;
			margin-right:1000px;
		}
		p{
			font-weight:normal;
		}
	</style>
</head>
<body>
	<?php include 'slick.php'?>
	<hr class="hr">
	<section class="parallax-content">
		<h3>My biography<hr></h3>
		<hr class="hr" style="margin-top:-35px;">
		<div class="col-md-4 col-xs-2 content">
			2011 : Mulai mengenal komputer<hr class="hr-content">
			<p>Pada tahun 2011 saya mulai mengenal komputer ketika saya hendak bermain
				game online di Warung Internet(Warnet)</p>
		</div>
		<div class="col-md-4 col-xs-2 content content2">
			2016 : Mulai tertarik dengan programming<hr class="hr-content">
			<p>Ketika saya masuk SMK dengan jurusan Komputer , saya mulai mengenali
			   apa itu bahasa pemrograman , sehingga saya tertarik dengan bahasa pemrograman
			Website yaitu HTML,CSS,dan PHP</p>
		</div><br/>
		<div class="col-md-4 col-xs-2 content content3">
			2018 : Mulai memahami dengan bahasa pemrograman<hr class="hr-content">
			<p>Tahun 2018 saya baru dapat mengerti bagaimana konsep pemrograman dalam pembuatan
			   sebuah aplikasi khususnya website.</p> 
		</div>
	</section>
	<?php include 'footer.php'?>
</body>
</html>