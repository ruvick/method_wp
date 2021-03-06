<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

		<main class="page">

			<section id="methods" class="methods-sect methods">
				<div class="container">
					<h1><?php single_cat_title( '', true );?></h1> 

					<div class="methods__row prod-card d-flex">
						<?php
							while(have_posts()):
								the_post();
								get_template_part('template-parts/product-articles');  
							endwhile;
						?>
					</div>

				</div>
			</section>

		</main>
<?php get_footer(); ?>   