<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Popmake_Popup_Theme_Fields extends Popmake_Fields {
	public $field_prefix = 'popup_theme_';

	public function __construct() {
		$this->fields = apply_filters( 'popmake_popup_theme_fields', array(
			'overlay'   => array(
				'background_color'   => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#ffffff',
					'priority' => 1,
				),
				'background_opacity' => array(
					'label'    => __( 'Opacity', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 100,
					'priority' => 2,
					'step'     => 1,
					'min'      => 0,
					'max'      => 100,
					'unit'     => '%',
				),
			),
			'container' => array(
				'padding'              => array(
					'label'    => __( 'Padding', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 18,
					'priority' => 3,
					'step'     => apply_filters( 'popmake_popup_theme_container_padding_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_container_padding_min', 1 ),
					'max'      => apply_filters( 'popmake_popup_theme_container_padding_max', 100 ),
					'unit'     => 'px',
				),
				'background_color'     => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#f9f9f9',
					'priority' => 2,
				),
				'background_opacity'   => array(
					'label'    => __( 'Opacity', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 100,
					'priority' => 3,
					'step'     => 1,
					'min'      => 0,
					'max'      => 100,
					'unit'     => '%',
				),
				'border_radius'        => array(
					'label'       => __( 'Radius', 'popup-maker' ),
					'description' => __( 'Choose a corner radius for your container button.', 'popup-maker' ),
					'type'        => 'rangeslider',
					'std'         => 0,
					'priority'    => 6,
					'step'        => apply_filters( 'popmake_popup_theme_container_border_radius_step', 1 ),
					'min'         => apply_filters( 'popmake_popup_theme_container_border_radius_min', 1 ),
					'max'         => apply_filters( 'popmake_popup_theme_container_border_radius_max', 80 ),
					'unit'        => 'px',
				),
				'border_style'         => array(
					'label'       => __( 'Style', 'popup-maker' ),
					'description' => __( 'Choose a border style for your container button.', 'popup-maker' ),
					'type'        => 'select',
					'std'         => 'none',
					'priority'    => 7,
					'options'     => apply_filters( 'popmake_border_style_options', array() ),
				),
				'border_color'         => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#000000',
					'priority' => 6,
				),
				'border_width'         => array(
					'label'    => __( 'Thickness', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 1,
					'priority' => 9,
					'step'     => apply_filters( 'popmake_popup_theme_container_border_width_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_container_border_width_min', 1 ),
					'max'      => apply_filters( 'popmake_popup_theme_container_border_width_max', 5 ),
					'unit'     => 'px',
				),
				'boxshadow_inset'      => array(
					'label'       => __( 'Inset', 'popup-maker' ),
					'description' => __( 'Set the box shadow to inset (inner shadow).', 'popup-maker' ),
					'type'        => 'select',
					'std'         => 'no',
					'priority'    => 10,
					'options'     => array(
						__( 'No', 'popup-maker' )  => 'no',
						__( 'Yes', 'popup-maker' ) => 'yes'
					),
				),
				'boxshadow_horizontal' => array(
					'label'    => __( 'Horizontal Position', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 1,
					'priority' => 11,
					'step'     => apply_filters( 'popmake_popup_theme_container_boxshadow_horizontal_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_container_boxshadow_horizontal_min', - 50 ),
					'max'      => apply_filters( 'popmake_popup_theme_container_boxshadow_horizontal_max', 50 ),
					'unit'     => 'px',
				),
				'boxshadow_vertical'   => array(
					'label'    => __( 'Vertical Position', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 1,
					'priority' => 12,
					'step'     => apply_filters( 'popmake_popup_theme_container_boxshadow_vertical_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_container_boxshadow_vertical_min', - 50 ),
					'max'      => apply_filters( 'popmake_popup_theme_container_boxshadow_vertical_max', 50 ),
					'unit'     => 'px',
				),
				'boxshadow_blur'       => array(
					'label'    => __( 'Blur Radius', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 3,
					'priority' => 13,
					'step'     => apply_filters( 'popmake_popup_theme_container_boxshadow_blur_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_container_boxshadow_blur_min', 0 ),
					'max'      => apply_filters( 'popmake_popup_theme_container_boxshadow_blur_max', 100 ),
					'unit'     => 'px',
				),
				'boxshadow_spread'     => array(
					'label'    => __( 'Spread', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 14,
					'step'     => apply_filters( 'popmake_popup_theme_container_boxshadow_spread_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_container_boxshadow_spread_min', - 100 ),
					'max'      => apply_filters( 'popmake_popup_theme_container_boxshadow_spread_max', 100 ),
					'unit'     => 'px',
				),
				'boxshadow_color'      => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#020202',
					'priority' => 13,
				),
				'boxshadow_opacity'    => array(
					'label'    => __( 'Opacity', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 23,
					'priority' => 14,
					'step'     => 1,
					'min'      => 0,
					'max'      => 100,
					'unit'     => '%',
				),
			),
			'title'     => array(
				'font_color'            => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#000000',
					'priority' => 15,
				),
				'line_height'           => array(
					'label'    => __( 'Line Height', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 36,
					'priority' => 2,
					'step'     => apply_filters( 'popmake_popup_theme_title_line_height_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_title_line_height_min', 8 ),
					'max'      => apply_filters( 'popmake_popup_theme_title_line_height_max', 54 ),
					'unit'     => 'px',
				),
				'font_size'             => array(
					'label'    => __( 'Spread', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 32,
					'priority' => 3,
					'step'     => apply_filters( 'popmake_popup_theme_title_font_size_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_title_font_size_min', 8 ),
					'max'      => apply_filters( 'popmake_popup_theme_title_font_size_max', 48 ),
					'unit'     => 'px',
				),
				'font_family'           => array(
					'label'    => __( 'Family', 'popup-maker' ),
					'type'     => 'select',
					'std'      => 'inherit',
					'priority' => 4,
					'options'  => apply_filters( 'popmake_font_family_options', array() ),
				),
				'font_weight'           => array(
					'label'    => __( 'Weight', 'popup-maker' ),
					'type'     => 'select',
					'std'      => 'inherit',
					'priority' => 5,
					'options'  => apply_filters( 'popmake_font_weight_options', array() ),
				),
				'font_style'            => array(
					'label'    => __( 'Style', 'popup-maker' ),
					'type'     => 'select',
					'std'      => 'normal',
					'priority' => 6,
					'options'  => apply_filters( 'popmake_font_style_options', array() ),
				),
				'text_align'            => array(
					'label'    => __( 'Align', 'popup-maker' ),
					'type'     => 'select',
					'std'      => 'left',
					'priority' => 7,
					'options'  => apply_filters( 'popmake_text_align_options', array() ),
				),
				'textshadow_horizontal' => array(
					'label'    => __( 'Horizontal Position', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 8,
					'step'     => apply_filters( 'popmake_popup_theme_title_textshadow_horizontal_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_title_textshadow_horizontal_min', - 50 ),
					'max'      => apply_filters( 'popmake_popup_theme_title_textshadow_horizontal_max', 50 ),
					'unit'     => 'px',
				),
				'textshadow_vertical'   => array(
					'label'    => __( 'Vertical Position', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 9,
					'step'     => apply_filters( 'popmake_popup_theme_title_textshadow_vertical_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_title_textshadow_vertical_min', - 50 ),
					'max'      => apply_filters( 'popmake_popup_theme_title_textshadow_vertical_max', 50 ),
					'unit'     => 'px',
				),
				'textshadow_blur'       => array(
					'label'    => __( 'Blur Radius', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 10,
					'step'     => apply_filters( 'popmake_popup_theme_title_textshadow_blur_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_title_textshadow_blur_min', 0 ),
					'max'      => apply_filters( 'popmake_popup_theme_title_textshadow_blur_max', 100 ),
					'unit'     => 'px',
				),
				'textshadow_color'      => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#020202',
					'priority' => 25,
				),
				'textshadow_opacity'    => array(
					'label'    => __( 'Opacity', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 23,
					'priority' => 12,
					'step'     => 1,
					'min'      => 0,
					'max'      => 100,
					'unit'     => '%',
				),
			),
			'content'   => array(
				'font_color'  => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#8c8c8c',
					'priority' => 1,
				),
				'font_family' => array(
					'label'    => __( 'Family', 'popup-maker' ),
					'type'     => 'select',
					'std'      => 'inherit',
					'priority' => 4,
					'options'  => apply_filters( 'popmake_font_family_options', array() ),
				),
				'font_weight' => array(
					'label'    => __( 'Weight', 'popup-maker' ),
					'type'     => 'select',
					'std'      => 'inherit',
					'priority' => 5,
					'options'  => apply_filters( 'popmake_font_weight_options', array() ),
				),
				'font_style'  => array(
					'label'    => __( 'Style', 'popup-maker' ),
					'type'     => 'select',
					'std'      => 'inherit',
					'priority' => 6,
					'options'  => apply_filters( 'popmake_font_style_options', array() ),
				),
			),
			'close'     => array(
				'text'                  => array(
					'label'       => __( 'Text', 'popup-maker' ),
					'placeholder' => __( 'CLOSE', 'popup-maker' ),
					'description' => __( 'Enter the close button text.', 'popup-maker' ),
					'std'         => __( 'CLOSE', 'popup-maker' ),
					'priority'    => 1,
				),
				'padding'               => array(
					'label'    => __( 'Padding', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 8,
					'priority' => 2,
					'step'     => apply_filters( 'popmake_popup_theme_close_padding_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_padding_min', 0 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_padding_max', 100 ),
					'unit'     => 'px',
				),
				'height'                => array(
					'label'    => __( 'Height', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 2,
					'step'     => apply_filters( 'popmake_popup_theme_close_height_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_height_min', 0 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_height_max', 100 ),
					'unit'     => 'px',
				),
				'width'                 => array(
					'label'    => __( 'Width', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 2,
					'step'     => apply_filters( 'popmake_popup_theme_close_width_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_width_min', 0 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_width_max', 100 ),
					'unit'     => 'px',
				),
				'location'              => array(
					'label'       => __( 'Location', 'popup-maker' ),
					'description' => __( 'Choose which corner the close button will be positioned.', 'popup-maker' ),
					'type'        => 'select',
					'std'         => 'topright',
					'priority'    => 7,
					'options'     => apply_filters( 'popmake_theme_close_location_options', array() ),
				),
				'position_top'          => array(
					'label'    => __( 'Top', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 2,
					'step'     => apply_filters( 'popmake_popup_theme_close_position_top_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_position_top_min', - 100 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_position_top_max', 100 ),
					'unit'     => 'px',
				),
				'position_left'         => array(
					'label'    => __( 'Left', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 2,
					'step'     => apply_filters( 'popmake_popup_theme_close_position_left_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_position_left_min', - 100 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_position_left_max', 100 ),
					'unit'     => 'px',
				),
				'position_bottom'       => array(
					'label'    => __( 'Bottom', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 2,
					'step'     => apply_filters( 'popmake_popup_theme_close_position_bottom_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_position_bottom_min', - 100 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_position_bottom_max', 100 ),
					'unit'     => 'px',
				),
				'position_right'        => array(
					'label'    => __( 'Right', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 2,
					'step'     => apply_filters( 'popmake_popup_theme_close_position_right_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_position_right_min', - 100 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_position_right_max', 100 ),
					'unit'     => 'px',
				),
				'line_height'           => array(
					'label'    => __( 'Line Height', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 36,
					'priority' => 2,
					'step'     => apply_filters( 'popmake_popup_theme_close_line_height_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_line_height_min', 8 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_line_height_max', 54 ),
					'unit'     => 'px',
				),
				'font_color'            => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#ffffff',
					'priority' => 11,
				),
				'font_size'             => array(
					'label'    => __( 'Size', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 12,
					'priority' => 3,
					'step'     => apply_filters( 'popmake_popup_theme_close_font_size_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_font_size_min', 8 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_font_size_max', 32 ),
					'unit'     => 'px',
				),
				'font_family'           => array(
					'label'    => __( 'Family', 'popup-maker' ),
					'type'     => 'select',
					'std'      => 'inherit',
					'priority' => 4,
					'options'  => apply_filters( 'popmake_font_family_options', array() ),
				),
				'font_weight'           => array(
					'label'    => __( 'Weight', 'popup-maker' ),
					'type'     => 'select',
					'std'      => 'inherit',
					'priority' => 5,
					'options'  => apply_filters( 'popmake_font_weight_options', array() ),
				),
				'font_style'            => array(
					'label'    => __( 'Style', 'popup-maker' ),
					'type'     => 'select',
					'std'      => 'inherit',
					'priority' => 6,
					'options'  => apply_filters( 'popmake_font_style_options', array() ),
				),
				'background_color'      => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#00b7cd',
					'priority' => 16,
				),
				'background_opacity'    => array(
					'label'    => __( 'Opacity', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 100,
					'priority' => 17,
					'step'     => 1,
					'min'      => 0,
					'max'      => 100,
					'unit'     => '%',
				),
				'border_radius'         => array(
					'label'       => __( 'Radius', 'popup-maker' ),
					'description' => __( 'Choose a corner radius for your close button.', 'popup-maker' ),
					'type'        => 'rangeslider',
					'std'         => 0,
					'priority'    => 6,
					'step'        => apply_filters( 'popmake_popup_theme_close_border_radius_step', 1 ),
					'min'         => apply_filters( 'popmake_popup_theme_close_border_radius_min', 1 ),
					'max'         => apply_filters( 'popmake_popup_theme_close_border_radius_max', 28 ),
					'unit'        => 'px',
				),
				'border_style'          => array(
					'label'       => __( 'Style', 'popup-maker' ),
					'description' => __( 'Choose a border style for your close button.', 'popup-maker' ),
					'type'        => 'select',
					'std'         => 'none',
					'priority'    => 7,
					'options'     => apply_filters( 'popmake_border_style_options', array() ),
				),
				'border_color'          => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#ffffff',
					'priority' => 6,
				),
				'border_width'          => array(
					'label'    => __( 'Thickness', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 1,
					'priority' => 9,
					'step'     => apply_filters( 'popmake_popup_theme_close_border_width_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_border_width_min', 1 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_border_width_max', 5 ),
					'unit'     => 'px',
				),
				'boxshadow_inset'       => array(
					'label'       => __( 'Inset', 'popup-maker' ),
					'description' => __( 'Set the box shadow to inset (inner shadow).', 'popup-maker' ),
					'type'        => 'select',
					'std'         => 'no',
					'priority'    => 10,
					'options'     => array(
						__( 'No', 'popup-maker' )  => 'no',
						__( 'Yes', 'popup-maker' ) => 'yes'
					),
				),
				'boxshadow_horizontal'  => array(
					'label'    => __( 'Horizontal Position', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 1,
					'priority' => 11,
					'step'     => apply_filters( 'popmake_popup_theme_close_boxshadow_horizontal_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_boxshadow_horizontal_min', - 50 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_boxshadow_horizontal_max', 50 ),
					'unit'     => 'px',
				),
				'boxshadow_vertical'    => array(
					'label'    => __( 'Vertical Position', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 1,
					'priority' => 12,
					'step'     => apply_filters( 'popmake_popup_theme_close_boxshadow_vertical_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_boxshadow_vertical_min', - 50 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_boxshadow_vertical_max', 50 ),
					'unit'     => 'px',
				),
				'boxshadow_blur'        => array(
					'label'    => __( 'Blur Radius', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 3,
					'priority' => 13,
					'step'     => apply_filters( 'popmake_popup_theme_close_boxshadow_blur_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_boxshadow_blur_min', 0 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_boxshadow_blur_max', 100 ),
					'unit'     => 'px',
				),
				'boxshadow_spread'      => array(
					'label'    => __( 'Spread', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 14,
					'step'     => apply_filters( 'popmake_popup_theme_close_boxshadow_spread_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_boxshadow_spread_min', - 100 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_boxshadow_spread_max', 100 ),
					'unit'     => 'px',
				),
				'boxshadow_color'       => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#020202',
					'priority' => 24,
				),
				'boxshadow_opacity'     => array(
					'label'    => __( 'Opacity', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 23,
					'priority' => 28,
					'step'     => 1,
					'min'      => 0,
					'max'      => 100,
					'unit'     => '%',
				),
				'textshadow_horizontal' => array(
					'label'    => __( 'Horizontal Position', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 8,
					'step'     => apply_filters( 'popmake_popup_theme_close_textshadow_horizontal_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_textshadow_horizontal_min', - 50 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_textshadow_horizontal_max', 50 ),
					'unit'     => 'px',
				),
				'textshadow_vertical'   => array(
					'label'    => __( 'Vertical Position', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 9,
					'step'     => apply_filters( 'popmake_popup_theme_close_textshadow_vertical_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_textshadow_vertical_min', - 50 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_textshadow_vertical_max', 50 ),
					'unit'     => 'px',
				),
				'textshadow_blur'       => array(
					'label'    => __( 'Blur Radius', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 0,
					'priority' => 10,
					'step'     => apply_filters( 'popmake_popup_theme_close_textshadow_blur_step', 1 ),
					'min'      => apply_filters( 'popmake_popup_theme_close_textshadow_blur_min', 0 ),
					'max'      => apply_filters( 'popmake_popup_theme_close_textshadow_blur_max', 100 ),
					'unit'     => 'px',
				),
				'textshadow_color'      => array(
					'label'    => __( 'Color', 'popup-maker' ),
					'type'     => 'color',
					'std'      => '#000000',
					'priority' => 29,
				),
				'textshadow_opacity'    => array(
					'label'    => __( 'Opacity', 'popup-maker' ),
					'type'     => 'rangeslider',
					'std'      => 23,
					'priority' => 34,
					'step'     => 1,
					'min'      => 0,
					'max'      => 100,
					'unit'     => '%',
				),
			)
		) );
	}
}

function popmake_register_popup_theme_meta_fields( $section, $fields = array() ) {
	if ( ! empty( $fields ) ) {
		Popmake_Popup_Theme_Fields::instance()->add_fields( $section, $fields );
	}
}


