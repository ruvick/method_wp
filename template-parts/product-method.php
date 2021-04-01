
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