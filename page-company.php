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
      <dd>1999年（平成11年）11月9日</dd>
      <dt>資本金</dt>
      <dd>3000万</dd>
      <dt>売上高</dt>
      <dd>1億</dd>
      <dt>代表者</dt>
      <dd>篠原 大輝</dd>
      <dt>従業員数</dt>
      <dd>900人</dd>
      <dt>事業内容</dt>
      <dd>
        【WEBインテグレーション】
        デザイン・インターフェイス設計・HTML制作
        /コンテンツ企画・制作・ライティング・撮影・取材/WEBサイト運用・保守/SEO・SEMコンサルティング・リスティング広告運用
        <div class="company-margin"></div>
        【システムインテグレーション】
        WEBシステム開発・運用・保守
        <div class="company-margin"></div>
        【モバイルソリューション】
        モバイルサイト構築に関する企画戦略立案・調査・コンサルティング/コンテンツ開発・デザイン・HTML制作Android・iPhoneサイト制作・アプリ制作
      </dd>

      <dt>主要取引先</dt>
      <dd>Nkkグループ企業各社<br>
        JTbグループ企業各社<br>
        株式会社o島屋<br>
        郵便株式会社<br>
        パーソルキャリア株式会社<br>
        山士通株式会社<br>
        縄文株式会社<br>
        商店株式会社<br>
        株式会社LIL <br>
        リクルートグループ企業各社<br>
        (五十音順)</dd>
      <dt>沿 革</dt>
      <dd>
        1999.11
        東京都渋谷区にて有限会社code設立<br>

        2001.08
        東京都渋谷区広尾に事務所移転<br>

        2003.04
        東京都渋谷区恵比寿に事務所移転<br>

        2005.05
        東京都渋谷区広尾に本社移転<br>

        2006.02
        資本金1000万円に増資<br>

        2006.05
        株式会社codeに組織変更<br>

        2007.10
        株式会社ファーストコンサルティングと業務提携<br>

        2008.05
        連携研究センターにてcodeラボ設立<br>

        2008.04
        資本金2000万円に増資<br>

        2013.04
        東京都渋谷区東に本社移転<br>

        2014.05
        大阪府西区にcodeラボ設立移転<br>

        2017.06
        株式市場CODEUPS設立<br>

        2020.01
        大阪府北区にCODEラボ岩手移転
      </dd>
      <dt>所在地</dt>
      <dd>大阪府西区</dd>
    </dl>
  </div>

  <!-- Googleマップ -->
  <div class=" map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13124.016620657356!2d135.48005569999998!3d34.6798446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6519918ff3f%3A0xdb3f631c5e236022!2z5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy6!5e0!3m2!1sja!2sjp!4v1671963394152!5m2!1sja!2sjp"
      width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>



  <!-- ページトップ -->
  <p class="low__pagetop">
    <a href="#"> </a>
  </p>
</main>

<?php get_footer(); ?>