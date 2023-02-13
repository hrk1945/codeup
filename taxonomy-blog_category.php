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
          <a class="list__link" href="<?php echo esc_url( get_post_type_archive_link( 'blog' ) ); ?>">すべて</a>
        </li>
        <?php $taxonomy_terms = get_terms( 'blog_category', array( 'hide_empty' => false ) );
         foreach ( $taxonomy_terms as $taxonomy_term ) :?>
        <li class="list">
          <a class="list__link" href=" <?php   echo esc_url( get_term_link(   $taxonomy_term, 'blog_category' ) ); ?>">
            <?php echo esc_html( $taxonomy_term->name ); ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <!-- ワークカード一覧 -->

  <section id="blog" class="blog low__blog">
    <div class="blog__inner">
      <div class="card__section">
        <div class="blog__cards">
          <?php if (have_posts()): ?>
          <?php while (have_posts()) : the_post(); ?>
          <a class="blog__card" href="<?php the_permalink(); ?>">
            <div class="card__inner">
              <div class="card__img">
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-img.png" alt="" />
                <?php endif; ?>
              </div>
              <div class="card__texts">
                <div class="card__title">
                  <h2><?php the_title(); ?></h2>
                </div>
                <div class="card__text">

                  <?php remove_filter ('the_content', 'wpautop'); ?>
                  <?php echo wp_trim_words( get_the_content(), 10, '…' ); ?>

                </div>
                <div class="card__flex">
                  <p><?php
						      $taxonomy_terms = get_the_terms($post->ID, 'blog_category'); 
						      if ( $taxonomy_terms ) {
						      echo '<span>'.$taxonomy_terms[0]->name.'</span>';
						     }
                 ?>
                  </p>

                  <time datetime="<?php the_time('c')?>"> <?php the_time('Y/m/d')?></time>
                </div>
              </div>
            </div>

          </a>
          <?php endwhile; endif; ?>

        </div>
      </div>
    </div>
  </section>




  <!-- ページナビ -->
  <div class="wp-pagenavi">
    <?php wp_pagenavi(); ?>
  </div>

  <!-- ページトップ -->
  <p class="low__pagetop">
    <a href="#"> </a>
  </p>

</main>
<?php get_footer(); ?>