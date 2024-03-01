<?php 

if ( isset($args['i']) && $args['i'] > 16 )
    $scard = 'scard scard_hidden';
else
    $scard = 'scard';

?>

<a href="<?php the_permalink(); ?>" class="<?php echo $scard; ?>">
  <div class="scard-image">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
  </div>
  <h2 class="scard-title"><?php the_title(); ?></h2>
</a>