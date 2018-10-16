<?php get_header(); ?>

<div class="sol">
		<?php query_posts($query_string . '&cat=-13,-14,-15'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section>
			<div class="baslik"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
			<a href="<?php the_permalink() ?>" class="onecikarilmis"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else {echo '';}?></a>
			<div class="anasayfa"><p><?php ozet(389)?></p></div>
			<div class="ayrac"></div>
			<div class="kutucuk"><i class="fa fa-user"></i><span style="font-size:11px;padding-left:10px"><?php the_author() ?></span></div>
			<div class="kutucuk"><i class="fa fa-comments"></i><span style="font-size:11px;padding-left:10px"><?php comments_number('0 Yorum', '1 Yorum ', '% Yorum' );?></span></div>
			<div class="kutucuk"><i class="fa fa-heart"></i><span style="font-size:11px;padding-left:10px"><?php the_category() ?></span></div>
			<a href="<?php the_permalink() ?>" class="devami">Devamını Oku!</a>
		</section>
		<?php endwhile; else: ?>
			<?php endif; ?>
			<div class='sayfala' style="margin-bottom:30px;"> 
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>	</div>
			
		<div class="temizle"></div>
	</div>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>