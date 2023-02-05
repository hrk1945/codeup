<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<!-- 変数たち -->
<?php
$top = esc_url( home_url( '/' ));
$news = esc_url( home_url( '/news/' ));
$philosophy = esc_url( home_url( '/philosophy/' ));
$works = esc_url( home_url( '/works/' ));
$company = esc_url( home_url( '/company/' ));
$blog = esc_url( home_url( '/blog/' ));
$contact = esc_url( home_url( '/contact/' ));
?>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header l-header js-header">
    <div class="header__inner">
      <?php if(is_front_page()): ?>
      <h1 class="header__logo logo">
        <?php else :?>
        <div class="header__logo logo">
          <?php endif; ?>
          <a class="logo__title" href="<?php echo $top; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="" />
          </a>
          <?php if(is_front_page()): ?>
      </h1>
      <?php else :?>
    </div>
    <?php endif; ?>

    <!-- pcナビ -->
    <div class="header__list pc-list">
      <ul class="pc-list__items">
        <li class="pc-list__item"><a href="<?php echo $news; ?>">お知らせ</a></li>
        <li class="pc-list__item">
          <a href="<?php echo $philosophy; ?>">事業内容</a>
        </li>
        <li class="pc-list__item"><a href="<?php echo $works; ?>">制作実績</a></li>
        <li class="pc-list__item"><a href="<?php echo $company; ?>">企業概要</a></li>
        <li class="pc-list__item pc-list__item-blog">
          <a href="<?php echo $blog; ?>">ブログ</a>
        </li>
        <li class="pc-list__item pc-list__item-white">
          <a class="hover" href="<?php echo $contact; ?>">お問い合わせ</a>
        </li>
      </ul>
    </div>
    <!-- ハンバーガー -->
    <div class="header__hamburger">
      <button type="button" id="js-hamburger" class="hamburger" aria-controls="js-global-menu" aria-expanded="false"
        aria-label="メニューを開閉する">
        <span class="hamburger__line"> </span>
      </button>
    </div>
    <!-- スマホナビ -->
    <nav class="sp-list" id="js-global-menu" aria-hidden="true">
      <ul class="sp-list__items">
        <li class="sp-list__item">
          <a href="<?php echo $top; ?>">トップ</a>
        </li>
        <li class="sp-list__item">
          <a href="<?php echo $news; ?>">お知らせ</a>
        </li>
        <li class="sp-list__item">
          <a href="<?php echo $philosophy; ?>">事業内容</a>
        </li>
        <li class="sp-list__item">
          <a href="<?php echo $works; ?>">制作実績</a>
        </li>
        <li class="sp-list__item">
          <a href="<?php echo $company; ?>">企業概要</a>
        </li>
        <li class="sp-list__item">
          <a href="<?php echo $blog; ?>">ブログ</a>
        </li>
        <li class="sp-list__item">
          <a href="<?php echo $contact; ?>">お問い合わせ</a>
        </li>
      </ul>
    </nav>
    </div>
  </header>
</body>