<?php include_once("slider.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo Create Bootstrap Carousel Slider with Thumbnails using PHP & MySQL</title>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link href="css/style.css" rel="stylesheet">

<?php include('container.php');?>

<div class="container">	

	
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">	  
		<ol class="carousel-indicators">
		<?php echo $button_html; ?>		
		</ol>	  
		<div class="carousel-inner">	  
			<?php echo $slider_html; ?>
		</div>	 
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>	 
		
			<?php echo $thumb_html; ?>
		</ul>
	</div>	

</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src="js/carousel-slider.js"></script>
<?php include('footer.php');?>
