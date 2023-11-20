<?php get_header(); ?>

<article class="article">
  <div class="container">
    <h1 class="page-title">Как завязывать узлы?</h1>
    <img src="/img/single-image.jpg" class="article-image" alt="">
    <div class="article-date">15.10.2022</div>
    <blockquote>
      <p>
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Quis
        autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
        dolorem eum fugiat quo voluptas nulla pariatur?
      </p>
    </blockquote>
    <p>
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
      aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. .Lorem
      ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
      aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.
    </p>
    <ul>
      <li>Sed ut perspiciatis unde omnis iste natus</li>
      <li>Sed ut perspiciatis unde omnis iste natus</li>
      <li>Sed ut perspiciatis unde omnis iste natus</li>
    </ul>
    <ol>
      <li>Sed ut perspiciatis unde omnis iste natus</li>
      <li>Sed ut perspiciatis unde omnis iste natus</li>
      <li>Sed ut perspiciatis unde omnis iste natus</li>
    </ol>
    <h2>Lorem ipsum dolor</h2>
    <h3>Lorem ipsum dolor</h3>
    <div class="row-2">
      <div class="col">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
          et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
          ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
          aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
          .Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
      </div>
    </div>
    <table>
      <thead>
        <tr>
          <th>Lorem ipsum dolor</th>
          <th>Lorem ipsum dolor</th>
          <th>Lorem ipsum dolor</th>
          <th>Lorem ipsum dolor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Lorem ipsum dolor</td>
          <td>Lorem ipsum dolor</td>
          <td>Lorem ipsum dolor</td>
          <td>Lorem ipsum dolor</td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor</td>
          <td>Lorem ipsum dolor</td>
          <td>Lorem ipsum dolor</td>
          <td>Lorem ipsum dolor</td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor</td>
          <td>Lorem ipsum dolor</td>
          <td>Lorem ipsum dolor</td>
          <td>Lorem ipsum dolor</td>
        </tr>
      </tbody>
    </table>
  </div>
</article>

<section class="read-also">
  <div class="container">
    <h3 class="read-also__title"><?php echo __( 'Read also', 'trophy' ); ?></h3>
    <?php		
    global $post;
    $query = new WP_Query( [
      'post_type'      => 'post',
      'posts_per_page' => 4,
      'orderby' => 'rand',
      'order'    => 'ASC'
    ]);

    if ( $query->have_posts() ) { ?>
      <div class="blog__cards">
      <?php while ( $query->have_posts() ) {
        $query->the_post();
        get_template_part('template-parts/bcard');
      } ?>
      </div>
    <?php } else {} ?>
  </div>
</section>

<?php get_footer(); ?>