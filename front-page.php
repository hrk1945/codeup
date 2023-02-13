<?php get_header(); ?>

<!-- navリスト変数 -->
<?php
$top = esc_url( home_url( '/' ));
$news = esc_url( home_url( '/news/' ));
$philosophy = esc_url( home_url( '/philosophy/' ));
$works = esc_url( home_url( '/works/' ));
$company = esc_url( home_url( '/company/' ));
$blog = esc_url( home_url( '/blog/' ));
$contact = esc_url( home_url( '/contact/' ));
?>

<main>
  <!-- 以下mv -->
  <div class="mv">
    <div class="mv__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-1.png" alt="WEB DESIGN CODEUPS" />
    </div>
    <div class="mv__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-2.png" alt="WEB DESIGN CODEUPS" />
    </div>
    <div class="mv__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-3.png" alt="WEB DESIGN CODEUPS" />
    </div>

    <div class="mv__copy active">
      <p class="mv__title">WEB DESIGN CODEUPS</p>
      <p class="mv__sub-title">「想い」をデザインする</p>
    </div>
  </div>

  <!-- グループ -->

  <?php
    $args = array( 
    'post_type' => 'post',
    'posts_per_page' => 1,
   ); 
   $the_query = new WP_Query($args); if($the_query->have_posts()):
   ?>
  <div id="group" class="group l-group">
    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
    <div class="group__inner">
      <div class="group__flex">
        <div class="group__time">
          <time datetime="<?php the_time('c')?>"> <?php the_time('Y/m/d')?></time>
        </div>
        <div class="group__btn">
          <a href="<?php the_permalink(); ?>"> <?php $cat = get_the_category();
            $cat = $cat[0]; { echo $cat->name; } ?></a>
        </div>
      </div>

      <h2 class="group__title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
    </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
    <div class="section__btn">
      <a class="btn btn-group" href="<?php echo esc_url( home_url( '/news/' )); ?>">一覧へ</a>
    </div>
  </div>


  <!-- コンテント -->
  <section class="content section--contents" id="content">
    <div class="content__inner">
      <div class="section__titles">
        <h2 class="content__title section__title">事業内容</h2>
        <span class="content__sub-title sub-title">Content</span>
      </div>
      <div class="content__items" data-aos="zoom-in">
        <div class="content__item">
          <div class="content__img">
            <a class="content__hover" href="<?php echo esc_url( home_url( '/philosophy/' )); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/card-1.png" alt="" />
            </a>
          </div>
          <div class="content__text">
            <p class="content__text-nowrap">web consulting</p>
          </div>
        </div>
        <div class="content__item">
          <div class="content__img">
            <a class="content__hover" href="<?php echo esc_url( home_url( '/philosophy/' )); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/card-2.png" alt="" />
            </a>
          </div>
          <div class="content__text">
            <p>web Integration</p>
          </div>
        </div>
        <div class="content__item">
          <div class="content__img">
            <a class="content__hover" href="<?php echo esc_url( home_url( '/philosophy/' )); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/card-3.png" alt="" />
            </a>
          </div>
          <div class="content__text">
            <p>web Creative</p>
          </div>
        </div>
        <div class="content__item">
          <div class="content__img">
            <a class="content__hover" href="<?php echo esc_url( home_url( '/philosophy/' )); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/card-4.png" alt="" />
            </a>
          </div>
          <div class="content__text">
            <p>web Marketing</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ワークス -->

  <?php
     $args = array(
     'post_type' => 'works',
     'posts_per_page' => 3,
      );  
   $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>

  <section id="works" class="works section--contents">
    <div class="section__titles">
      <h2 class="works__title section__title">制作実績</h2>
      <span class="works__sub-title sub-title">Works</span>
    </div>
    <div class="works__inner section__inner" data-aos="fade-up">
      <div class="works__contents section__contents">
        <!-- スワイパー -->
        <div class="container">
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
              <div class="swiper-slide">
                <a href="<?php the_permalink(); ?>">

                  <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-img.png" alt="" />
                  <?php endif; ?>
                </a>
              </div>
              <?php endwhile; wp_reset_postdata(); endif; ?>

            </div>
          </div>
          <!-- ページネーション -->
          <div class="swiper-pagination"></div>
        </div>

        <div class="works__text-section text__section">
          <div class="works__text-title section__text-title">
            <h2>webサイトリニューアル・新規構築</h2>
          </div>
          <div class="works__text section__text">
            <p>
              コーポレートサイト、採用サイト、メディアサイト、ECサイトなど多様なwebサイト制作を行っています。ヒアリング、アクセスログ分析、競合調査等を踏まえ、webサイトのあるべき姿を企画·設計し、クライアント様､webサイトの利用者が満足する質の高いwebサイトを構築いたします。
            </p>
          </div>
          <div class="section__btn">
            <a class="btn" href="<?php echo esc_url( home_url( '/works/' )); ?>">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- オーバービュー -->
  <section id="overview" class="overview section--contents">
    <div class="section__titles">
      <h2 class="overview__title section__title">企業概要</h2>
      <span class="overview__sub-title sub-title">Overview</span>
    </div>
    <div class="overview__inner section__inner" data-aos="fade-up">
      <div class="overview__contents section__contents">
        <div class="overview__img">
          <img class="__img" src="<?php echo get_template_directory_uri(); ?>/images/common/overview.png" alt="" />
        </div>
        <div class="overview__text-section text__section">
          <div class="overview__text-title section__text-title">
            <h2>「想い」をデザインする</h2>
          </div>
          <div class="overview__text section__text">
            <p>
              デザインの力で想いを届ける。
              お客さまのビジネス成果に貢献できるよう、「想像力と創造力」を磨き、付加価値の高い、クオリティの高いサービスを提供してまいります。
            </p>
          </div>
          <div class="section__btn">
            <a class="btn" href="<?php echo esc_url( home_url( '/company/' )); ?>">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ブログ -->
  <?php
     $args = array(
     'post_type' => 'blog',
     'posts_per_page' => 3,
      );  
      $the_query = new WP_Query($args); if($the_query->have_posts()):
    ?>
  <section id="blog" class="blog        section--contents">
    <div class="section__titles">
      <h2 class="blog__title section__title">ブログ</h2>
      <span class="blog__sub-title sub-title">Blog</span>
    </div>

    <div class="card__section" data-aos="fade-up">
      <div class="blog__cards">
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <a class="blog__card" href="<?php echo esc_url( home_url( '/blog/' )); ?>">
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
						?></p>

                <time datetime="<?php the_time('c')?>"> <?php the_time('Y/m/d')?></time>
              </div>
            </div>
          </div>
          <div class="blog__new-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/Newアイコン.png" alt="" />
          </div>
        </a>
        <?php endwhile; wp_reset_postdata(); endif; ?>

      </div>
    </div>
    <div class="section__btn">
      <a class="btn" href="<?php echo esc_url( home_url( '/blog/' )); ?>">詳しく見る</a>
    </div>
  </section>


</main>
<?php get_footer(); ?>