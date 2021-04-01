<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

		<main class="page">

			<section id="reviews" class="reviews">
				<div class="container">
					<h1><?php single_cat_title( '', true );?></h1>

					<div class="reviews__row d-flex">
						
						<div class="reviews__column d-flex">
						<?php
							while(have_posts()):
								the_post();
								get_template_part('template-parts/product-reviews');  
							endwhile;
						?>
						</div>

						<div class="reviews__form-block d-flex">
							<h3>Воспользовались нашим маркетплейсом и хотите оставить свой отзыв?</h3>
							<p>Заполните форму ниже и мы разместим ваш отзыв на сайте в самое ближайшее время</p>
							<form action="#" class="reviews__form">
								<input type="text" placeholder="Ваше имя" class="reviews__form-input input">
								<input type="text" placeholder="Какая у вас профессия?" class="reviews__form-input input">
								<div class="reviews__form-input-wrapper reviews__form-input">
									<input type="file" name="file" id="input__file" class="reviews__form-input-file input__file">
									<label for="input__file" class="input__file-button">
										<span class="input__file-button-text">Загрузите фото (Не обязательно)</span>
									</label>
								</div>
<!-- 								<input type="file" placeholder="Загрузите фото (Не обязательно)" class="reviews__form-input reviews__form-input-file input"> -->
								<textarea name="Сообщение" placeholder="Напишите сюда ваш отзыв" id="" cols="30" rows="10"></textarea>
								<button type="submit" class="reviews__form-btn btn">Оставить отзыв</button>
							</form>
						</div>

					</div>

				</div>
			</section>

		</main>

<?php get_footer(); ?>   