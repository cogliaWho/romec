<?php ($_SERVER['REQUEST_METHOD'] == 'POST') ? $errorPost = TRUE : $errorPost = FALSE; ?>

<div class="content">
	<div class="mobile-header">
		<div class="menu-btn" onclick="openMenu()"><span class="icon-menu"></span></div>
		<div class="mobile-logo"><a href="<?php echo site_url(''); ?>"></a></div>
	</div>
	<div class="container-half b-bottom contact-mobile">
		<?php if($errorPost){
			echo "<div id='modal-bg' class='modal-bg' onclick='closeModal()'></div><div id='modal' class='modal'><div class='btn-close' onclick='closeModal()'>X</div><ul><li><h2>Attenzione</h2></li>".validation_errors()."</ul></div>";
		}?>
		<div class="form-sidebar">
			<?php echo $text; ?>
			<!--<?php echo validation_errors(); ?>-->
		</div>
		<?php $attributes = array('class' => 'form-contatti', 'id' => 'form-contatti');?>
		<?php echo form_open('contatti', $attributes); ?>
			<h2 class="form-title">Come possiamo aiutarti?</h2>
			<div>
				<label for="name">Nome<span>*</span></label>
			    <input type="input" name="name" value="" maxlength="128"/><br />

			    <label for="email">Email<span>*</span></label>
			    <input type="input" name="email" value="" maxlength="128" /><br />

			    <label for="subject">Oggetto<span>*</span></label>
			    <input type="input" name="subject" value="" maxlength="200" /><br />
			</div>
			<div>
			    <label for="message">Messaggio<span>*</span></label>
			    <textarea name="message" placeholder="lascia un messaggio..." maxlength="500"></textarea><br />
			    <input type="submit" name="submit" value="Invia" />
		    </div>
		</form>
	</div>
	<div class="container-half no-pad contact-mobile">
		<div class="info-wrap">
			<p class="info">
				<span>ROMEC snc</span><br>
				<span>di Romele e Giacomo e C.</span><br>
				Via G. Puccini 22<br>
				25050 Pian Camuno - Brescia<br>
				C.F. 01992370179<br>
				P.IVA 01944760980
			</p>
		</div>
		<div id="map-wrap" class="map-wrap">
			Caricamento mappa...
		</div>
	</div>

</div>

