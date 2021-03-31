				
<div class="prod-card__body d-flex">
	<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__link">
		<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
	</a>

	<div class="prod-card__text d-flex">
		<h4><? the_title();?></h4>
		<p class="prod-card__price"><?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?> руб.</p>
	</div>
	<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__btn btn">Подробнее</a>
</div>


						<div class="prod-card__column"> 
							<div class="prod-card__body d-flex">
								<a href="#" class="prod-card__link">
									<img src="img/product/pr-01.jpg" alt="">
								</a>
								<div class="prod-card__text">
									<a href="#" class="prod-card__cat-info">#Маркетинг</a>
									<h3>Яндекс.Директ, РСЯ</h3>
									<p class="prod-card__subtitle">
										Задача организации, в особенности же укрепление 
										и развитие структуры в значительной степени обуславливает создание модели развития. 
										Повседневная практика показывает 
									</p>
								</div>
								<a href="#" class="prod-card__btn btn">Узнать подробнее</a>
							</div> 
						</div>