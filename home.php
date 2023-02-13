<?php get_header(); ?>

<main>
  <!-- 以下mv -->
  <div class="low__mv">
    <div class="low__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/contact-mv.png" alt="" />
    </div>
    <div class="low__copy">
      <p class="low__title">お知らせ</p>
    </div>
  </div>
  <!-- パンクズリスト -->
  <?php get_template_part('breadcrumb'); ?>

  <!-- ニュース -->
  <div class="low__news home">
    <div class="low__news__inner">
      <ul class="low__lists">
        <li class="list">
          <a class="list__link" href="">
            <?php
        $args = array(
       'title_li' => '', // デフォルトの「カテゴリー」を非表示
        'show_option_all' => 'すべて', // 全カテゴリーに表示する文字(空欄にすると全カテゴリーのメニューが非表示)
         'echo'     => 0,
        );

         $categories = wp_list_categories( $args );
        $cat_serch  = '"cat-item'; // 変換前の文字列(変更不要)
          $cat_replace = '"list__link'; // 変換後の文字列(liタグに付与したいclass名を書く)
         $categories  = str_replace( $cat_serch, $cat_replace, $categories );
          if(strpos($categories,'current-cat') == false) {
         $categories = str_replace('cat-item-all', 'list__link current-cat', $categories);
        } // 'tab-menu'には変換後の文字列で書いたclass名を書く
         echo $categories;
          ?>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- カテゴリ一覧 -->

  <div class="contact-group">
    <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
    <div id="group" class="group l-group">

      <div class="group__inner">
        <div class="group__flex">
          <div class="group__time">
            <time datetime="<?php the_time('c')?>"> <?php the_time('Y/m/d')?></time>
          </div>
          <div class=" group__btn">

            <a href="<?php the_permalink(); ?>"> <?php $cat = get_the_category();
            $cat = $cat[0]; { echo $cat->name; } ?></a>

          </div>
        </div>

        <h2 class="group__title contact__group">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>

          </a>
        </h2>


      </div>
    </div>
    <?php endwhile; endif; ?>

  </div>

  <!-- スワイパー -->
  <div class="swiper-container swiper1">
    <!-- スライド -->
    <div class="swiper-wrapper">
      <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="swiper-slide slider1">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail('full'); ?>
          <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-4.png" alt="" />
          <?php endif; ?>
        </a>
        <p><?php $cat = get_the_category();
            $cat = $cat[0]; { echo $cat->name; } ?></p>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>



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