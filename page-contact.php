<?php get_header(); ?>


<main>
  <!-- 以下mv -->
  <div class="low__mv">
    <div class="low__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/contact-2.png" alt="" />
    </div>
    <div class="low__copy">
      <p class="low__title">お問い合せ</p>
    </div>
  </div>
  <!-- パンクズリスト -->
  <?php get_template_part('breadcrumb'); ?>

  <!-- コンタクトフォーム -->
  <div class="Form">

    <?php echo do_shortcode('[contact-form-7 id="66" title="お問い合わせ"]'); ?>
  </div>
  <!-- ページトップ -->
  <p class="low__pagetop">
    <a href="#"> </a>
  </p>
</main>
<?php get_footer(); ?>