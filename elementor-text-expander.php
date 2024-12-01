<?php
/**
 * Plugin Name: Elementor Text Expander
 * Description: Adiciona um widget personalizado para exibir texto com efeito de gradiente e um botão de "Expandir/Encolher".
 * Version: 1.9
 * Authors: Louy Santana Fernandes Maracaipe & Janaina Fernandes da Silva Maracaipe
 */

if (!defined('ABSPATH')) {
    exit; // Evita acesso direto
}

// Inclui a classe do widget
function register_text_expander_widget($widgets_manager) {
    require_once(__DIR__ . '/widgets/text-expander-widget.php');
    $widgets_manager->register(new \Elementor_Text_Expander_Widget());
}
add_action('elementor/widgets/register', 'register_text_expander_widget');

// Enfileira scripts e estilos
function text_expander_enqueue_assets() {
    wp_enqueue_style('text-expander-style', plugin_dir_url(__FILE__) . 'assets/text-expander.css');
    wp_enqueue_script('text-expander-script', plugin_dir_url(__FILE__) . 'assets/text-expander.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'text_expander_enqueue_assets');
