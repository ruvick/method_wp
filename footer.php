
<footer id="footer" class="footer">
	<div class='container'>

		<div class="footer__row d-flex">

			<!-- <div class="footer__item-left d-flex"> -->

				<?php 
					$logof = wp_get_attachment_image_src( carbon_get_theme_option('as_logo_white'), 'full')[0];
						if(empty($logof)) {
							$logof = get_template_directory_uri() . '/img/icons/logo-f.png';
				} ?>

				<a href="https://method.market" class="header__logo logo-icon" style="background-image: url(<?php echo $logof?>);"></a>

				<div class="footer__text">
					<p><? echo carbon_get_theme_option("subtitle_footer"); ?></p>
				</div>
				
				<!-- </div> -->

				<div class="header__callback d-flex">
					<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phones_2"); ?></a>
					<p>Есть вопросы? Звоните сейчас!</p> 
				</div>
			</div>

		</div>
	</footer>  

</div>

<?php wp_footer(); ?>
</body>
</html> 