<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pro-tour_by
 */

?>

<footer>
	<div class="footer-container">
		<div class="column-1">
			<figure class="logo-box">
				<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Туристическое агенство Pro-tour.by">
				<h1>Туристическое агенство <span class="hide-text">Pro-tour.by</span></h1>
			</figure>
			<div class="copy">
				<p>
					&copy; ООО "ПРО-ТУР"<br>
					УНП 591361984<br>
					Все права защищены.
				</p>
			</div>
		</div>
		<div class="column-2">
			<div class="social">
				<div class="social-icons social_vk"><a href="#"></a></div>
				<div class="social-icons social_ok"><a href=""></a></div>
				<div class="social-icons social_f"><a href=""></a></div>
				<div class="social-icons social_inst"><a href=""></a></div>
			</div>
			<p>
				Наш адрес:<br>
				г. Лида, ул. Победы, к.308<br>
				(Торгово-сервисный центр)
			</p>
			<div class="social">
				<div class="social-icons social_viber"><a href=""></a></div>
				<div class="social-icons social_watsapp"><a href=""></a></div>
				<div class="social-icons social_telegram"><a href=""></a></div>
			</div>
			<div class="contats_title velcom">
				<div class="wiget wiget-phone"><a href="tel:+375291321800">+375 29 132-18-00</a></div>
				<div class="wiget wiget-phone"><a href="tel:+375444770448">+375 44 477-04-48</a></div>
			</div>
			<div class="contats_title mts">
				<div class="wiget wiget-phone"><a href="tel:+375298991800">+375 29 899-18-00</a></div>
				<div class="wiget wiget-phone"><a href="tel:+375295804594">+375 29 580-45-94</a></div>
			</div>
			<div class="contats_title">
				<div class="wiget wiget-mail"><a href="mailto:info@pro-tour.by">info@pro-tour.by</a></div>
				<div class="wiget wiget-skype"><a href="skype:[protour]?call">protour</a></div>
			</div>


		</div>
		<div class="column-3">
				<img src="<?php bloginfo('template_url'); ?>/img/map.jpg" alt="">
		</div>
	</div>
</footer>
<div class="wrap"></div>
<div class="popup-question">
	<div class="popup-question-close">
		close
	</div>
	<div class="box-content">
		<p class="thanks">
			УРА! Спасибо!
		</p>
		<p>Сейчас наши специалисты закончат танцевать от счастья<span class="smile"></span><br> и мы сразу же вам перезвоним!</p>
	</div>
</div>

<?php wp_footer(); ?>

<script type="text/javascript">
 jQuery(function($){
 $("#phone").mask("+375(99) 999-99-99");
 $(".diamondswrap").diamonds({
	size: 250, // Size of the squares
	gap: 5 // Pixels between squares
	});
 $('#dg-container').gallery();
 });
 </script>

</body>
</html>