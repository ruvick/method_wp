<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

<main class="page">
	<section id="main-info" class="main-info">  
		<div class="container">
			<div class="main-info__row d-flex"> 
				
				<div class="main-info__column d-flex">
					<div class="main-info__item-img">
						<h1>
							Внедрите новые инструменты <br>
							в свой бизнес за 2 часа вместе <br>
							с инструктором компанды “Method” <br>
							и получите результат уже завтра
						</h1>
						<p>
							Хотите узнать, подходит ли это вам? <br>
							Пройдите бесплатный практикум
						</p>
						<a href="#" class="main-info__btn btn">Пройти бесплатный практикум</a>
					</div>

					<div class="main-info__item-slider"> 
						<div class="info-sl__slider slider">
							<div class="slider__item">
								<img src="<?php echo get_template_directory_uri();?>/img/sl-1.jpg" alt="">
							</div>

							<div class="slider__item">
								<img src="<?php echo get_template_directory_uri();?>/img/sl-1.jpg" alt="">
							</div>

							<div class="slider__item filter">
								<img src="<?php echo get_template_directory_uri();?>/img/sl-1.jpg" alt="">
							</div>

							<div class="slider__item">
								<img src="<?php echo get_template_directory_uri();?>/img/sl-1.jpg" alt="">
							</div>

							<div class="slider__item filter">
								<img src="<?php echo get_template_directory_uri();?>/img/sl-1.jpg" alt="">
							</div>

							<div class="slider__item">
								<img src="<?php echo get_template_directory_uri();?>/img/sl-1.jpg" alt="">
							</div>

							<div class="slider__item filter">
								<img src="<?php echo get_template_directory_uri();?>/img/sl-1.jpg" alt="">
							</div>
							<div class="slider__item filter">
								<img src="<?php echo get_template_directory_uri();?>/img/sl-1.jpg" alt="">
							</div>
							<div class="slider__item filter">
								<img src="<?php echo get_template_directory_uri();?>/img/sl-1.jpg" alt="">
							</div>
							<div class="slider__item filter">
								<img src="<?php echo get_template_directory_uri();?>/img/sl-1.jpg" alt="">
							</div>
						</div>
					</div>
				</div>

				<div class="main-info__column-r d-flex">

					<div class="main-info__act">
						<a href="https://youtu.be/kLte7hJOFZE" class="main-info__vid" data-rel="media">
							<h3>Что такое Метод?</h3>
							<p>
								Посмотрите видео <br>
								и узнайте все о нашем маркетплейсе за 2 минуты
							</p>
						</a>
						<div class="main-info__login">
							<h3>Подпишитесь</h3>
							<p>
								Чтобы начать менять <br>
								свою жизнь прямо сейчас
							</p>
							<a href="#" class="login-btn btn">Подписаться</a>
						</div>
					</div>

					<div class="main-info__reviews reviews-block d-flex">
						<h3>Отзывы</h3>

						<div class="reviews-block__item">
							<div class="reviews-block__initials d-flex">
								<div class="reviews-block__img">
									<img src="<?php echo get_template_directory_uri();?>/img/reviews/h-01.jpg" alt="">
								</div>
								<div class="reviews-block__name">
									<h4>Алексей Гаврилов</h4>
									<p>Маркетолог</p>
								</div>
							</div>
							<div class="reviews-block__text">
								<p>
									Таким образом консультация с широким 
									активом играет важную роль 
									в формировании дальнейших развития. 
									Значимость этих проблем настолько 
									очевидна, что укрепление и развитие 
									структуры играет важную
								</p>
							</div>
						</div>

						<div class="reviews-block__item reviews-block__item_bot">
							<div class="reviews-block__initials d-flex">
								<div class="reviews-block__img">
									<img src="<?php echo get_template_directory_uri();?>/img/reviews/h-02.jpg" alt="">
								</div>
								<div class="reviews-block__name">
									<h4>Мария Васильева</h4>
									<p>Предприниматель</p>
								</div>
							</div>
							<div class="reviews-block__text">
								<p>
									Таким образом консультация с широким 
									активом играет важную роль 
									в формировании дальнейших развития. 
									Значимость этих проблем настолько 
									очевидна, что укрепление и развитие 
									структуры играет важную
								</p>
							</div>
						</div>
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
											<a href="#" class="prod-card__cat-info">#Маркетинг</a>
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