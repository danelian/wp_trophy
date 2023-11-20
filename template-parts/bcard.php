<a href="<?php the_permalink(); ?>" class="bcard">
  <div class="bcard-image">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
  </div>
  <div class="bcard-content">
    <h2 class="bcard-title"><?php the_title(); ?></h2>
    <div class="bcard-descr"><?php the_excerpt(); ?></div>
  </div>
</a>