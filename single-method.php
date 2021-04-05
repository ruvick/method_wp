<?php 
/*
* Template Name: Шаблон метод
* Template Post Type: post
*/
get_header(); ?>

<?php get_template_part('template-parts/header-section-yandex');?>

<section class="header-info">
	<div class="container">

		<h1><?php the_title();?></h1>
		<p><?echo carbon_get_post_meta(get_the_ID(),"method_subtitle"); ?></p>

		<a href="#" class="header-info__btn btn"><?echo carbon_get_post_meta(get_the_ID(),"method_button"); ?></a>

		<div class="header-info__result result-block">
			<h3><?echo carbon_get_post_meta(get_the_ID(),"result_method_title"); ?></h3>

			<div class="result-block__row d-flex">
				<?	$result = carbon_get_the_post_meta('result_method_total');
				if($result) {
					$resultIndex = 0;
					foreach($result as $itemr) {
						?>
						<div class="result-block__item d-flex">
							<div class="result-block__img">
								<img src="<?php echo wp_get_attachment_image_src($itemr['result_method_img'], 'large')[0];?>" alt="">
							</div>
							<p><? echo $itemr['result_method_text']; ?></p>
						</div>
						<?
						$resultIndex++;
					}
				}
				?>
			</div>

		</div>

	</div>
</section>
</div>  

<main class="page page-yandex">

	<section id="importance" class="importance"> 
		<div class="container">
			<h2><?echo carbon_get_post_meta(get_the_ID(),"section_two_title"); ?></h2>

			<div class="importance__row d-flex">
				<?	$sectwo = carbon_get_the_post_meta('section_two_complex');
				if($sectwo) {
					$sectwoIndex = 0;
					foreach($sectwo as $itemtw) {
						?>
						<div class="importance__card-col">
							<div class="importance__card">
								<div class="importance__card-img">
									<img src="<?php echo wp_get_attachment_image_src($itemtw['section_two_card_img'], 'large')[0];?>" alt="">
								</div>
								<p><? echo $itemtw['section_two_card_text']; ?></p>
							</div>
						</div>
						<?
						$sectwoIndex++;
					}
				}
				?>
			</div>

		</div>
	</section>

	<section id="waiting" class="waiting">
		<div class="container">
			<h2><?echo carbon_get_post_meta(get_the_ID(),"section_three_title"); ?></h2>

			<div class="waiting__row d-flex">
				<?	$secthr = carbon_get_the_post_meta('section_three_complex');
				if($secthr) {
					$secthrIndex = 0;
					foreach($secthr as $itemthr) {
						?>
						<div class="waiting__card-col">
							<div class="waiting__card">
								<div class="waiting__card-img">
									<img src="<?php echo wp_get_attachment_image_src($itemthr['section_three_card_img'], 'large')[0];?>" alt="">
								</div>
								<h4><? echo $itemthr['section_three_card_title']; ?></h4>
								<p><? echo $itemthr['section_three_card_text']; ?></p>
							</div>
						</div>
						<?
						$secthrIndex++;
					}
				}
				?>
			</div>

		</div>
	</section>

	<section id="method-info" class="method-info">
		<div class="container">
			<h2><?echo carbon_get_post_meta(get_the_ID(),"section_four_title"); ?></h2>
			<p><?echo carbon_get_post_meta(get_the_ID(),"section_four_subtitle"); ?></p>

			<div class="method-info__row d-flex">
				<?	$sectfor = carbon_get_the_post_meta('section_four_complex');
				if($sectfor) {
					$sectforIndex = 0;
					foreach($sectfor as $itemfor) {
						?>
						<!-- <div class="method-info__col"> -->
							<div class="method-info__item d-flex">
								<div class="method-info__item-img">
									<img src="<?php echo wp_get_attachment_image_src($itemfor['section_four_card_img'], 'large')[0];?>" alt="">
								</div>
								<p><? echo $itemfor['section_four_card_text']; ?></p>
							</div>
							<!-- </div> -->
							<?
							$sectforIndex++;
						}
					}
					?>
				</div>

			</div>
		</section>

		<?php 
		$mentordBg = wp_get_attachment_image_src( carbon_get_the_post_meta('section_five_bg'), 'full')[0];
		if(empty($mentordBg)) {
			$mentordBg = get_template_directory_uri() . '/img/mentor-info-bg.jpg'; } 
			?>
			<section id="mentor-info" class="mentor-info" style="background-image: url(<?php echo $mentordBg?>);">
				<div class="container">
					<h2><?echo carbon_get_post_meta(get_the_ID(),"section_five_title"); ?></h2>
					<a href="#" class="mentor-info__btn btn"><?echo carbon_get_post_meta(get_the_ID(),"section_four_button"); ?></a>
				</div>
			</section>

			<section id="methods" class="methods methods-yandex">
				<div class="container">
					<h2>Еще методы</h2>

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

			<?php get_footer();