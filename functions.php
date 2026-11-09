<?php
require_once __DIR__ . '/backend/init/index.php';
require_once __DIR__ . '/backend/helpers/index.php';
require_once __DIR__ . '/backend/nav/index.php';
require_once __DIR__ . '/backend/cpt/index.php';
require_once __DIR__ . '/backend/tax/index.php';
require_once __DIR__ . '/backend/carbonfields/index.php';
require_once __DIR__ . '/backend/getter/index.php';

add_action('wp_enqueue_scripts', function (): void {
    $stylesheet_path = get_theme_file_path('/frontend/styles/main.css');

    wp_enqueue_style(
        'im5-main',
        get_theme_file_uri('/frontend/styles/main.css'),
        [],
        filemtime($stylesheet_path),
    );
});
