<div class="sidebar">
	<!-- Logo -->
	<header>
		<a class="logo" href="<?php echo site_url(''); ?>"></a>
	</header>
	<!-- Language selection -->
	<div class="lang-container">
		<div class="flag ita <?php if($lang_code == 'italian'){ echo 'selected'; } ?>">
			<a href="<?php echo site_url('langSwitch/switchLanguage/italian'); ?>"><img src="resources/images/ita.jpg"></a>
		</div>
		<div class="flag eng <?php if($lang_code == 'english'){ echo 'selected'; } ?>">
			<a href="<?php echo site_url('langSwitch/switchLanguage/english'); ?>"><img src="resources/images/eng.jpg"></a>
		</div>
	</div>
	<!-- Menu -->
	<div class="menu-container">
		<ul>
			<?php if($lang_code == 'italian'){ ?>
			<li><a href="<?php echo site_url('chisiamo'); ?>" class="<?php if($title == 'Chi siamo'){ echo 'selectedMenu'; } ?>"><p>Chi siamo</p></a></li>
			<li><a href="<?php echo site_url('progettazione'); ?>" class="<?php if($title == 'Progettazione'){ echo 'selectedMenu'; } ?>"><p>Progettazione</p></a></li>
			<li><a href="<?php echo site_url('costruzione'); ?>" class="<?php if($title == 'Costruzione'){ echo 'selectedMenu'; } ?>"><p>Costruzione</p></a></li>
			<li><a href="<?php echo site_url('stampi'); ?>" class="<?php if($title == 'Stampi'){ echo 'selectedMenu'; } ?>"><p>Stampi</p></a></li>
			<li><a href="<?php echo site_url('contatti'); ?>" class="<?php if($title == 'Contatti'){ echo 'selectedMenu'; } ?>"><p>Contatti</p></a></li>
			<?php } else { ?>
			<li><a href="<?php echo site_url('about'); ?>" class="<?php if($title == 'About us'){ echo 'selectedMenu'; } ?>"><p>About us</p></a></li>
			<li><a href="<?php echo site_url('design'); ?>" class="<?php if($title == 'Design'){ echo 'selectedMenu'; } ?>"><p>Design</p></a></li>
			<li><a href="<?php echo site_url('manufacture'); ?>" class="<?php if($title == 'Manufacture'){ echo 'selectedMenu'; } ?>"><p>Manufacture</p></a></li>
			<li><a href="<?php echo site_url('imprint'); ?>" class="<?php if($title == 'Imprint'){ echo 'selectedMenu'; } ?>"><p>Imprint</p></a></li>
			<li><a href="<?php echo site_url('contacts'); ?>" class="<?php if($title == 'Contacts'){ echo 'selectedMenu'; } ?>"><p>Contacts</p></a></li>
			<?php } ?>
		</ul>
	</div>
	<!-- Footer -->
	<footer>
		 <p>
			Site powered by <a href="http://www.yellowbear.it" target="_blank">Yellow Bear</a> - 2016
		</p>
	</footer>
</div>