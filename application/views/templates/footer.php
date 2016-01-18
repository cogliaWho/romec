		</div>
    </body>
	<script type="text/javascript" src="<?php echo site_url('resources/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('resources/js/main.js'); ?>"></script>
	<?php 
	if($hasSlide == TRUE){
		echo '<script type="text/javascript" src="'.site_url('resources/js/slick.min.js').'"></script>';
		?>
		<script type="text/javascript">
			var slickSettings = {
				slidesToShow: 2, 
				slidesToScroll: 2,
				dots: true, 
				autoplay: true,
				autoplaySpeed: 4000,
				responsive: [
			    {
			      breakpoint: 1025,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        dots: false,
			        autoplay: false
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  	]};
			$("#slider-wrap").slick(slickSettings);
		</script>
		<?php
	}
	if($title == 'Contatti'){
		echo '<script type="text/javascript" src="'.site_url('resources/js/map.js').'"></script>';
		echo '<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>';
	}
	?>
</html>