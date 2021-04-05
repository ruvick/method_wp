<a href="#" class="reviews-block__item">
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
		<p><? the_content();?></p>
	</div>
	<div class="reviews-block__date">
		<?php echo the_time('j F Y'); ?> года
	</div>
</a>