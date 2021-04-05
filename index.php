<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

<main class="page">
	<section id="main-info" class="main-info">  
		<div class="container">
			<div class="main-info__row d-flex"> 
				
				<div class="main-info__column d-flex">

					<?php 
					$homebg = wp_get_attachment_image_src( carbon_get_theme_option('as_home_bg'), 'full')[0];
					if(empty($homebg)) {
						$homebg = get_template_directory_uri() . '/img/header-yandex.jpg';
					} ?>

					<div class="main-info__item-img" style="background-image: url(<?php echo $homebg?>);">
						<h1><? echo carbon_get_theme_option("about_home_title"); ?></h1>
						<p><? echo carbon_get_theme_option("about_home_subtitle"); ?></p>
						<a href="#" class="main-info__btn btn"><? echo carbon_get_theme_option("about_home_button"); ?></a>
					</div>

					<div class="main-info__item-slider"> 
						<div class="info-sl__slider slider"> 
							<?
							$pict = carbon_get_theme_option('auto_banner');
							if($pict) {
								$pictIndex = 0;
								foreach($pict as $item) {
									?>
									<div class="slider__item">
										<img src = "<?php echo wp_get_attachment_image_src($item['img_sl'], 'full')[0];?>" />
									</div>
									<?
									$pictIndex++;
								}
							}
							?>
						</div>
					</div>
				</div>

				<div class="main-info__column-r d-flex">

					<div class="main-info__act">
						<?php 
						$vmethod = wp_get_attachment_image_src( carbon_get_theme_option('img_block_method'), 'full')[0];
						if(empty($vmethod)) {
							$vmethod = get_template_directory_uri() . '/img/header-yandex.jpg';
						} ?>
						<a href="<? echo carbon_get_theme_option("video_block_method"); ?>" class="main-info__vid" data-rel="media" style="background-image: url(<?php echo $vmethod?>);">
							<h3><? echo carbon_get_theme_option("block_method_title"); ?></h3>
							<p><? echo carbon_get_theme_option("block_method_subtitle"); ?></p>
						</a>
						<div class="main-info__login">
							<h3><? echo carbon_get_theme_option("subscribe_title"); ?></h3>
							<p><? echo carbon_get_theme_option("subscribe_subtitle"); ?></p>
							<a href="#" class="login-btn btn"><? echo carbon_get_theme_option("about_subscribe_button"); ?></a>
						</div>
					</div>

					<div class="main-info__reviews reviews-block d-flex">
						<h3>Отзывы</h3>

						<?php 
						$posts = get_posts( array(
							'numberposts' => 2,
							'category'    => 4,
							'orderby'     => 'date',
								// 'orderby'     => '612,616,626',
							'order'       => 'DESC',
								// 'include'     => '612,608,606',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'post',
								'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
							) );

						$result = wp_get_recent_posts( $args );

						foreach( $posts as $post ){
							?>
							<div class="reviews-block__item">
								<div class="reviews-block__initials d-flex">
									<div class="reviews-block__img">
										<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>">
									</div>
									<div class="reviews-block__name">
										<h4><? the_title();?></h4>
										<p><?echo carbon_get_post_meta(get_the_ID(),"reviews_special"); ?></p>
									</div>
								</div>
								<div class="reviews-block__text">
									<p>
										<?php 
										$maxchar = 190;
										$text = strip_tags( get_the_excerpt() );
										echo mb_substr( $text, 0, $maxchar );
										?>
									</p>
								</div>
							</div>

							<?php 
						} 
						?>
						<a href="<?php echo get_category_link(4);?>" class="reviews-block__btn">Читать больше отзывов...</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="methods" class="methods methods-home">
		<div class="container">
			<h2>Все методы</h2>

			<div class="methods__row prod-card d-flex">
				
				<?php 
				$posts = get_posts( array(
					'numberposts' => 9,
					'category'    => 2,
					'orderby'     => 'date',
								// 'orderby'     => '612,616,626',
					'order'       => 'DESC',
								// 'include'     => '612,608,606',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  =>'',
					'post_type'   => 'post',
								'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
							) );

				$result = wp_get_recent_posts( $args );

				foreach( $posts as $post ){
					?>
					<div class="prod-card__column"> 
						<div class="prod-card__body d-flex">
							<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__link">
								<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>">
							</a>
							<div class="prod-card__text">
								<a href="<?echo carbon_get_post_meta(get_the_ID(),"method_card_subheading_link"); ?>" class="prod-card__cat-info"><?echo carbon_get_post_meta(get_the_ID(),"method_card_subheading"); ?></a>
								<h3><? the_title();?></h3>
								<div class="prod-card__subtitle"><?php the_excerpt(); ?></div>
							</div>
							<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__btn btn">Узнать подробнее</a>
						</div> 
					</div>
					<?php 
				} 
				?>

			</div>

		</div>
	</section>

</main>

<?php get_footer(); ?> 