<?php get_header(); ?>


<main>
  <!-- 以下mv -->
  <div class="mv">
    <div class="mv__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-1.png" alt="" />
    </div>
    <div class="mv__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-2.png" alt="" />
    </div>
    <div class="mv__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-3.png" alt="" />
    </div>

    <div class="mv__copy active">
      <p class="mv__title">WEB DESIGN CODEUPS</p>
      <p class="mv__sub-title">「想い」をデザインする</p>
    </div>
  </div>

  <!-- グループ -->
  <div id="group" class="group l-group">
    <div class="group__inner">
      <div class="group__flex">
        <div class="group__time">
          <time datetime="2020-07-20">2020.07.20</time>
        </div>
        <div class="group__btn">
          <a href="#">お知らせ</a>
        </div>
      </div>

      <h2 class="group__title">
        <a href="#">
          今後の再拡大の防止とコロナ禍後の働き方をしっかりと検討していくため、2021年10月31日までとしていた在宅勤務期間を当分の間、延長することといたしました。
        </a>
      </h2>
    </div>
    <div class="section__btn">
      <a class="btn btn-group" href="./news.html">すべて見る</a>
    </div>
  </div>

  <!-- コンテント -->
  <section id="content" class="content section--contents">
    <div class="content__inner">
      <div class="section__titles">
        <h2 class="content__title section__title">事業内容</h2>
        <span class="content__sub-title sub-title">Content</span>
      </div>
      <div class="content__items" data-aos="zoom-in">
        <div class="content__item">
          <div class="content__img">
            <a class="content__hover" href="./philosophy.html">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/card-1.png" alt="" />
            </a>
          </div>
          <div class="content__text">
            <p class="content__text-nowrap">経営理念ページへ</p>
          </div>
        </div>
        <div class="content__item">
          <div class="content__img">
            <a class="content__hover" href="./philosophy.html">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/card-2.png" alt="" />
            </a>
          </div>
          <div class="content__text">
            <p>web Integration</p>
          </div>
        </div>
        <div class="content__item">
          <div class="content__img">
            <a class="content__hover" href="./philosophy.html">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/card-3.png" alt="" />
            </a>
          </div>
          <div class="content__text">
            <p>web Creative</p>
          </div>
        </div>
        <div class="content__item">
          <div class="content__img">
            <a class="content__hover" href="./philosophy.html">
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
  <section id="works" class="works section--contents">
    <div class="section__titles">
      <h2 class="works__title section__title">制作実績</h2>
      <span class="works__sub-title sub-title">Works</span>
    </div>
    <div class="works__inner section__inner" data-aos="fade-up">
      <div class="works__contents section__contents">
        <div class="container">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="__img" src="<?php echo get_template_directory_uri(); ?>/images/common/swiper-1.png"
                  alt="" />
              </div>
              <div class="swiper-slide">
                <img class="__img" src="<?php echo get_template_directory_uri(); ?>/images/common/swiper-2.png"
                  alt="" />
              </div>
              <div class="swiper-slide">
                <img class="__img" src="<?php echo get_template_directory_uri(); ?>/images/common/swiper-3.png"
                  alt="" />
              </div>
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
              webサイトの制作とコンサルティングを通じて、
              企業様のビジネス課題を解決いたします。
            </p>
          </div>
          <div class="section__btn">
            <a class="btn" href="./works.html">詳しく見る</a>
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
            <a class="btn" href="./company.html">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ブログ -->
  <section id="blog" class="blog section--contents">
    <div class="section__titles">
      <h2 class="blog__title section__title">ブログ</h2>
      <span class="blog__sub-title sub-title">Blog</span>
    </div>

    <div class="card__section" data-aos="fade-up">
      <div class="blog__cards">
        <a class="blog__card" href="./blog.html">
          <div class="card__inner">
            <div class="card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/blog-1.png" alt="" />
            </div>
            <div class="card__texts">
              <div class="card__title">
                <h2>WEBサイトリニューアル</h2>
              </div>
              <div class="card__text">
                <p>
                  制作実績に「シノハラ株式会社
                  」様のコーポレートサイトリニューアルを掲載。
                </p>
              </div>
              <div class="card__flex">
                <p>制作実績</p>

                <time datetime="2021-07-20">2022.07.20</time>
              </div>
            </div>
          </div>
          <div class="overview__new-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/Newアイコン.png" alt="" />
          </div>
        </a>
        <a class="blog__card" href="./blog.html">
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
      </div>
    </div>
    <div class="section__btn">
      <a class="btn" href="./blog.html">詳しく見る</a>
    </div>
  </section>


</main>
<?php get_footer(); ?>