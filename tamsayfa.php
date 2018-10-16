<?php /*
Template Name: Tam Sayfa
*/
?>
<?php get_header(); ?>
 <div class="temizle"></div>
<div class="tamsayfa">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="baslik"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
	<p><?php the_content(); ?></p>
	<div class="temizle"></div> 
	<?php endwhile; else: ?>
		<?php endif; ?>
</div>
 
<?php get_footer(); ?>