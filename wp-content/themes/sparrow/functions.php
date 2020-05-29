<?php
add_action('wp_enqueue_scripts', "themeStyle");
add_action('wp_enqueue_scripts', "themeScript");
add_action('after_setup_theme', "themeMenu");
add_action('widgets_init', "themeSidebar");
add_action( 'init', 'register_post_types' );


function themeStyle() {
    wp_enqueue_style( "style", get_stylesheet_uri());
    wp_enqueue_style( "default", get_template_directory_uri() . "/assets/css/default.css");
    wp_enqueue_style( "layout", get_template_directory_uri() . "/assets/css/layout.css");
    wp_enqueue_style( "mediaQueries", get_template_directory_uri() . "/assets/css/media-queries.css");
}

function themeScript() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'flexslider',  get_template_directory_uri()."/assets/js/jquery.flexslider.js", ["jquery"], null, true );
	wp_enqueue_script( 'doubletaptogo',  get_template_directory_uri()."/assets/js/doubletaptogo.js", ["jquery"], null, true );
	wp_enqueue_script( 'init',  get_template_directory_uri()."/assets/js/init.js", ["jquery"], null, true );
	wp_enqueue_script( 'modernizr',  get_template_directory_uri()."/assets/js/modernizr.js");
}

function themeMenu() {
    register_nav_menu("top", "Меню в шапке");
    register_nav_menu("bottom", "Меню в подвале");
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails', array('post', 'portfolio', 'slider', 'about') );
}

function themeSidebar() {
    register_sidebar([
        'name' => 'Виджеты справа',
	    'id'   => 'right_sidebar',
        'description'   => 'Сюда вставляй виджеты',
        'before_widget' => '<div class="widget %2$s">', // основной тег в начале для виджета
    	'after_widget'  => "</div>\n", // основной тег в конце для виджета
        'before_title'  => '<h5 class="widget-title">', // тег заголовка виджета в начале
        'after_title'   => "</h5>\n", 
    ]);
    register_sidebar([
        'name' => 'Виджеты About',
	    'id'   => 'about_sidebar',
        'description'   => 'Сюда вставляй виджеты',
        'before_widget' => '<div class="widget %2$s">', // основной тег в начале для виджета
    	'after_widget'  => "</div>\n", // основной тег в конце для виджета
        'before_title'  => '<h5 class="widget-title">', // тег заголовка виджета в начале
        'after_title'   => "</h5>\n", 
    ]);
    register_sidebar([
        'name' => 'Виджеты на главной',
	    'id'   => 'index_sidebar',
        'description'   => 'Сюда вставляй виджеты',
        'before_widget' => '<div class="columns">', // основной тег в начале для виджета
    	'after_widget'  => "</div>\n", // основной тег в конце для виджета
        'before_title'  => '<h2>', // тег заголовка виджета в начале
        'after_title'   => "</h2>\n", 

    ]);
    register_sidebar([
        'name' => 'Виджеты социальных иконок',
	    'id'   => 'footer_sidebar',
        'description'   => 'Сюда вставляй виджеты',
        'before_widget' => '<ul class="footer-social">', // основной тег в начале для виджета
    	'after_widget'  => "</ul>\n", // основной тег в конце для виджета
    ]);
}

function register_post_types(){
    register_post_type('portfolio', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Портфолио', // основное название для типа записи
			'singular_name'      => 'Портфолио', // название для одной записи этого типа
			'add_new'            => 'Добавить Портфолио', // для добавления новой записи
			'add_new_item'       => 'Добавление Портфолио', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Портфолио', // для редактирования типа записи
			'new_item'           => 'Новое Портфолио', // текст новой записи
			'view_item'          => 'Смотреть Портфолио', // для просмотра записи этого типа.
			'search_items'       => 'Искать Портфолио', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Портфолио', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
    register_post_type('slider', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Слайдер', // основное название для типа записи
			'singular_name'      => 'Слайдер', // название для одной записи этого типа
			'add_new'            => 'Добавить Слайдер', // для добавления новой записи
			'add_new_item'       => 'Добавление Слайдер', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Слайдер', // для редактирования типа записи
			'new_item'           => 'Новое Слайдер', // текст новой записи
			'view_item'          => 'Смотреть Слайдер', // для просмотра записи этого типа.
			'search_items'       => 'Искать Слайдер', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Слайдер', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
    register_post_type('about', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Сотрудник', // основное название для типа записи
			'singular_name'      => 'Сотрудник', // название для одной записи этого типа
			'add_new'            => 'Добавить Сотрудник', // для добавления новой записи
			'add_new_item'       => 'Добавление Сотрудник', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Сотрудник', // для редактирования типа записи
			'new_item'           => 'Новое Сотрудник', // текст новой записи
			'view_item'          => 'Смотреть Сотрудник', // для просмотра записи этого типа.
			'search_items'       => 'Искать Сотрудник', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Сотрудник', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}