
<div class="prod-card__column"> 
	<div class="prod-card__body d-flex">
		<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__link">
			<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>">
		</a>
		<div class="prod-card__text">
			<a href="<?echo carbon_get_post_meta(get_the_ID(),"author_card_subheading_link"); ?>" class="prod-card__cat-info"><?echo carbon_get_post_meta(get_the_ID(),"author_card_subheading"); ?></a>
			<h3><? the_title();?></h3>
			<div class="prod-card__subtitle">
					<?php 
						$maxchar = 200;
						$text = strip_tags( get_the_excerpt() );
						echo mb_substr( $text, 0, $maxchar );
					?>
			</div>
		</div>
		<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__btn btn">Читать статью</a> 
	</div> 
</div>  