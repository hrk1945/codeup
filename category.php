<?php get_header(); ?>
<main class="single_page">
  <!-- パンクズリスト -->
  <?php get_template_part('breadcrumb'); ?>


  <!-- 投稿ページ -->
  <div class="single">
    <div class="single_inner category">
      <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="group__flex single">
        <div class="group__time">
          <time datetime="<?php the_time('c')?>"> <?php the_time('Y/m/d')?></time>
        </div>
        <div class="group__btn">
          <a href="<?php the_permalink(); ?>"> <?php $cat = get_the_category();
            $cat = $cat[0]; { echo $cat->name; } ?></a>
        </div>
      </div>
      <h2 class="single_title category">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
        <?php endwhile; endif; ?>


        <!-- ページネーション(前へ・次へをテキスト) -->
        <div class="page_link">
          <div class="link_inner">
            <div class="link_archive">
              <a href="<?php echo esc_url( home_url( '/news/' )); ?>">一覧へ</a>
            </div>
          </div>
        </div>




    </div>

</main>





<?php get_footer(); ?>