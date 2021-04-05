<?php 
/*
* Template Name: Шаблон статьи
* Template Post Type: post 
*/
get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="article" class="article">
		<div class="container">

			<?php 
			$articleImg = wp_get_attachment_image_src( carbon_get_the_post_meta('top_bg'), 'full')[0];
					// if(empty($sidebarImg)) {
					// 	$sidebarImg = get_template_directory_uri() . '/img/header-yandex.jpg'; } 
			?>
			<div class="article__intro intro" style="background-image: url(<?php echo $articleImg?>);">

				<div class="intro__item-block d-flex">
					<div class="intro__initials d-flex">
						<div class="intro__block-img"> 
							<?php 
							$authorImg = wp_get_attachment_image_src( carbon_get_the_post_meta('author_img'), 'full')[0];
							if(empty($authorImg)) {
								$authorImg = get_template_directory_uri() . '/img/art-01.jpg';
							} ?>
							<img src="<?php echo $authorImg?>" alt="">
						</div>
						<div class="intro__block-name">
							<h4><?echo carbon_get_post_meta(get_the_ID(),"author_name"); ?></h4>
							<p><?echo carbon_get_post_meta(get_the_ID(),"author_special"); ?></p>
						</div>
					</div>

					<div class="article__title-block">
						<h1><?php the_title();?></h1>
						<p><?echo carbon_get_post_meta(get_the_ID(),"method_subtitle"); ?></p>
					</div>
				</div>

			</div>

			<div class="article__content content-article d-flex">

				<div class="content-article__text">
					<?php the_content(); ?>
				</div>

				<div class="content-article__aside d-flex">
					<?php 
					$sidebarImg = wp_get_attachment_image_src( carbon_get_the_post_meta('sidebar_img_t'), 'full')[0];
					// if(empty($sidebarImg)) {
					// 	$sidebarImg = get_template_directory_uri() . '/img/header-yandex.jpg'; } 
					?>
					<a href="<?echo carbon_get_post_meta(get_the_ID(),"sidebar_img_link-1"); ?>" class="content-article__col-img" style="background-image: url(<?php echo $sidebarImg?>);"></a>
					<?php 
					$sidebarImgB = wp_get_attachment_image_src( carbon_get_the_post_meta('sidebar_img_b'), 'full')[0];
					// if(empty($sidebarImgB)) {
					// 	$sidebarImgB = get_template_directory_uri() . '/img/header-yandex.jpg';} 
					?>
					<a href="<?echo carbon_get_post_meta(get_the_ID(),"sidebar_img_link-2"); ?>" class="content-article__col-img" style="background-image: url(<?php echo $sidebarImgB?>);"></a>
				</div>

			</div>

		</div>
	</section>

</main>


<?php get_footer();