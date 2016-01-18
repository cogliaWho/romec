<div class="sidebar">
	<!-- Logo -->
	<header>
		<a class="logo" href="<?php echo site_url(''); ?>"></a>
	</header>
	<!-- Language selection -->
	<div class="lang-container">
		<h3>switch language: </h3>
		<div class="flag ita">
			<a href="<?php echo site_url('langswitch/switchLanguage/italian'); ?>"><img src="resources/images/ita.jpg"></a>
		</div>
		<div class="flag eng">
			<a href="<?php echo site_url('langswitch/switchLanguage/english'); ?>"><img src="resources/images/eng.jpg"></a>
		</div>
	</div>
	<!-- Menu -->
	<div class="menu-container">
		<ul>
			<li><a href="<?php echo site_url('chisiamo'); ?>" class="<?php if($title == 'Chi siamo'){ echo 'selectedMenu'; } ?>"><p>chi siamo</p></a></li>
			<li><a href="<?php echo site_url('progettazione'); ?>" class="<?php if($title == 'Progettazione'){ echo 'selectedMenu'; } ?>"><p>progettazione</p></a></li>
			<li><a href="<?php echo site_url('costruzione'); ?>" class="<?php if($title == 'Costruzione'){ echo 'selectedMenu'; } ?>"><p>costruzione</p></a></li>
			<li><a href="<?php echo site_url('stampi'); ?>" class="<?php if($title == 'Stampi'){ echo 'selectedMenu'; } ?>"><p>stampi</p></a></li>
			<li><a href="<?php echo site_url('contatti'); ?>" class="<?php if($title == 'Contatti'){ echo 'selectedMenu'; } ?>"><p>contatti</p></a></li>
		</ul>
	</div>
	<!-- Footer -->
	<footer>
		 <p>
			Site powered by <a href="http://www.yellowbear.it" target="_blank">Yellow Bear</a> - 2015
		</p>
	</footer>
</div>