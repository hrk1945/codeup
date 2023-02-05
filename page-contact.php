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

    <!-- <div class="Form-Item">
      <p class="Form-Item-Label">
        <span class="Form-Item-Label-Required">必須</span>お名前
      </p>
      <input type="text" class="Form-Item-Input" placeholder="例）山田太郎" />
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label">
        <span class="Form-Item-Label-Required">必須</span>電話番号
      </p>
      <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000" />
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label">
        <span class="Form-Item-Label-Required">必須</span>メールアドレス
      </p>
      <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com" />
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label isMsg">
        <span class="Form-Item-Label-Required">必須</span>お問い合わせ
      </p>
      <textarea class="Form-Item-Textarea"></textarea>
    </div>
    <div class="form-btn">
      <input type="submit" class="Form-Btn" value="送信する" />
    </div> -->
  </div>
  <!-- ページトップ -->
  <p class="low__pagetop">
    <a href="./contact.html"> </a>
  </p>
</main>
<?php get_footer(); ?>