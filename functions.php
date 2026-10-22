<?php

/* =================================
   PENGATURAN TEMA
================================= */

function kampus_utm_setup() {

    // Membuat WordPress otomatis mengatur title halaman
    add_theme_support('title-tag');

    // Mendukung gambar unggulan pada posting
    add_theme_support('post-thumbnails');

    // Membuat menu utama
    register_nav_menus(
        array(
            'primary' => 'Menu Utama'
        )
    );
}

add_action('after_setup_theme', 'kampus_utm_setup');


/* =================================
   MEMANGGIL STYLE.CSS
================================= */

function kampus_utm_styles() {

    wp_enqueue_style(
        'kampus-utm-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}

add_action(
    'wp_enqueue_scripts',
    'kampus_utm_styles'
);