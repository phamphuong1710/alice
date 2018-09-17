<?php get_header(); ?>
<div class="content">
	
		<div class="container">
			<div class="row">
				<div class="col-md-8">				
					<section id="main-section">
					
						<?php if (have_posts()) : while (have_posts()) : the_post() ; ?>
							<?php get_template_part('content',get_post_format()); ?>
							<?php endwhile; ?>
							<?php else : ?>
								<?php get_template_part('content','none'); ?>
						<?php endif ?>
					</section>
				</div>
				<div class="col-md-4">
					<aside id="sidebar">
						<?php get_sidebar(); ?>
					</aside>
				</div>
			</div>
		</div>
	
	

</div>
<?php get_footer(); ?>