<?php
if (!defined('ABSPATH')) {
    exit; // Impede acesso direto ao arquivo.
}

class Elementor_Text_Expander_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'text_expander';
    }

    public function get_title() {
        return 'Text Expander';
    }

    public function get_icon() {
        return 'eicon-editor-code';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function register_controls() {
        // Conteúdo do texto
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Conteúdo', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'text_content',
            [
                'label' => __('Texto', 'elementor'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('Digite seu texto aqui...', 'elementor'),
                'placeholder' => __('Texto...', 'elementor'),
            ]
        );

        $this->add_control(
            'button_expand_text',
            [
                'label' => __('Texto do Botão (Expandir)', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Expandir', 'elementor'),
            ]
        );

        $this->add_control(
            'button_collapse_text',
            [
                'label' => __('Texto do Botão (Encolher)', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Encolher', 'elementor'),
            ]
        );

        $this->end_controls_section();

        // Configurações do fade
        $this->start_controls_section(
            'fade_section',
            [
                'label' => __('Configurações do Fade', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'visible_height',
            [
                'label' => __('Altura Visível do Texto', 'elementor'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 50, 'max' => 1000, 'step' => 10],
                ],
                'default' => ['size' => 150],
            ]
        );

        $this->add_control(
            'fade_height',
            [
                'label' => __('Altura do Fade', 'elementor'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 10, 'max' => 200, 'step' => 1],
                ],
                'default' => ['size' => 30],
            ]
        );

        $this->add_control(
            'fade_color',
            [
                'label' => __('Cor do Fade', 'elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => 'rgba(255,255,255,1)',
            ]
        );

        $this->end_controls_section();

        // Estilização do botão
        $this->start_controls_section(
            'button_section',
            [
                'label' => __('Estilização do Botão', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_alignment',
            [
                'label' => __('Alinhamento do Botão', 'elementor'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Esquerda', 'elementor'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Centro', 'elementor'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __('Direita', 'elementor'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
            ]
        );

        $this->add_control(
            'button_bg_color',
            [
                'label' => __('Cor de Fundo', 'elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#333',
            ]
        );

        $this->add_control(
            'button_hover_bg_color',
            [
                'label' => __('Cor de Fundo ao Passar o Mouse', 'elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0056b3',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    
        // Configurações do widget
        $visible_height = esc_attr($settings['visible_height']['size']);
        $fade_height = esc_attr($settings['fade_height']['size']);
        $fade_color = esc_attr($settings['fade_color']);
        $button_expand_text = esc_html($settings['button_expand_text']);
        $button_collapse_text = esc_html($settings['button_collapse_text']);
        $button_alignment = esc_attr($settings['button_alignment']);
        $button_bg_color = esc_attr($settings['button_bg_color']);
        $button_hover_bg_color = esc_attr($settings['button_hover_bg_color']);
    
        ?>
        <div class="text-expander-widget">
            <!-- Contêiner do texto -->
            <div class="text-container" style="max-height: <?php echo $visible_height; ?>px; overflow: hidden;">
                <div class="text-content">
                    <?php echo $settings['text_content']; ?>
                </div>
                <div class="fade-effect" style="
                    height: <?php echo $fade_height; ?>px; 
                    background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, <?php echo $fade_color; ?> 100%);
                    position: absolute; 
                    bottom: 0; 
                    width: 100%; 
                    pointer-events: none;"></div>
            </div>
    
            <!-- Botão -->
            <div class="button-container" style="text-align: <?php echo $button_alignment; ?>;">
                <button 
                    class="expand-button" 
                    data-expand-text="<?php echo $button_expand_text; ?>"
                    data-collapse-text="<?php echo $button_collapse_text; ?>"
                    style="
                        background-color: <?php echo $button_bg_color; ?>; 
                        color: #fff; 
                        border: none; 
                        cursor: pointer; 
                        padding: 10px 20px;">
                    <?php echo $button_expand_text; ?>
                </button>
            </div>
        </div>
        <?php
    }
    
}
