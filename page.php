 <?php get_header(); ?>
<div class="sol">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="yaziic">
			<div class="baslik"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
			<p><?php the_content(); ?></p>
			<div class="temizle"></div>
		</div>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>