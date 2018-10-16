<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?>   <?php } ?> <?php wp_title(); ?></title>
	<meta name="description" content="Burak ALHAS // hayata dair yorumlar..." />
	<meta name="keywords" content="burakalhas, burak alhas, hayata dair, webmaster, web tasarım, web design" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/animate.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/hint.css" type="text/css" media="screen"/>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link rel="dns-prefetch" href="//code.jquery.com" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernize.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<header>
	<div class="orta">
		<a href="<?php bloginfo('url'); ?>" class="logo animated flipInY hint--right" data-hint="hayata dair yorumlar..."></a>
		<div class="bilgi animated flipInY">paylaşılmamış bilgi, bilgi değildir!</div>
	</div>
	<div class="orta">
		<nav>
			<ul>
				<li><a href="<?php bloginfo('url'); ?>">Ana Sayfa<span>ana gibi</span></a></li>
				<li><a href="<?php bloginfo('url'); ?>/hakkimda">Hakkımda<span>tanı beni</span></a></li>
				<li><a href="<?php bloginfo('url'); ?>/iletisim">İletişim<span>ulaş</span></a></li>
				<li><a href="<?php bloginfo('url'); ?>/reklam-ver">Reklam Ver<span>para $</span></a></li>
				<li><a href="<?php bloginfo('url'); ?>/?rastgele">Rastgele<span>rastgele</span></a></li>
				<li><a href="<?php bloginfo('url'); ?>/portfolio">Portfolio<span>yapmışım</span></a></li>
			</ul>
			<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
			<input type="text" value="" name="s" id="s" class="search" placeholder="" />
			</form>

		</nav>
	</div>
</header>
<div class="temizle"></div>

<div class="orta">