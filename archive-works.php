<?php get_header(); ?>
<main>
  <!-- 以下mv -->
  <div class="low__mv">
    <div class="low__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/low__mv-2.png" alt="" />
    </div>
    <div class="low__copy">
      <p class="low__title">制作実績</p>
    </div>
  </div>
  <!-- パンクズリスト -->
  <?php get_template_part('breadcrumb'); ?>

  <!-- ニュース -->
  <div class="low__news">
    <div class="low__news__inner">
      <ul class="low__lists">
        <li class="list">
          <a class="list__link" href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>">すべて</a>
        </li>
        <?php
    $taxonomy_terms = get_terms( 'works_category', array( 'hide_empty' => false ) );
    foreach ( $taxonomy_terms as $taxonomy_term ) :
  ?>
        <li class="list">
          <a class="list__link" href=" <?php echo esc_url( get_term_link( $taxonomy_term, 'works_category' ) ); ?>">
            <?php echo esc_html( $taxonomy_term->name ); ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <!-- ワークカード一覧 -->

  <div class="achieve__section">
    <div class="achieve__inner">
      <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>
      <a class="work__achieve" href="<?php the_permalink(); ?>">
        <div class="achieve__img">
          <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail('full'); ?>
          <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-4.png" alt="" />
          <?php endif; ?>
        </div>
        <p class="achieve__copy"><?php
						  $taxonomy_terms = get_the_terms($post->ID, 'works_category'); 
						  if ( $taxonomy_terms ) {
						    echo '<span>'.$taxonomy_terms[0]->name.'</span>';
						  }
						?>
        </p>
        <h2 class="achieve__title"><?php the_title(); ?></h2>
      </a>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <!-- ページナビ -->
  <div class="wp-pagenavi">
    <?php wp_pagenavi(); ?>
  </div>


  <!-- ページトップ -->
  <p class="low__pagetop">
    <a href="./works.html"> </a>
  </p>

</main>
<?php get_footer(); ?>