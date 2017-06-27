<?php include_once('apps/core.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta name="google-site-verification" content="bqXg8eOSJlufegBoF2in4AZ94cabWxqvEFkHd1LVukg" />
	<meta name="keywords" content="Creative EDGE Limited, Web design, Web development, Graphics, CAD, 3D Max, Landing Pages, IT Trainning, Wordpress, PHP Framework, Web Services, Online Outsourcing, Trainning "/>
	<meta name="description" content="Creative EDGE Limited is the leading web service company. We develope HTML Template, Landing page, Web Application, E-commerce Solutions, Email Template and other web and grphic services."/>
	<meta property="og:title" content="<?php echo "$apps_name | $developers";?>"/>
	<meta property="og:site_name" content="Creative EDGE Limited"/>
	<meta property="og:description" content="Creative EDGE Limited is the leading web service company. We develope HTML Template, Landing page, Web Application, E-commerce Solutions, Email Template and other web and grphic services. "/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.credltd.com/"/>
	<meta property="og:image" content="http://www.credltd.com/assets/img/credltd-logo.jpg"/>
	<link rel="canonical" href="http://www.credltd.com/">
	<link rel="shortcut icon" href="assets/img/favicon.png"/>
	<link rel="icon" type="image/ico" href="assets/img/favicon.png"/>
	<link rel="alternate" type="application/rss+xml" title="Creative EDGE Limited RSS" href="http://www.credltd.com/feed/"/>
	<meta http-equiv="refresh" content="900"/>
	<meta property="fb:page_id" content="163059227060505"/>
    <title><?php echo "$apps_name | $developers";?></title>
	
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	<div id="wrapper">
		<div class="container">
			<header>
				<div class="row">
					<div class="col-lg-4">
						<div class="logo"><a href="<?php echo $developers_url;?>" target="_blank">Creative EDGE Limited</a></div>
					</div>
					<div class="col-lg-8">
						<div class="apps_name"><?php echo $apps_name;?></div>
					</div>					
				</div>
			</header>
			
			<section class="main_div">
				<div class="row">
					<div class="col-lg-12">
						<div class="output">
							<div class="random_num_output text-success"><?php echo $apps->random_num($random_digit);?></div>
						</div>
						<div class="action_tools">
							<input class="btn btn-lg btn-primary" onclick="reload_page()" style="cursor:pointer;" value="New Number" type="button" />
						</div>
					</div>
				</div>
			</section>
			
			<footer>
				<div class="pull-right">
					Apps > <a href="<?php echo $apps_url;?>" title="<?php echo $apps_title;?>"><strong><?php echo $apps_name;?></strong></a>
				</div>
				<div>
					Copyright <a href="<?php echo $developers_url;?>" target="_blank" style="color:white;"><strong><?php echo $developers;?></strong></a> &copy; <?php echo date("Y");?>
				</div>
			</footer>			
		</div>		
	</div>
    <script src="assets/js/jquery-2.1.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script>
	function reload_page() {
		location.reload();
	}
	</script>
</body>
</html>
