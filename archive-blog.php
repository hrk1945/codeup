<?php get_header(); ?>
<main>
  <!-- 以下mv -->
  <div class="low__mv">
    <div class="low__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/low__mv.png" alt="" />
    </div>
    <div class="low__copy">
      <p class="low__title">ブログ</p>
    </div>
  </div>
  <!-- パンクズリスト -->
  <?php get_template_part('breadcrumb'); ?>

  <!-- ニュース -->
  <div class="low__news">
    <div class="low__news__inner">
      <ul class="low__lists">
        <li class="current-cat">
          <a class="list__link" href="<?php echo esc_url( get_post_type_archive_link( 'blog' ) ); ?>">すべて</a>
        </li>
        <?php
         $taxonomy_terms = get_terms( 'blog_category', array( 'hide_empty' => false ) );
          foreach ( $taxonomy_terms as $taxonomy_term ) :
         ?>
        <li class="list">
          <a class="list__link" href=" <?php echo esc_url( get_term_link( $taxonomy_term, 'blog_category' ) ); ?>">
            <?php echo esc_html( $taxonomy_term->name ); ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <!-- ブログ -->
  </div>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-4.png" alt="" />
                <?php endif; ?>
              </div>
              <div class="card__texts">
                <div class="card__title">
                  <h2><?php the_title(); ?></h2>
                </div>
                <div class="card__text">
                  <p>
                    <?php echo get_the_content(); ?>
                  </p>
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
          <!-- <a class="blog__card" href="./blog.html">
            <div class="card__inner">
              <div class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-2.png" alt="" />
              </div>
              <div class="card__texts">
                <div class="card__title">
                  <h2>WEBデザイナーの募集開始</h2>
                </div>
                <div class="card__text">
                  <p>
                    自分の能力と裁量を大きくしていきたい。そうした希望をお持ちの方は大歓迎です。
                  </p>
                </div>
                <div class="card__flex">
                  <p>採用情報</p>
                  <time datetime="2021-07-20">2022.11.06</time>
                </div>
              </div>
            </div>
          </a>

          <a class="blog__card" href="./blog.html">
            <div class="card__inner">
              <div class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-3.png" alt="" />
              </div>
              <div class="card__texts">
                <div class="card__title">
                  <h2>「健康経営優良法人2020」に認定</h2>
                </div>
                <div class="card__text">
                  <p>
                    経済産業省によりCODE
                    UPSが「健康経営優良法人2020」に認定されました。
                  </p>
                </div>
                <div class="card__flex">
                  <p>会社広報</p>
                  <time datetime="2021-07-20">2021.07.20</time>
                </div>
              </div>
            </div>
          </a>

          <a class="blog__card" href="./blog.html">
            <div class="card__inner">
              <div class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-4.png" alt="" />
              </div>
              <div class="card__texts">
                <div class="card__title">
                  <h2>年末年始の営業について。</h2>
                </div>
                <div class="card__text">
                  <p>
                    今年も残すところあと僅かになりました。体調に気をつけてください。
                  </p>
                </div>
                <div class="card__flex">
                  <p>会社広報</p>

                  <time datetime="2021-07-20">2021.07.20</time>
                </div>
              </div>
            </div>
          </a>
          <a class="blog__card" href="./blog.html">
            <div class="card__inner">
              <div class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-5.png" alt="" />
              </div>
              <div class="card__texts">
                <div class="card__title">
                  <h2>コーポレートサイト公開</h2>
                </div>
                <div class="card__text">
                  <p>
                    株式会社篠原のコーポレートサイトを実績に追加しました。
                  </p>
                </div>
                <div class="card__flex">
                  <p>会社広報</p>
                  <time datetime="2021-07-20">2021.07.20</time>
                </div>
              </div>
            </div>
          </a>

          <a class="blog__card" href="./blog.html">
            <div class="card__inner">
              <div class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-6.png" alt="" />
              </div>
              <div class="card__texts">
                <div class="card__title">
                  <h2>社内インタビュー</h2>
                </div>
                <div class="card__text">
                  <p>経理担当へインタビューを実施いたしました。</p>
                </div>
                <div class="card__flex">
                  <p>会社広報</p>
                  <time datetime="2021-07-20">2021.07.20</time>
                </div>
              </div>
            </div>
          </a>

          <a class="blog__card" href="./blog.html">
            <div class="card__inner">
              <div class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-7.png" alt="" />
              </div>
              <div class="card__texts">
                <div class="card__title">
                  <h2>コロナウイルス対策について。</h2>
                </div>
                <div class="card__text">
                  <p>
                    詳細はPDFにてご確認ください。体調に気をつけてください。
                  </p>
                </div>
                <div class="card__flex">
                  <p>会社広報</p>

                  <time datetime="2021-07-20">2021.07.20</time>
                </div>
              </div>
            </div>
          </a>
          <a class="blog__card" href="./blog.html">
            <div class="card__inner">
              <div class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-8.png" alt="" />
              </div>
              <div class="card__texts">
                <div class="card__title">
                  <h2>新事業を開始致します。</h2>
                </div>
                <div class="card__text">
                  <p>
                    Analytics、Googleタグマネージャー、Googleデータポータルの設計や設定
                  </p>
                </div>
                <div class="card__flex">
                  <p>会社広報</p>
                  <time datetime="2021-07-20">2021.07.20</time>
                </div>
              </div>
            </div>
          </a>

          <a class="blog__card" href="./blog.html">
            <div class="card__inner">
              <div class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-9.png" alt="" />
              </div>
              <div class="card__texts">
                <div class="card__title">
                  <h2>役員制度について。</h2>
                </div>
                <div class="card__text">
                  <p>今年の役員及び人事異動についてのご説明致します。</p>
                </div>
                <div class="card__flex">
                  <p>会社広報</p>
                  <time datetime="2021-07-20">2021.07.20</time>
                </div>
              </div>
            </div>
          </a> -->
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
    <a href="./index.html"> </a>
  </p>
</main>


<?php get_footer(); ?>