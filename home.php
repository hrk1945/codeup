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

            <a href="#"> <?php $cat = get_the_category();
            $cat = $cat[0]; { echo $cat->name; } ?></a>

          </div>
        </div>

        <h2 class="group__title contact__group">
          <a href="<?php the_permalink(); ?>">
            <?php echo get_the_content(); ?>
            <!-- 現在、緊急事態宣言が解除され感染者数も減少していますが、今後の再拡大の防止とコロナ禍後の働き方をしっかりと検討していくため、2021年10月31日までとしていた在宅勤務期間を当分の間、延長することといたしました。 -->
          </a>
        </h2>
      </div>
    </div>
    <?php endwhile; endif; ?>
    <!-- <div id=" group" class="group l-group">
            <div class="group__inner">
              <div class="group__flex">
                <div class="group__time">
                  <time datetime="2020-07-20">2022.10.20</time>
                </div>
                <div class="group__btn">
                  <a href="#">制作実績</a>
                </div>
              </div>

              <h2 class="group__title contact__group slow">
                <a href="">
                  制作実績に「シノハラ株式会社」様のHPを掲載しました。
                </a>
              </h2>
            </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2022.07.20</time>
            </div>
            <div class="group__btn">
              <a href="#">制作実績</a>
            </div>
          </div>

          <h2 class="group__title contact__group">
            <a href="">
              制作実績に「shinohara株式会社」様のサービスサイトリニューアルを掲載しました。
            </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2021.02.20</time>
            </div>
            <div class="group__btn">
              <a href="#">社内広報</a>
            </div>
          </div>

          <h2 class="group__title contact__group slow">
            <a href="">
              国の緊急事態宣言、東京都の措置などに基づき、在宅勤務期間を2020年5月6日まで延長いたします。
            </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2020.03.20</time>
            </div>
            <div class="group__btn">
              <a href="#">社内広報</a>
            </div>
          </div>

          <h2 class="group__title contact__group">
            <a href="">
              新サービス開始のお知らせ 「Google
              アナリティクス設計・設定支援」をはじめました
            </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2020.02.20</time>
            </div>
            <div class="group__btn">
              <a href="#">お知らせ</a>
            </div>
          </div>

          <h2 class="group__title contact__group slow">
            <a href=""> 社内経理担当へインタビューしました </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2020.01.20</time>
            </div>
            <div class="group__btn">
              <a href="#">お知らせ</a>
            </div>
          </div>

          <h2 class="group__title contact__group">
            <a href="">
              記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。
            </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2020.01.01</time>
            </div>
            <div class="group__btn">
              <a href="#">お知らせ</a>
            </div>
          </div>

          <h2 class="group__title contact__group slow">
            <a href=""> 年末年始営業について </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2019.12.20</time>
            </div>
            <div class="group__btn">
              <a href="#">制作実績</a>
            </div>
          </div>

          <h2 class="group__title contact__group">
            <a href="">
              制作実績に「株式市場篠原」様のサイトリニューアルを掲載しました。
            </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2019.11.20</time>
            </div>
            <div class="group__btn">
              <a href="#">制作実績</a>
            </div>
          </div>

          <h2 class="group__title contact__group slow">
            <a href="">
              制作実績に「hiroki
              shinohara」様のサイトリニューアルを掲載しました。
            </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2019.10.20</time>
            </div>
            <div class="group__btn">
              <a href="#">お知らせ</a>
            </div>
          </div>

          <h2 class="group__title contact__group">
            <a href=""> 社内におけるインフルエンザ感染対策について </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2019.09.20</time>
            </div>
            <div class="group__btn">
              <a href="#">制作実績</a>
            </div>
          </div>

          <h2 class="group__title contact__group slow">
            <a href="">
              制作実績に「shinohara株式会社」様のサービスサイトリニューアルを掲載しました。
            </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2019.08.20</time>
            </div>
            <div class="group__btn">
              <a href="#">社内広報</a>
            </div>
          </div>

          <h2 class="group__title contact__group">
            <a href=""> 役員人事のお知らせ </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2019.07.20</time>
            </div>
            <div class="group__btn">
              <a href="#">お知らせ</a>
            </div>
          </div>

          <h2 class="group__title contact__group slow">
            <a href="">
              CODE
              UPSは、「健康企業宣言」で健康経営への取組みが高く評価され、健康保険組合連合会東京連合会より、2017年12月5日付で「健康優良企業」として認定され「銀の認定」を取得いたしました。
            </a>
          </h2>
        </div>
      </div>

      <div id="group" class="group l-group">
        <div class="group__inner">
          <div class="group__flex">
            <div class="group__time">
              <time datetime="2020-07-20">2017.07.20</time>
            </div>
            <div class="group__btn">
              <a href="#">お知らせ</a>
            </div>
          </div>

          <h2 class="group__title contact__group">
            <a href="">
              社員が心身ともに健康で継続して働くことができるよう、
              健康優良企業を目指し健康経営に取組むことを宣言しました。
            </a>
          </h2>
        </div>
      </div> -->
  </div>

  <!-- スワイパー -->
  <div class="swiper-container swiper1">
    <!-- スライド -->
    <div class="swiper-wrapper">
      <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="swiper-slide slider1">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-4.png" alt="" />
        </a>
        <p><?php $cat = get_the_category();
            $cat = $cat[0]; { echo $cat->name; } ?></p>
      </div>
      <?php endwhile; endif; ?>


      <div class="swiper-slide slider1">
        <a href="">
          <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail('full'); ?>
          <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-4.png" alt="" />
          <?php endif; ?>
        </a>
        <p>PR</p>
      </div>
      <div class="swiper-slide slider1">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/a-4.png" alt="" />
        </a>
        <p>culture</p>
      </div>
      <div class="swiper-slide slider1">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-2.png" alt="" />
        </a>
        <p>Performance</p>
      </div>
      <div class="swiper-slide slider1">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-9.png" alt="" />
        </a>
        <p>interview</p>
      </div>
    </div>
  </div>

  <!-- ページナビ -->
  <div class="wp-pagenavi">
    <?php wp_pagenavi(); ?>
  </div>
  <!-- コンタクト -->
  <section id="contact" class="contact section--contents">
    <div class="contact__inner">
      <div class="contact__contents">
        <div class="section__titles">
          <h2 class="contact__title section__title">お問い合わせ</h2>
          <span class="contact__sub-title sub-title">Contact</span>
        </div>
        <p class="contact__text">
          お仕事・お見積のご依頼、お問合せ、その他ご相談を承ります。
          内容を確認後、各担当からご連絡いたします。
        </p>
        <div class="section__btn section__btn-contact">
          <a class="btn" href="./contact.html">お問い合わせへ</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ページトップ -->
  <p class="low__pagetop">
    <a href="./news.html"> </a>
  </p>
</main>


<?php get_footer(); ?>