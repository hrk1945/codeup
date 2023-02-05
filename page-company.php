<?php get_header(); ?>

<main>
  <!-- 以下mv -->
  <div class="low__mv">
    <div class="low__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/company.png" alt="" />
    </div>
    <div class="low__copy">
      <p class="low__title">企業概要</p>
    </div>
  </div>
  <!-- パンクズリスト -->
  <?php get_template_part('breadcrumb'); ?>

  <!-- 会社概要 -->

  <div class="company">
    <dl>
      <dt>会社名</dt>
      <dd>株式会社CodeUps</dd>
      <dt>設立</dt>
      <dd>大阪府　西区</dd>
      <dt>資本金</dt>
      <dd>3000万</dd>
      <dt>売上高</dt>
      <dd>1億</dd>
      <dt>代表者</dt>
      <dd>篠原　大輝</dd>
      <dt>従業員数</dt>
      <dd>900人</dd>
      <dt>事業内容</dt>
      <dd>webサイト制作・運営/アプリ開発・運営</dd>
      <dt>所在地</dt>
      <dd>大阪府</dd>
    </dl>
  </div>

  <!-- Googleマップ -->
  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13124.016620657356!2d135.48005569999998!3d34.6798446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6519918ff3f%3A0xdb3f631c5e236022!2z5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy6!5e0!3m2!1sja!2sjp!4v1671963394152!5m2!1sja!2sjp"
      width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>



  <!-- ページトップ -->
  <p class="low__pagetop">
    <a href="./company.html"> </a>
  </p>
</main>

<?php get_footer(); ?>