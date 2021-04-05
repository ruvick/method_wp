<?php

/*
* Template Name: Шаблон отзывы
* Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="posts">
		<div class="container">

			<div class ="posts__content">
				<div class="posts__img">
					<picture>
						<?php echo get_the_post_thumbnail( $post->ID, "turImg", array("alt" => $post->post_title, "title" => $post->post_title));?>
					</picture>
				</div>
				<?php global $post;
					echo apply_filters('the_content', $post->post_content); 
				?>
			</div> 

		</div>
	</section> 

</main> 

<?php get_footer();