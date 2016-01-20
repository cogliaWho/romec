<div class="content">
	<div class="mobile-header">
		<div class="menu-btn" onclick="openMenu()"><span class="icon-menu"></span></div>
		<div class="mobile-logo"><a href="<?php echo site_url(''); ?>"></a></div>
	</div>
	<div class="container-half no-pad b-bottom progettazione-header">
		<div id="slider-wrap" class="slider-wrap">
		<?php
			foreach($slides as $slide)
			{
			?>	
			<div class="slide-single" style="background-image:url('resources/slideshows/<?=$slide['slideshow']?>/<?=$slide['image']?>')">
			    <!-- <img src="resources/slideshows/<?=$slide['slideshow']?>/<?=$slide['image']?>"/> -->
			</div>
			<?php
			}
		?>
		</div>
	</div>
	<div class="container-half">
		<?php echo $text; ?>
	</div>
</div>