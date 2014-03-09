	<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
	<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
	<script type='text/javascript' src='scripts/diapo.js'></script> 
	
	<script>
	$(function(){
		$('.pix_diapo').diapo();
	});
	</script>

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></h1>

<p>&nbsp &nbsp &nbsp &nbsp Kamala Beach lies just north of the lights and noise of Patong and is a quieter stretch of sand with a more relaxed feel. 
This well-enclosed bay and fishing village surrounded by forested hills is one of the most beautiful places in Phuket.
</p>
<p>
With its quieter pace, over the last few years, Kamala has become a favoured spot for retirees and other longer-term visitors staying in small hotels,
villas and apartment rentals around the village. On the headland to the south, are a number of luxury villa developments,
with great views of Kamala Bay and beyond along its winding road.
</p>
 
 <!-- Elastislide Carousel -->
				<ul id="carousel" class="elastislide-list">
					<li><a href="#"><img src="images/large/1.jpg" alt="image01" /></a></li>
					<li><a href="#"><img src="images/large/2.jpg" alt="image02" /></a></li>
					<li><a href="#"><img src="images/large/3.jpg" alt="image03" /></a></li>
					<li><a href="#"><img src="images/large/4.jpg" alt="image04" /></a></li>
					<li><a href="#"><img src="images/large/5.jpg" alt="image05" /></a></li>
					<li><a href="#"><img src="images/large/1.jpg" alt="image01" /></a></li>
					<li><a href="#"><img src="images/large/2.jpg" alt="image02" /></a></li>
					<li><a href="#"><img src="images/large/3.jpg" alt="image03" /></a></li>
					<li><a href="#"><img src="images/large/4.jpg" alt="image04" /></a></li>
					<li><a href="#"><img src="images/large/5.jpg" alt="image05" /></a></li>
				
				</ul>
<!-- End Elastislide Carousel -->
	
	
<br><br>			
<p>
Whilst Kamala doesn't attract tourists in the same numbers as other places it has a certain niche, those who do come say 'we like it just the way it is,
 don't tell anyone as they'll all come and spoil it'. 
</p>				
				

		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
			$( '#carousel' ).elastislide();
			
		</script>

