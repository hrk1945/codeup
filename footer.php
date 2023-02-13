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
<!-- <?php if(!is_page('contact')): ?>
 <-- コンタクト -->
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
        <a class="btn" href="<?php echo $contact; ?>">お問い合わせへ</a>
      </div>
    </div>
  </div>
</section>
<?php endif;?> -->
<!-- ページトップ -->
<p class="pagetop">
  <a href="#"> </a>
</p>

<footer class="footer sp-footer">
  <div class="footer__inner">
    <div class="footer__lists">
      <ul class="footer__list">
        <li>
          <h2 class="footer__logo logo sp-logo">
            <a class="logo__title" href="./index.html">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="" />
            </a>
          </h2>
        </li>
        <li><a href="<?php echo $top; ?>">トップ</a></li>
        <li><a href="<?php echo $philosophy; ?>">事業内容</a></li>
        <li><a href="<?php echo $works; ?>">制作実績</a></li>
        <li><a href="<?php echo $company; ?>">企業概要</a></li>
        <li><a href="<?php echo $blog; ?>">ブログ</a></li>
        <li class="footer__list-white">
          <a href="<?php echo $contact; ?>">お問い合わせ</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="copywrite">
    <div class="copywrite__inner">
      <p><span>&copy; </span> 2021 CodeUps Inc.</p>
    </div>
  </div>
</footer>

<footer class="footer l-footer">
  <div class="footer__inner">
    <h2 class="footer__logo logo">
      <a class="logo__title" href="<?php echo $top; ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="" />
      </a>
    </h2>
    <!-- pcフッター -->

    <div class="footer__list pc-list">
      <ul class="pc-list__items">
        <li class="pc-list__item"><a href="<?php echo $news; ?>">お知らせ</a></li>
        <li class="pc-list__item">
          <a href="<?php echo $philosophy; ?>">事業内容</a>
        </li>
        <li class="pc-list__item"><a href="<?php echo $works; ?>">制作実績</a></li>
        <li class="pc-list__item"><a href="<?php echo $company; ?>">企業概要</a></li>
        <li class="pc-list__item"><a href="<?php echo $blog; ?>">ブログ</a></li>
        <li class="pc-list__item">
          <a class="hover" href="<?php echo $contact; ?>">お問い合わせ</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="copywrite">
    <div class="copywrite__inner">
      <p><span>&copy; </span> 2021 CodeUps Inc.</p>
    </div>
  </div>
</footer>
<!-- <div class="loading"> -->
<!-- <p>
        <span data-text="r">r</span>
        <span data-text="e">e</span>
        <span data-text="a">a</span>
        <span data-text="c">c</span>
        <span data-text="t">t</span>
        <span data-text="i">i</span>
        <span data-text="v">v</span>
        <span data-text="e">e</span>
        <span data-text="d">d</span>
        <span data-text="e">e</span>
        <span data-text="s">s</span>
        <span data-text="i">i</span>
        <span data-text="g">g</span>
        <span data-text="n">n</span>
      </p> -->
<!-- <p1> 採用担当 様</p1>
</div> -->

<?php wp_footer(); ?>
</body>

</html>