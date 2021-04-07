<?php

define("COMPANY_NAME", "МЕТОД");
define("MAIL_RESEND", "noreply@method.market");

//----Подключене carbon fields
//----Инструкции по подключению полей см. в комментариях themes-fields.php
include "carbon-fields/carbon-fields-plugin.php"; 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' ); 
function crb_attach_theme_options() {
	require_once __DIR__ . "/themes-fields.php";
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'carbon-fields/vendor/autoload.php' ); 
	\Carbon_Fields\Carbon_Fields::boot(); 
} 

//-----Блок описания вывода меню
// 1. Осмысленные названия для алиаса и для описания на русском.
// если это меню в подвали пишем - Меню в подвале 
// если в шапке то пишем - Меню в шапке 
// если 2 меню в шапке пишем  - Меню в шапке (верхняя часть)

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		// 'menu_hot' => 'Меню актуальных предложений (рядом с каталогом)',
		// 'menu_cat' => 'Меню каталога', 
		'menu_main' => 'Меню основное',
		// 'menu_corp' => 'Общекорпоративное меню (верхняя шапка)', 
	] );
} ); 

// Добавление стилей к пунктам меню
// add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );

// function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
// 	if( 30 === $item->ID  && 'menu_corp' === $args->theme_location ){
// 		$classes[] = 'link__drop-down';
// 	}

// 	if( 34 === $item->ID  && 'menu_main' === $args->theme_location ){
// 		$classes[] = 'menu__catalogy';
// 	}

// 	return $classes;
// }

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 185, 185 ); 

add_post_type_support( 'page', 'excerpt' );

// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin(){
	wp_enqueue_style("style-adm",get_template_directory_uri()."/style-admin.css");
	
	wp_localize_script( 'jquery', 'allAjax', array(
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
}

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action( 'wp_enqueue_scripts', 'my_assets' );
	function my_assets() {

		// Подключение стилей 

		$style_version = "1.0.1";
		$scrypt_version = "1.0.1";
		
		wp_enqueue_style("style-modal", get_template_directory_uri()."/css/jquery.arcticmodal-0.3.css", array(), $style_version, 'all'); //Модальные окна (стили)
		wp_enqueue_style("style-lightbox", get_template_directory_uri()."/css/lightbox.min.js", array(), $style_version, 'all'); //Лайтбокс (стили)
		wp_enqueue_style("style-slik", get_template_directory_uri()."/css/slick.css", array(), $style_version, 'all'); //Слайдер (стили)
		wp_enqueue_style("style-fancybox", get_template_directory_uri()."/css/fancybox.css", array(), $style_version, 'all'); //fancybox (стили)

		wp_enqueue_style("main-style", get_stylesheet_uri(), array(), $style_version, 'all' ); // Подключение основных стилей в самом конце

		// Подключение скриптов
		
		wp_enqueue_script( 'jquery');

		wp_enqueue_script( 'amodal', get_template_directory_uri().'/js/jquery.arcticmodal-0.3.min.js', array(), $scrypt_version , true); //Модальные окна
		wp_enqueue_script( 'mask', get_template_directory_uri().'/js/jquery.inputmask.bundle.js', array(), $scrypt_version , true); //маска для инпутов
		wp_enqueue_script( 'lightbox', get_template_directory_uri().'/js/lightbox.min.js', array(), $scrypt_version , true); //Лайтбокс
		wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.min.js', array(), $scrypt_version , true); //Слайдер
		wp_enqueue_script( 'fancybox', get_template_directory_uri().'/js/jquery.fancybox.min.js', array(), $scrypt_version , true); //fancybox

		wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), $scrypt_version , true); // Подключение основного скрипта в самом конце
		
		
		wp_localize_script( 'main', 'allAjax', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
	}


add_action( 'wp_ajax_sendphone', 'sendphone' );
add_action( 'wp_ajax_nopriv_sendphone', 'sendphone' );

  function sendphone() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>', 
        'content-type: form/multipart',
        // 'content-type: text/html', 
      );

      if (!empty($_REQUEST["file"])){
        $url_img1 = get_bloginfo("template_url").'/download/'.basename($_REQUEST["file"]);
        //$img_id1 = media_sideload_image( $url_img1, 0, $_REQUEST["name"]."-rev-1", "id" );
        //add_post_meta( $post_id, "_img_1", $img_id1, true );
      }
	  
	  $photo[] = $_REQUEST['file'];
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
       if (wp_mail(
		carbon_get_theme_option( 'as_email_send' ), 
		'Отзыв с сайта «МЕТОД»', '<strong>Имя:</strong> '.$_REQUEST["name"]. ' <br/> <strong>Профессия:</strong> '.$_REQUEST["profess"]. ' <br/> <strong>Фото:</strong>  <br/> <img width = "50%" src = "'.$url_img1.'"/ > <br/> <strong>Отзыв:</strong> '.$_REQUEST["message"], 
		$headers,  
		$photo ))
        wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>"); 
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }


add_action( 'wp_ajax_sendworkshop', 'sendworkshop' );
add_action( 'wp_ajax_nopriv_sendworkshop', 'sendworkshop' );

  function sendworkshop() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>', 
        'content-type: text/html',
      );
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
       if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Заявка с окна: «Пройти бесплатный практикум»', '<strong>Имя:</strong> '.$_REQUEST["namew"]. ' <br/> <strong>Телефон:</strong> '.$_REQUEST["telw"]. ' <br/> <strong>Email:</strong> '.$_REQUEST["emailw"], $headers))
        wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>"); 
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }


add_action( 'wp_ajax_sendwsubscribe', 'sendwsubscribe' );
add_action( 'wp_ajax_nopriv_sendwsubscribe', 'sendwsubscribe' );

  function sendwsubscribe() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>', 
        'content-type: text/html',
      );
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
       if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Заявка с окна: «Подпишитесь чтобы начать менять свою жизнь»', '<strong>Имя:</strong> '.$_REQUEST["namecr"]. ' <br/> <strong>Телефон:</strong> '.$_REQUEST["telcr"], $headers))
        wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>"); 
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }


add_action( 'wp_ajax_sendmethod', 'sendmethod' );
add_action( 'wp_ajax_nopriv_sendmethod', 'sendmethod' );

  function sendmethod() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>', 
        'content-type: text/html',
      );
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
       if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Заявка с окна: «Пройти метод»', '<strong>Имя:</strong> '.$_REQUEST["nameM"]. ' <br/> <strong>Телефон:</strong> '.$_REQUEST["telM"]. ' <br/> <strong>Email:</strong> '.$_REQUEST["emailM"]. ' <br/> <strong>Заявка:</strong> '.$_REQUEST["titleM"], $headers))
        wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>"); 
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }


add_action( 'wp_ajax_main_load_file', 'main_load_file' );
add_action( 'wp_ajax_nopriv_main_load_file', 'main_load_file' );

function main_load_file() {
    
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {

       $movrez = move_uploaded_file($_FILES['file']['tmp_name'], get_template_directory().'/download/'.$_FILES['file']['name']);

       if ($movrez)
       {
         wp_die(get_template_directory().'/download/'.$_FILES['file']['name']);
       }
       else {
         wp_die( 'При загрузке файла произошла ошибка', '', 403 );
       }
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
}
  

?>