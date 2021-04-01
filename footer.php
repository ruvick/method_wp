
<footer id="footer" class="footer">
	<div class='container'>

		<div class="footer__row d-flex">

			<!-- <div class="footer__item-left d-flex"> -->

				<a href="https://method.market" class="header__logo logo-icon"></a>

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