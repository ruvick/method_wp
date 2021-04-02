		<div class="header-wrap">
			<header id="header" class="header">
				<div class="container">

					<div class="header__row d-flex">

						<div class="header__row-left d-flex">

							<?php 
							$logoh = wp_get_attachment_image_src( carbon_get_theme_option('as_logo'), 'full')[0];
							if(empty($logoh)) {
								$logoh = get_template_directory_uri() . '/img/icons/logo-yandex-h.png';
							} ?>

							<a href="https://method.market" class="header__logo logo-icon logo-icon-yandex" style="background-image: url(<?php echo $logoh?>);"></a>

							<div class="header__menu menu"> 

								<nav class="menu__body">
									<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list',	'container_class' => 'menu__list','container' => false )); ?>
<!-- 							<ul class="menu__list d-flex">
								<li><a href="#" class="menu__link menu__link_cat">Каталог методов</a></li>
								<li><a href="#" class="menu__link">Что такое метод</a></li>
								<li><a href="#" class="menu__link">Каталог</a></li>
								<li><a href="#" class="menu__link">Отзывы</a></li>
								<li><a href="#" class="menu__link">Статьи</a></li> 
							</ul> -->
						</nav> 
						<nav class="mob-menu">
							<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',	'container_class' => 'mob-menu__list','container' => false )); ?>
<!-- 							<ul class="mob-menu__list">
								<li><a href="#" class="menu__link">Каталог методов</a></li>
								<li><a href="#" class="menu__link">Что такое метод</a></li>
								<li><a href="#" class="menu__link">Каталог</a></li>
								<li><a href="#" class="menu__link">Отзывы</a></li>
								<li><a href="#" class="menu__link">Статьи</a></li>
							</ul> -->
						</nav>
					</div>

				</div>

				<div class="header__row-right d-flex">

					<div class="header__search search">
						<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
							<input type="text" placeholder="Искать метод" class="search__input input" value="<?php echo get_search_query() ?>" name="s" id="s">
							<button type="submit" tabindex="2" id="searchsubmit" class="sub-search" value="найти"></button>
						</form>
					</div>
					<button class="mob-search"></button>


					<div class="header__callback header__callback_yandex d-flex">
						<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></a>
						<p>по всем вопросам</p>
					</div>

					<div class="menu__icon icon-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>

				</div>

			</div>

		</div>
	</header>  