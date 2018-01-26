<?php
/**
 * Template Name: О нас
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pro-tour_by
 */

get_header();
get_sidebar();

$opers = get_posts(
		array(
				'numberposts' => -1,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'opers',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);
 ?>

<main>
	<section class="about">
		<?php the_post(); ?>
		<?php the_content(); ?>
			<!--<p>
				Новое путешествие - событие волнующее и захватывающее.
				Вместе с тем, все новое и неизвестное вызывает опасения.
				Команда PRO-tour.by - фанаты путешествий. Миссия компании - сделать выбор и покупку отдыха простым и доступным,
				предоставить максимальную информацию, отсеять все страхи и сомнения в Вашем путешествии.
			</p>
			<p>
				С уважением, Анастасия Шаховская.
			</p>!-->
	</section>
	<section class="partners">
		<div class="partners_img">
			<ul>
				<?php
					foreach ($opers as $obj) {
						if($obj->post_name == 'archive') {
								continue;
						}
				 ?>
				<li>
					<img src="<?php echo get_field('p_img',$obj->ID); ?>" />
				</li>
				<?php
	 				}
	 			 ?>
			</ul>
		</div>
		<div class="partners_principles">
			<ul>
				<li>
					Работаем только с проверенными туроператорами
				</li>
				<li>
					Предоставляем честные цены от "производителя"
				</li>
				<li>
					Даем возможность самостоятельного подбора отдыха удобным поисковиком
				</li>
				<li>
					Предоставлем услуги по страхованию от внезапных заболеваний и несчастных случаев на время поездки за границу
				</li>
				<li>
			    Оказываем помощь в оформлении виз для выезда за границу
				</li>
				<li>
					Знаем, что непредвиденные ситуации могут возникнуть и на отдыхе, поэтому оказываем своим туристам поддержку 24/7
				</li>
			</ul>
		</div>
	</section>
	<section class="adress">
		<div class="adress_contacts">
			<p>
				ООО "ПРО-ТУР"<br>
				УНП 591361984
			</p>
			<p>
				Наш адрес:<br>
				г. Лида, ул. Победы, к.308<br>
				(Торгово-сервисный центр)
			</p>
			<div class="contats_title velcom">
				<?php dynamic_sidebar( 'phone-v1' ); ?>
				<?php dynamic_sidebar( 'phone-v2' ); ?>
			</div>
			<div class="contats_title mts">
				<?php dynamic_sidebar( 'phone-m1' ); ?>
				<?php dynamic_sidebar( 'phone-m2' ); ?>
			</div>
			<div class="contats_title">
				<?php dynamic_sidebar( 'mail' ); ?>
				<?php dynamic_sidebar( 'skype' ); ?>
			</div>
		</div>
		<div class="adress_map">
			<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A469161f2b4aee490f27eb35b7f06933b7a4e86f48cd66a630becc721ee8cfbae&amp;source=constructor" width="600" height="480" frameborder="0"></iframe>
		</div>
	</section>
	<section about-form>
		<p>Остались вопросы? Хотите заказать консультацию?</p>
		<p>заполните поля и мы свяжемся с Вами в течении 5 минут</p>
		<form id="about_form" method="post" class="order-form">
			<!-- Hidden Required Fields -->
			<input type="hidden" name="project_name" value="pro-tour.by">
			<!--input type="hidden" name="admin_email" value=""!-->
			<?php dynamic_sidebar( 'admin_mail' ); ?>
			<input type="hidden" name="form_subject" value="Заявка со страницы о нас">
			<!-- END Hidden Required Fields -->
			<textarea id="message" class="form__message" name="message" placeholder="Задайте вопрос"></textarea>
			<input id="name" class="form__name" type="text" name="name"
			value="" placeholder="Ваше имя" required>
			<input id="phone" class="cloud-form__phone" type="text" name="phone"
			value="" placeholder="Ваш телефон" required>
			<button id="submit" class="cloud-form__submit" type="submit" name="submit">
				Отправить
			</button>
			<input id="сonsent-p" class="cloud-form__сonsent" type="checkbox" name="сonsent" value="" required checked>
			<label class="cloud-form__сonsent" for="сonsent-p">
				Согласие на обработку персональных данных
			</label>
		</form>
	</section>
</main>

<?php

get_footer();
