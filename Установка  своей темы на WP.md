# MyWPTema

1. Скачать локальный сервер на устройство.

2. Скачать Wordpress c  главного сайта  https://ru.wordpress.org/download/

3.Создать новую базу данных и пользователя в PhpMyAdmin, изменить файл Wp_confic.php название на такое и в самом файле поменять на свой пароль и логин.

4.Установить WP и авторизаваться и  войти в Админ панель. 

5.Скачать  пустой  стиль шаблона с сайта  https://underscores.me/   назвать шаблон. 

6. Скинуть  шаблон в WP по пути wp-content/themes

7. Из рукописного сайта  заменить  в шаблоне Js,css,ph,img  папки. В Index.php заменить на свой код HTML.Header и Footer  код поместить в файлы Footer.php, header.php. Подключив в файле index.php  файлы header,footer кодом php <?Php get_footer();?> и <?Php get_header();?>

8.В профеле WP  зайти в настройки - Чтение поставвить галочку статическую страницу и ниже выбрать пример страницы и сохранить. 

9. Кодом Php  подключить пути  css,js,ph,img,  при помощи кода  который нужно вводить в указаный путь. <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">, после этого вводить  где у вас главный заголовок сайта и подзаголовок <h1><?php bloginfo('name');?></h1>, <p><?php bloginfo('description');?></p>

после этого можно в настройках Wordpress, поменять Главный заголовок и подзаголовок.

10.Для замены Меню требуется код PHP  который пишеться в блоке перед <ul>  если у тега есть материнский блок или в теге <ul>.

Код пишеться такЖ:

 <?php
        $args=array( [
	'theme_location'  => '',
	'menu'            => '', 
	'container'       => 'ul',  -тег матенинский блок, если тег Ul один  то пишите <ul> тег. 
	'container_class' => '',    - class тега матенинского блока в котором находится  тег <ul> Меню, если тег Ul один  то пишите Class тега <ul>
	'container_id'    => 'Menu',- id тега матенинского блока в котором находится  тег <ul> Меню, если тег Ul один  то пишите id тега <ul>
	'menu_class'      => '',    - class тега <ul>
	'menu_id'         => 'Menu',-id тега <ul>
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
        ] );
        wp_nav_menu( $args );
 ?>

Теперь при создании страниц  в WP в меню сайта будут отображатся страницы. Не забудте в CSS теги <a> <li>  прописать в стилях вместо классов. Что бы WP видел стили.

11.Теперь надо  поменять остальной контент  сайта. Для этого нужно скачать плагин в WP  с названием Advanced Custom Fields. После  установки зайти Группы полей  через  главную WP, создать поле для любой страницы к Главной к примеру. В пункте  "Отображать группу полей"

поставить как "страница" и в правом окне  привязать поле к Главной странице или любой, обновляешь и  создаёшь  поля. Поле Логотип, Главный фон, названия ярлыка поля придумываешь сам, имя поля только на англиском. Тип поля выбираешь  если текст то так и ставиш текст если  изображение  надо "Возвращаемый формат" ставить галочку "ссылка на изображение"

размер изображения полный.В коде дальше где у вас есть логотип в текстовом теге прописываем код PHP <h2><?php the_field('Title');?></h2>  за место  текста и в  скобках указываете имя поля на англиском который.  Если картинку то надо писать код вместо пути. <img src="<?php the_field('Img');?>" alt="">

после   этого   заходишь в страницы редактор и там прописываешь  свои значения или добавляешь  картинки. В редакторе страниц WP

12. Менять группы блоков на странице  можно легко . Надо создать группу в плагине Advanced Custom Fields. Создаётся группа так же как и обычные поля. Только  при смены значений надо ставить "группа" после этого в поле группы  появиться  кнопка добавить  поля . Добовляем нужные поля  которые у вас настранице есть. Например в блоках с контентом  как обычно картинка,заголовок и сам текст или кнопка. Всё это добовляем как поля. 

После этогор вставляем код PHP  к блоку  с контентом. Вот так:

        <?php
            $BlockUslug4 = get_field('BlockUslug4');	- Все переменые со знаком долар  переименовать  в  имя группы в которой ты создовал  обычные поля. 

            if( $BlockUslug4 ): ?>
	       <div id="Kontent2Blocks">
	       <div id="Kontent2BlocksImg4" style="background:url(<?php echo $BlockUslug4['imgBlockUslug'];?>)no-repeat 50% 50%/100%;"></div>  - в апострофах пропишите имена ваших полей на англ. которые вы создавали в группе.
               <h1 id="Kontent2BlocksText"><?php echo $BlockUslug4['TextBlockUslug'];?></h1>
               <p id="Kontent2BlocksStroka"><?php echo $BlockUslug4['StrokaBlockUslug'];?></p>
	       </div>
	<?php endif; ?>


В следуйщем надо зайти в редактор  страници и там  поставить картинку   и  текст написать . Запомните группы можно  Дублировать в плагине. Тем самым  вам не придётся создавать каждую группу с нуля. Главное не забыть поменять название групп.

13. Теперь надо научиться  создавать целые  блоки с контентом при помощи движка WP на сайте.  По сути  мы будим дублировать   блок с контентом который мы создадим в плагине. 

Для начала надо создать "Повторитель" создаётся как и все поля в плагене Wordpress Advanced Custom Fields.Премечание в бесплатной версии нет судя по всему этой функции. 

Создаём новое поле  даём ему название и имя на англ. языке,  например Kontent4Blocks  и в "Тип полей " выбираем Повторитель. Функция повторителя такая же как и  группы. Нужно в повторитель теперь добавить  поля с контентом.  Как обычно создаём поля с контентом который у  нас на странице есть.

После мы переходим в редактор страниц и видим что можем добовлять новые  поля по кнопке добавить с права.  Теперь нужно загрузить  PHP код .

Код  нужно писать так в HTML:

<?php if( have_rows('Kontent4Blocks') ): while ( have_rows('Kontent4Blocks') ) : the_row();?> -всё что находиться в апострофах  надо писать имена  Повтарителей.
<!-- Ввести контент или блок  <div> с контентом-->
	<div id="Kontent4Blocks">
		<h2 id="Kontent4BlocksText"><?php the_sub_field('Kontent4BlocksText');?>206</h2> -всё что находиться в апострофах  надо писать имена полей.
		<p id="Kontent4BlocksStroka">"><?php the_sub_field('Kontent4BlocksStroka');?>Завершенных проектов</p>
	</div>
<?php endwhile; endif; ?>

Как видете  записываеться примерно также как и Группы  в WP плагене. В типе поля Повторитель появяться ограничения по созданию  блоков с контентом.

ТАк же можно задавать цвет и скороть анимации. Суть такая же  только в группе полей. Надо создать два поля, например заголовка  и цвет заголовка или  скорость анимаций. Суть проста   создаём поле с названием цвет заголовка и именем ColorTitle  например и "типе поля" вы выбираете цвет и нужно выбрать цвет , можно писать англискими словами название цвета или же кодом и всё. 

В HTML коде прописываем PHP код:

<h2 id="Kontent6blockText" style="color:<?php the_field('ColorTitle');?> ;"><?php the_field('Title');?></h2>

Как вы поняли если настройки цвета  фона или шрифта находятся в CSS прописывайте в файле Page.Php в тегах Style="" атрибусы со стилем того или другого элемента страницы. И заменяем  на код php.

Так же скоростью анимации , создаёшь поле  называешь скорость анимации и в типе поля задаёшь цифры для того что бы  настройках страницы можно было  прописывать цыфры скорости  в поле ввода.


http://acfwp.ru/povtoritel/  главный сайт плагина ACF на русском документация с подсказками php кода


        
