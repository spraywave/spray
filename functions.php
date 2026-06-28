<?php
function mtp_recursos_do_tema() {
    // Adiciona suporte a títulos dinâmicos de páginas
    add_theme_support('title-tag');

    // Ativa suporte a imagens destacadas (Post Thumbnails)
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mtp_recursos_do_tema');

function mtp_carregar_scripts() {
    // Carrega o style.css principal
    wp_enqueue_style('mtp-estilos-principais', get_stylesheet_uri());

    // Exemplo de como carregar um JS próprio (comente ou crie o arquivo js/main.js)
    // wp_enqueue_script('mtp-scripts', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mtp_carregar_scripts');

// Adicione isso ao final do seu functions.php

function mtp_registrar_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'meu-tema-proprio'),
    ));
}
add_action('init', 'mtp_registrar_menus');