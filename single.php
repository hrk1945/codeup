<?php get_header(); ?>
<main class="single_page">
  <!-- パンクズリスト -->
  <?php get_template_part('breadcrumb'); ?>


  <!-- 投稿ページ -->
  <?php if (have_posts()): ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="single">
    <div class="single_inner">
      <h2 class="single_title">
        <?php the_title(); ?></h2>
      <div class="group__flex single">
        <div class="group__time">
          <time datetime="<?php the_time('c')?>"> <?php the_time('Y/m/d')?></time>
        </div>
        <div class="group__btn">
          <a href="#"> <?php $cat = get_the_category();
            $cat = $cat[0]; { echo $cat->name; } ?></a>
        </div>
      </div>
      <div class="single_img">
        <?php if (has_post_thumbnail()): ?>

        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
      </div>
      <div class="single_text">
        <?php echo get_the_content(); ?>
      </div>





      <!-- ページネーション(前へ・次へをテキスト) -->
      <div class="page_link">
        <div class="link_inner">
          <div class="link_flex">
            <div class="prev">
              <?php previous_post_link('&laquo; %link', '前の記事'); ?>
            </div>
            <div class="next">
              <?php next_post_link('%link &raquo;', '次の記事'); ?>
            </div>
          </div>
          <div class="link_archive">
            <a href="<?php echo esc_url( home_url( '/news/' )); ?>">一覧</a>
          </div>
        </div>
      </div>



      <?php endwhile; endif; ?>

    </div>

</main>





<?php get_footer(); ?>