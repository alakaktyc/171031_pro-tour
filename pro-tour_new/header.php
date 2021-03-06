<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pro-tour_by
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="theme-color" content="#1d2262"> <!-- Chrome -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script type="text/javascript" src="https://vk.com/js/api/openapi.js?151"></script>
	<?php wp_head(); ?>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(46482651, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113820744-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113820744-1');
</script>
<meta name="yandex-verification" content="f9a2e042c11549ee" />
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="mobile-header header__top-box">
			<div class="container header__container">
				<button class="mobile-header__hamburger hamburger hamburger-elastic" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<a href="<? echo home_url(); ?>" class="logo header__logo">
					<img src="<?bloginfo('template_url'); ?>/img/pro-tour_full.png" alt="Турагентство ПРО-ТУР">
				</a>
				<a href="<? echo home_url(); ?>" class="logo mobile-header__logo">
					<img src="<?bloginfo('template_url'); ?>/img/pro-tour_w.png" alt="Турагентство ПРО-ТУР">
				</a>
				<div class="header__slogan">
					<p>
						Мир открыт, <br>
						открой себя <br>
						миру!
					</p>
				</div>
				<div class="header__adress adress">
					<p>
						г.Лида, ул. Победы, 37 <br>
						Торгово-сервисный центр<br>
						офис 312
					</p>
				</div>
				<div class="mobile-header__phone-box">
					<a class="mobile-header__phone-button phone-button velcom" href="tel:<?php echo get_field('vel_1', 711); ?>"><?php echo get_field('vel_12', 711); ?></a>
					<a class="mobile-header__phone-button phone-button mts" href="tel:<?php echo get_field('mts_1', 711); ?>"><?php echo get_field('mts_12', 711); ?></a>
				</div>
				<a href="#" class="btn cloud-link header__btn">заказать звонок <span class="hidden">самая верхняя кнопка</span> </a>
			</div>
		</div>
		<div class="header__menu menu">
			<div class="container menu__container">
				<nav class="main-menu">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'menu_id'        => 'header_1',
						) );
					?>
				</nav>
				<nav class="icon-menu">
					<ul>
						<li>
							<a href="<?php echo get_permalink(719); ?>"><span class="icon-menu__icon avia"></span>авиатуры</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(721); ?>"><span class="icon-menu__icon auto"></span>автобусные туры</a>
						</li>
						<li>
							<a rel="nofollow" href="<?php echo get_field('link_inst', 711); ?>"><span class="icon-menu__icon ins"></span>инстаграмм</a>
						</li>
						<li>
							<a rel="nofollow" href="<?php echo get_field('link_vk', 711); ?>"><span class="icon-menu__icon vk"></span>вконтакте</a>
						</li>
						<li>
							<a rel="nofollow" href="<?php echo get_field('link_ok', 711); ?>"><span class="icon-menu__icon ok"></span>одноклассники</a>
						</li>
						<li>
							<a rel="nofollow" href="<?php echo get_field('link_f', 711); ?>"><span class="icon-menu__icon fb"></span>фейсбук</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
