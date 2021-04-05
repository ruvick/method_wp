<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
    ->add_tab('Главная', array(
      Field::make( 'image', 'as_logo', 'Логотип в шапке') 
        ->set_width(30),
      Field::make( 'image', 'as_logo_white', 'Логотип в подвале')
        ->set_width(30),
      Field::make( 'image', 'as_home_bg', 'Банер на главной') 
        ->set_width(30),
      Field::make('text', 'about_home_title', 'Заголовок на главной'),
      Field::make('text', 'about_home_subtitle', 'Подзаголовок на главной'),
      Field::make('text', 'about_home_button', 'Текст кнопки банера на главной')
        ->set_width(50),
      // Field::make('text', 'about_subscribe_button', 'Текст кнопки Блока "Подпишитесь"')
      //   ->set_width(50),
      // Field::make('rich_text', 'about_home', 'О нашей компании'),
      Field::make('text', 'subtitle_footer', 'Текст в подвале'), 
    ))
    ->add_tab('Слайдер', array(
      Field::make('complex', 'auto_banner', 'Баннер на главной')
        ->add_fields(array(
      Field::make('image', 'img_sl', 'Фото слайдера')
        ->set_width(50),
        ))
    ))
    ->add_tab('Инфо блок справа', array(
      Field::make( 'image', 'img_block_method', 'Картинка блока "Что такое Метод"') 
        ->set_width(50),
      Field::make('text', 'video_block_method', 'Видео блока "Что такое Метод"')
        ->set_width(50),
      Field::make('text', 'block_method_title', 'Заголовок блока "Что такое Метод"')
        ->set_width(50),
      Field::make('text', 'block_method_subtitle', 'Подзаголовок блока "Что такое Метод"')
        ->set_width(50),
      Field::make('text', 'subscribe_title', 'Заголовок блока "Подпишитесь"')
        ->set_width(50),
      Field::make('text', 'subscribe_subtitle', 'Подзаголовок блока "Подпишитесь"')
        ->set_width(50),
      Field::make('text', 'about_subscribe_button', 'Текст кнопки Блока "Подпишитесь"')
        ->set_width(50),
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_phones_1', __( 'Телефон в шапке' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phones_2', __( 'Телефон в подвале' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) )
          ->set_width(50),
    ) );
Container::make('post_meta', 'single_reviews', 'Карточка отзывов')
 ->show_on_template('single-reviews.php')
// ->show_on_post_type('page')
->add_fields(array(
  Field::make('text', 'reviews_special', 'Спциализация')
    ->set_width(50),
));
Container::make('post_meta', 'article_author', 'Подрубрика карточки статьи')
 ->show_on_template('single-article.php')
// ->show_on_post_type('page')
->add_fields(array(
  Field::make('text', 'author_card_subheading', 'Текст подрубрика карточки')
    ->set_width(50),
  Field::make('text', 'author_card_subheading_link', 'Ссылка подрубрика карточки')
    ->set_width(50),
));
Container::make('post_meta', 'article_author', 'Блок автора')
 ->show_on_template('single-article.php')
// ->show_on_post_type('page')
->add_fields(array(
  Field::make('image', 'author_img', 'Фото автора')
    ->set_width(20),
  Field::make('text', 'author_name', 'Имя автора')
    ->set_width(35),
  Field::make('text', 'author_special', 'Специализация автора')
    ->set_width(35),
  Field::make('text', 'author_subtitle', 'Подзаголовок блока автора')
    ->set_width(50),
));
Container::make('post_meta', 'article_author', 'Картинки статьи')
 ->show_on_template('single-article.php')
// ->show_on_post_type('page')
->add_fields(array(
  Field::make('image', 'top_bg', 'Фон верхнего блока'),
  Field::make('image', 'sidebar_img_t', 'Первая картинка сайдбара')
    ->set_width(50),
  Field::make('text', 'sidebar_img_link-1', 'Ссылка первой картинки')
    ->set_width(50),
  Field::make('image', 'sidebar_img_b', 'Вторая картинка сайдбара')
    ->set_width(50),
  Field::make('text', 'sidebar_img_link-2', 'Ссылка второй картинки')
    ->set_width(50),
));
Container::make('post_meta', 'method_single', 'Подрубрика карточки метод')
 ->show_on_template('single-method.php')
// ->show_on_post_type('page')
->add_fields(array(
  Field::make('text', 'method_card_subheading', 'Текст подрубрика карточки')
    ->set_width(50),
  Field::make('text', 'method_card_subheading_link', 'Ссылка подрубрика карточки')
    ->set_width(50),
));
Container::make('post_meta', 'method_single', 'Первый блок Шапка')
 ->show_on_template('single-method.php')
// ->show_on_post_type('page')
->add_fields(array(
  Field::make('image', 'method_bg', 'Фон шакпи')
    ->set_width(30),
  Field::make('text', 'method_subtitle', 'Подзаголовок')
    ->set_width(30),
  Field::make('text', 'method_button', 'Текст кнопки')
    ->set_width(30),
  Field::make('text', 'result_method_title', 'Заголовок нижнего блока в шапке')
    ->set_width(30),
  Field::make( 'complex', 'result_method_total', "Картинка с текстом" )
    ->set_max(3)
    ->add_fields( array(
  Field::make('image', 'result_method_img', 'Картинка')
    ->set_width(30),
  Field::make('text', 'result_method_text', 'Текст рядом с картинокй')
    ->set_width(30),
  ) ),
));
Container::make('post_meta', 'method_single', 'Второй блок')
 ->show_on_template('single-method.php')
// ->show_on_post_type('page')
->add_fields(array(
  Field::make('text', 'section_two_title', 'Заголовок')
    ->set_width(30),
  Field::make( 'complex', 'section_two_complex', "Карточка" )
    // ->set_max(3)
    ->add_fields( array(
  Field::make('image', 'section_two_card_img', 'Картинка')
    ->set_width(30),
  Field::make('text', 'section_two_card_text', 'Текст карточки')
    ->set_width(30),
  ) ),
));
Container::make('post_meta', 'method_single', 'Третий блок')
 ->show_on_template('single-method.php')
// ->show_on_post_type('page')
->add_fields(array(
  Field::make('text', 'section_three_title', 'Заголовок')
    ->set_width(30),
  Field::make( 'complex', 'section_three_complex', "Карточка" )
    // ->set_max(3)
    ->add_fields( array(
  Field::make('image', 'section_three_card_img', 'Картинка')
    ->set_width(30),
  Field::make('text', 'section_three_card_title', 'Заголовок карточки')
    ->set_width(30),
  Field::make('text', 'section_three_card_text', 'Текст карточки')
    ->set_width(30),
  ) ),
));
Container::make('post_meta', 'method_single', 'Четвертый блок')
 ->show_on_template('single-method.php')
// ->show_on_post_type('page')
->add_fields(array(
  Field::make('text', 'section_four_title', 'Заголовок')
    ->set_width(30),
  Field::make('text', 'section_four_subtitle', 'Подзаголовок')
    ->set_width(30),
  Field::make( 'complex', 'section_four_complex', "Карточка" )
    // ->set_max(3)
    ->add_fields( array(
  Field::make('image', 'section_four_card_img', 'Картинка')
    ->set_width(30),
  Field::make('text', 'section_four_card_text', 'Текст карточки')
    ->set_width(30),
  ) ),
));
Container::make('post_meta', 'method_single', 'Пятый блок')
 ->show_on_template('single-method.php')
// ->show_on_post_type('page')
->add_fields(array(
  Field::make('image', 'section_five_bg', 'Картинка')
    ->set_width(30),
  Field::make('text', 'section_five_title', 'Заголовок')
    ->set_width(30),
  Field::make('text', 'section_four_button', 'Текст кнопки')
    ->set_width(30),
));

?> 