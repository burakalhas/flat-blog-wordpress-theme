<div class="sag">
	
		<div id="block">
			<div class="baslik">Kısaca Beni Tanı! <a href="http://www.burakalhas.com.tr/hakkimda" class="sag">Tamamı</a></div>
				<div class="benitani"></div>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper </p>
				<ul class="sosyal">
				<a class="hint--bottom" data-hint="Facebook"  href="https://www.facebook.com/exc.media"><i class="fa fa-facebook-square"></i></a>
				<a class="hint--bottom" data-hint="Instagram" href="https://instagram.com/asosyalistcom"><i class="fa fa-instagram"></i></a>
				<a class="hint--bottom" data-hint="Twitter" href="https://twitter.com/burakalhas"><i class="fa fa-twitter-square"></i></a>
				<a class="hint--bottom" data-hint="Skype" href="#asosyalpiskopos"><i class="fa fa-skype"></i></a>
				</ul>
		</div>
	
		<div id="block">
			<div class="baslik">Kategoriler</div>
			<ul class="yanyana">
				<?php wp_list_categories('title_li='); ?>
			</ul>
			<div class="temizle"></div>
		</div>
		
		<div id="block">
			<div class="baslik">Son Yorumlar</div>
			<div id="resimli-son-yorumlar">
				<ul><?php resimli_son_yorumlar($args); ?></ul>		
            </div>
			<!-- Resimli Son Yorumlar: Bitiş -->
			</ul>		
		</div>
		<div style="margin-top:20px;"></div>
		<a class="twitter-timeline" href="https://twitter.com/BurakAlhas" data-widget-id="462851110495997952">@BurakAlhas kullanıcısından Tweetler</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		
		<div id="block">
			<div class="baslik">Son Yazdıklarım</div>
			<div id="resimli-son-yorumlar">
			<?php query_posts('showposts=5');  while ( have_posts() ) : the_post(); ?>
				<ul>
					<li>
						<span class="avatarlar"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else {echo '';}?></span>
						<span class="yazar"><?php the_title(); ?></span> 
						<br /> 
						<a href="<?php the_permalink() ?>"><span class="icerik"><?php ozet(40)?>...</span></a>
					</li>
				</ul>
				 <?php endwhile; ?>
            </div>
			<!-- Resimli Son Yorumlar: Bitiş -->
			</ul>		
		</div>
		
		
		<div id="block">
			<div class="baslik">Arkadaşlarım</div>
			<ul class="yanyana">
				<li><a href="http://www.tahsinsungur.com/">Tahsin Sungur</a></li>
				<li><a href="http://news8online.com/">Oğuzhan İsa Temiz</a></li>
			</ul>
			<div class="temizle"></div>
		</div>
		
		
		
	</div>
<div class="temizle"></div>