<?php

function replace_content($text)
{
$alt = get_comment_author($id_or_email);
$text = str_replace('alt=\'\'', 'alt=\''.$alt.'\'',$text);
return $text;
}
add_filter('get_avatar','replace_content');

require_once ('sonyorumlar.php');

/**** ONE CIKARILMIS GORSEL ****/ 
 add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 520, 100, true );
 



/*** YAZI OZET ***/

function ozet($max_char, $more_link_text = '(devam??)', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
    $content = strip_tags($content);

   if (strlen($_GET['p']) > 0) {
      echo "";
      echo $content;      
      echo " ";
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        echo "";
        echo $content;
        echo " ";        
   }
   else {
      echo "";
      echo $content;      
      echo " ";
   }
}
 
add_action('init', 'rastgele_yazi');
function rastgele_yazi(){
    if ( isset($_GET['rastgele']) ){
 
$random = new WP_Query('orderby=rand&showposts=1&cat=-314,-512');
if ($random->have_posts()) {
    while ($random->have_posts()) : $random->the_post();
        $URL = get_permalink();
    endwhile; ?>
     
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Refresh" content="0; url=<?php echo $URL; ?>">
</head>
<body>
</body>
</html>
<?php }
        die;
    }
}


?>