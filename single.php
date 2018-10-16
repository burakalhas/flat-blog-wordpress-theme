 <?php get_header(); ?>
<div class="sol">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="yaziic">
			<div class="baslik"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
			<p>
			<?php $youtube =  get_post_meta($post->ID,'youtube', true);
if ($youtube!="") { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/video/jwplayer.js"></script>
<div id='mediaspace'>This text will be replaced</div>
<script type='text/javascript'>
  jwplayer('mediaspace').setup({
    'flashplayer': '<?php bloginfo('template_url'); ?>/video/player.swf',
    'file': '<?php echo $youtube; ?>',
    'controlbar': 'bottom',
    'width': '630',
    'height': '320'
  });
</script>
<?php } ?>
			<?php the_content(); ?></p>
			<div class="temizle"></div>
		</div>
		
		<div class="yazarkismi">
			<div class="baslik"><?php the_author(); ?> Hakkinda Kisa Bilgi</div>
			<div class="yazaresim"><?php echo  get_avatar( get_the_author_email(), '100' ); ?></div>
			<p><?php  the_author_description(); ?></p>
			<div class="temizle"></div>
		</div>
		<div id="yorumalani">
		<div class="baslik">Konuya Yapilan Yorumlar!</div>
		<?php comments_template(); ?>
		<div class="temizle"></div>
		</div>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>