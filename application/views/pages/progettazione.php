<div class="content">
	<div class="mobile-header">
		<div class="menu-btn" onclick="openMenu()"><span class="icon-menu"></span></div>
		<div class="mobile-logo"><a href="<?php echo site_url(''); ?>"></a></div>
	</div>
	<div class="container-half no-pad b-bottom progettazione-header">
		<div id="slider-wrap" class="slider-wrap">
		<?php
			$mobilepath = "";
			if($ismobile){
				$mobilepath = "mobile/";
			}
			foreach($slides as $slide)
			{
			?>
			<div class="slide-single" style="background-image:url('resources/slideshows/<?=$slide['slideshow']?>/<?=$mobilepath.$slide['image']?>')">
			    <!-- <img src="resources/slideshows/<?=$slide['slideshow']?>/<?=$slide['image']?>"/> -->
			</div>
			<?php
			}
		?>
		</div>
	</div>
	<div class="container-half">
		<?php echo $text; ?>
		<div class="vert-third img-list">
			<img class="full-img" alt="" src="resources/images/progettazione/1.jpg">
		</div>
		<div class="vert-third img-list">
			<img class="full-img" alt="" src="resources/images/progettazione/2.jpg">
		</div>
		<div class="vert-third img-list">
			<img class="full-img" alt="" src="resources/images/progettazione/3.jpg">
		</div>
		<div class="vert-third img-list">
			<img class="full-img" alt="" src="resources/images/progettazione/4.jpg">
		</div>
		<div class="clear-divs"></div>
	</div>
	<div class="clear-divs"></div>
	<div class="footer">
    <p>
      ROMEC snc di Romele e Giacomo e C. | Via G. Puccini,  22 - 25050 Pian Camuno (BS)<br>
      Tel. 0364 591429 - 0364 590858 - Fax. 0364 591429 - 0364 590858 C.F. 01992370179 - P.IVA 01944760980
    </p>
  </div>
</div>
