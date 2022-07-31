<?php
namespace Elementor;

class Contenidos_Widget extends Widget_Base {
	public function get_name() {
		return 'Contenido';
	}
	
	public function get_title() {
		return 'Contenido';
	}
	
	public function get_icon() {
		return 'eicon-site-title';
	}
	
	public function get_categories() {
		return [ 'basic' ];
	}
	
	protected function _register_controls() {
		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Content', 'elementor' ),
			]
		);
		
		$this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);
		
		$this->add_control(
			'title', 
            [
                'label' => __( 'Titulo', 'elementor' ),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placerholder' => __( 'Ingrese su titulo', 'elementor' ),
            ]
		);

		$this->end_controls_section();
	}
	
	protected function render() {
		$settings = $this->get_settings_for_display();
		echo '<div class = "Texto"><center><h2>' . $settings['title'] . '</h2></center></div>';
		echo '<div class = "Imagen"><img src="' . $settings['image']['url'] . '"></div>';
	}

    protected function _content_template() {
		
	}
}
