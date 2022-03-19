<?php
$wp_customize->add_panel( 'event_listing_typography_panel', array(
            'priority' => 40,
            'capability' => 'edit_theme_options',
            'title' => __( 'Typography Options', 'event-listing' ),
        ) );
        /*Font and Typography Options*/
	    $wp_customize->add_section( 'event_listing_font_options', array(
    	    'priority'       => 20,
    	    'capability'     => 'edit_theme_options',
    	    'theme_supports' => '',
    	    'title'          => __( 'Body Typography Options', 'event-listing' ),
    	    'panel' 		 => 'event_listing_typography_panel',
	    ) );
        /*Font Family URL*/
       	$wp_customize->add_setting( 'event_listing_options[event-listing-font-family-url]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-family-url'],
            'sanitize_callback' => 'event_listing_font_select'
        ) );
        $choices = event_listing_google_fonts();
        $wp_customize->add_control( 'event_listing_options[event-listing-font-family-url]', array(
            'label'     => __( 'URL of Font Family', 'event-listing' ),
            'description' => sprintf('%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
		        		__( 'Insert', 'event-listing' ),
		        		esc_url('https://www.google.com/fonts'),
		        		__('Enter Google Font URL' , 'event-listing'),
		        		__('to add google Font.' ,'event-listing')
		    ),
            'choices'   => $choices,
            'section'   => 'event_listing_font_options',
            'settings'  => 'event_listing_options[event-listing-font-family-url]',
            'type'      => 'select',
            'priority'  => 15,
        ) );
        /*Paragraph font Size*/
       	$wp_customize->add_setting( 'event_listing_options[event-listing-font-paragraph-font-size]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-paragraph-font-size'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-paragraph-font-size]', array(
            'label'     => __( 'Paragraph Font Size', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_font_options',
            'settings'  => 'event_listing_options[event-listing-font-paragraph-font-size]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
	        		'min' => 12,
	        		'max' => 20,
	        		'step' => 1,
	        	),
        ) );
        /*Paragraph line spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-paragraph-line-height]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-paragraph-line-height'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-paragraph-line-height]', array(
            'label'     => __( 'Paragraph Line Height', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_font_options',
            'settings'  => 'event_listing_options[event-listing-font-paragraph-line-height]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 15,
                    'max' => 40,
                    'step' => 1,
                ),
        ) );
        /*Paragraph letter spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-paragraph-letter-spacing]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-paragraph-letter-spacing'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-paragraph-letter-spacing]', array(
            'label'     => __( 'Paragraph Letter Spacing', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_font_options',
            'settings'  => 'event_listing_options[event-listing-font-paragraph-letter-spacing]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 0,
                    'max' => 55,
                    'step' => 1,
                ),
        ) );
        /*Paragraph font weight*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-paragraph-font-weight]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-paragraph-font-weight'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-paragraph-font-weight]', array(
            'label'     => __( 'Paragraph Font Weight', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_font_options',
            'settings'  => 'event_listing_options[event-listing-font-paragraph-font-weight]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 100,
                    'max' => 800,
                    'step' => 100,
                ),
        ) );
        /*Font and Typography Options for H1*/
        $wp_customize->add_section( 'event_listing_h1_font_options', array(
            'priority'       => 20,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'H1 Font Options', 'event-listing' ),
            'panel'          => 'event_listing_typography_panel',
        ) );
        /*Font Family URL*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-h1-font-family-url]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-h1-font-family-url'],
            'sanitize_callback' => 'event_listing_font_select'
        ) );
        $choices = event_listing_google_fonts();
        $wp_customize->add_control( 'event_listing_options[event-listing-h1-font-family-url]', array(
            'label'     => __( 'URL of Font Family', 'event-listing' ),
            'description' => sprintf('%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
                        __( 'Insert', 'event-listing' ),
                        esc_url('https://www.google.com/fonts'),
                        __('Enter Google Font URL' , 'event-listing'),
                        __('to add google Font.' ,'event-listing')
            ),
            'choices' => $choices,
            'section'   => 'event_listing_h1_font_options',
            'settings'  => 'event_listing_options[event-listing-h1-font-family-url]',
            'type'      => 'select',
            'priority'  => 15,
        ) );
        /*H1 font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h1-font-size]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h1-font-size'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h1-font-size]', array(
            'label'     => __( 'H1 Font Size', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h1_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h1-font-size]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 12,
                    'max' => 20,
                    'step' => 1,
                ),
        ) );
        /*H1 line spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h1-line-height]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h1-line-height'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h1-line-height]', array(
            'label'     => __( 'H1 Line Height', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h1_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h1-line-height]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 15,
                    'max' => 40,
                    'step' => 1,
                ),
        ) );
        /*H1 letter spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h1-letter-spacing]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h1-letter-spacing'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h1-letter-spacing]', array(
            'label'     => __( 'H1 Letter Spacing', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h1_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h1-letter-spacing]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 0,
                    'max' => 30,
                    'step' => 1,
                ),
        ) );
        /*H1 font weight*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h1-font-weight]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h1-font-weight'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h1-font-weight]', array(
            'label'     => __( 'H1 Font Weight', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h1_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h1-font-weight]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 100,
                    'max' => 800,
                    'step' => 100,
                ),
        ) );
        /*Font and Typography Options for H2*/
        $wp_customize->add_section( 'event_listing_h2_font_options', array(
            'priority'       => 20,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'H2 Font Options', 'event-listing' ),
            'panel'          => 'event_listing_typography_panel',
        ) );
        /*Font Family URL*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-h2-font-family-url]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-h2-font-family-url'],
            'sanitize_callback' => 'event_listing_font_select'
        ) );
        $choices = event_listing_google_fonts();
        $wp_customize->add_control( 'event_listing_options[event-listing-h2-font-family-url]', array(
            'label'     => __( 'URL of Font Family', 'event-listing' ),
            'description' => sprintf('%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
                        __( 'Insert', 'event-listing' ),
                        esc_url('https://www.google.com/fonts'),
                        __('Enter Google Font URL' , 'event-listing'),
                        __('to add google Font.' ,'event-listing')
            ),
            'choices'   => $choices,
            'section'   => 'event_listing_h2_font_options',
            'settings'  => 'event_listing_options[event-listing-h2-font-family-url]',
            'type'      => 'select',
            'priority'  => 15,
        ) );
        /*H2 font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h2-font-size]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h2-font-size'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h2-font-size]', array(
            'label'     => __( 'H2 Font Size', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h2_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h2-font-size]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 12,
                    'max' => 20,
                    'step' => 1,
                ),
        ) );
        /*H2 line spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h2-line-height]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h2-line-height'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h2-line-height]', array(
            'label'     => __( 'H2 Line Height', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h2_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h2-line-height]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 15,
                    'max' => 40,
                    'step' => 1,
                ),
        ) );
        /*H2 letter spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h2-letter-spacing]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h2-letter-spacing'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h2-letter-spacing]', array(
            'label'     => __( 'H2 Letter Spacing', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h2_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h2-letter-spacing]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 0,
                    'max' => 35,
                    'step' => 1,
                ),
        ) );
        /*H2 font weight*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h2-font-weight]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h2-font-weight'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h2-font-weight]', array(
            'label'     => __( 'H2 Font Weight', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h2_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h2-font-weight]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 100,
                    'max' => 800,
                    'step' => 100,
                ),
        ) );
        /*Font and Typography Options for H3*/
        $wp_customize->add_section( 'event_listing_h3_font_options', array(
            'priority'       => 20,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'H3 Font Options', 'event-listing' ),
            'panel'          => 'event_listing_typography_panel',
        ) );
        /*Font Family URL*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-h3-font-family-url]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-h3-font-family-url'],
            'sanitize_callback' => 'event_listing_font_select'
        ) );
        $choices = event_listing_google_fonts();
        $wp_customize->add_control( 'event_listing_options[event-listing-h3-font-family-url]', array(
            'label'     => __( 'URL of Font Family', 'event-listing' ),
            'description' => sprintf('%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
                        __( 'Insert', 'event-listing' ),
                        esc_url('https://www.google.com/fonts'),
                        __('Enter Google Font URL' , 'event-listing'),
                        __('to add google Font.' ,'event-listing')
            ),
            'choices'   => $choices,
            'section'   => 'event_listing_h3_font_options',
            'settings'  => 'event_listing_options[event-listing-h3-font-family-url]',
            'type'      => 'select',
            'priority'  => 15,
        ) );
        /*H3 font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h3-font-size]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h3-font-size'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h3-font-size]', array(
            'label'     => __( 'H3 Font Size', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h3_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h3-font-size]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 12,
                    'max' => 20,
                    'step' => 1,
                ),
        ) );
        /*H3 line spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h3-line-height]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h3-line-height'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h3-line-height]', array(
            'label'     => __( 'H3 Line Height', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h3_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h3-line-height]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 15,
                    'max' => 40,
                    'step' => 1,
                ),
        ) );
        /*H3 letter spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h3-letter-spacing]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h3-letter-spacing'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h3-letter-spacing]', array(
            'label'     => __( 'H3 Letter Spacing', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h3_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h3-letter-spacing]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 0,
                    'max' => 35,
                    'step' => 1,
                ),
        ) );
        /*H3 font weight*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h3-font-weight]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h3-font-weight'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h3-font-weight]', array(
            'label'     => __( 'H3 Font Weight', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h3_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h3-font-weight]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 100,
                    'max' => 800,
                    'step' => 100,
                ),
        ) );
        /*Font and Typography Options for H4*/
        $wp_customize->add_section( 'event_listing_h4_font_options', array(
            'priority'       => 20,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'H4 Font Options', 'event-listing' ),
            'panel'          => 'event_listing_typography_panel',
        ) );
        /*Font Family URL*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-h4-font-family-url]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-h4-font-family-url'],
            'sanitize_callback' => 'event_listing_font_select'
        ) );
        $choices = event_listing_google_fonts();
        $wp_customize->add_control( 'event_listing_options[event-listing-h4-font-family-url]', array(
            'label'     => __( 'URL of Font Family', 'event-listing' ),
            'description' => sprintf('%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
                        __( 'Insert', 'event-listing' ),
                        esc_url('https://www.google.com/fonts'),
                        __('Enter Google Font URL' , 'event-listing'),
                        __('to add google Font.' ,'event-listing')
            ),
            'choices'   => $choices,
            'section'   => 'event_listing_h4_font_options',
            'settings'  => 'event_listing_options[event-listing-h4-font-family-url]',
            'type'      => 'select',
            'priority'  => 15,
        ) );
        /*H4 font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h4-font-size]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h4-font-size'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h4-font-size]', array(
            'label'     => __( 'H4 Font Size', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h4_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h4-font-size]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 12,
                    'max' => 20,
                    'step' => 1,
                ),
        ) );
        /*H4 line spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h4-line-height]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h4-line-height'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h4-line-height]', array(
            'label'     => __( 'H4 Line Height', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h4_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h4-line-height]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 15,
                    'max' => 40,
                    'step' => 1,
                ),
        ) );
        /*H4 letter spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h4-letter-spacing]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h4-letter-spacing'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h4-letter-spacing]', array(
            'label'     => __( 'H4 Letter Spacing', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h4_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h4-letter-spacing]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 0,
                    'max' => 35,
                    'step' => 1,
                ),
        ) );
        /*H4 font weight*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h4-font-weight]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h4-font-weight'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h4-font-weight]', array(
            'label'     => __( 'H4 Font Weight', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h4_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h4-font-weight]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 100,
                    'max' => 800,
                    'step' => 100,
                ),
        ) );
        /*Font and Typography Options for H5*/
        $wp_customize->add_section( 'event_listing_h5_font_options', array(
            'priority'       => 20,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'H5 Font Options', 'event-listing' ),
            'panel'          => 'event_listing_typography_panel',
        ) );
        /*Font Family URL*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-h5-font-family-url]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-h5-font-family-url'],
            'sanitize_callback' => 'event_listing_font_select'
        ) );
        $choices = event_listing_google_fonts();
        $wp_customize->add_control( 'event_listing_options[event-listing-h5-font-family-url]', array(
            'label'     => __( 'URL of Font Family', 'event-listing' ),
            'description' => sprintf('%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
                        __( 'Insert', 'event-listing' ),
                        esc_url('https://www.google.com/fonts'),
                        __('Enter Google Font URL' , 'event-listing'),
                        __('to add google Font.' ,'event-listing')
            ),
            'choices'   => $choices,
            'section'   => 'event_listing_h5_font_options',
            'settings'  => 'event_listing_options[event-listing-h5-font-family-url]',
            'type'      => 'select',
            'priority'  => 15,
        ) );
        /*H5 font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h5-font-size]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h5-font-size'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h5-font-size]', array(
            'label'     => __( 'H5 Font Size', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h5_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h5-font-size]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 12,
                    'max' => 20,
                    'step' => 1,
                ),
        ) );
        /*H5 line spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h5-line-height]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h5-line-height'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h5-line-height]', array(
            'label'     => __( 'H5 Line Height', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h5_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h5-line-height]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 15,
                    'max' => 40,
                    'step' => 1,
                ),
        ) );
        /*H5 letter spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h5-letter-spacing]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h5-letter-spacing'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h5-letter-spacing]', array(
            'label'     => __( 'H5 Letter Spacing', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h5_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h5-letter-spacing]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 0,
                    'max' => 35,
                    'step' => 1,
                ),
        ) );
        /*H5 font weight*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h5-font-weight]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h5-font-weight'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h5-font-weight]', array(
            'label'     => __( 'H5 Font Weight', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h5_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h5-font-weight]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 100,
                    'max' => 800,
                    'step' => 100,
                ),
        ) );
        /*Font and Typography Options for H6*/
        $wp_customize->add_section( 'event_listing_h6_font_options', array(
            'priority'       => 20,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'H6 Font Options', 'event-listing' ),
            'panel'          => 'event_listing_typography_panel',
        ) );
        /*Font Family URL*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-h6-font-family-url]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-h6-font-family-url'],
            'sanitize_callback' => 'event_listing_font_select'
        ) );
        $choices = event_listing_google_fonts();
        $wp_customize->add_control( 'event_listing_options[event-listing-h6-font-family-url]', array(
            'label'     => __( 'URL of Font Family', 'event-listing' ),
            'description' => sprintf('%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
                        __( 'Insert', 'event-listing' ),
                        esc_url('https://www.google.com/fonts'),
                        __('Enter Google Font URL' , 'event-listing'),
                        __('to add google Font.' ,'event-listing')
            ),
            'choices'   => $choices,
            'section'   => 'event_listing_h6_font_options',
            'settings'  => 'event_listing_options[event-listing-h6-font-family-url]',
            'type'      => 'select',
            'priority'  => 15,
        ) );
        /*H6 font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h6-font-size]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h6-font-size'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h6-font-size]', array(
            'label'     => __( 'H6 Font Size', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h6_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h6-font-size]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 12,
                    'max' => 20,
                    'step' => 1,
                ),
        ) );
        /*H6 line spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h6-line-height]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h6-line-height'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h6-line-height]', array(
            'label'     => __( 'H6 Line Height', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h6_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h6-line-height]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 15,
                    'max' => 40,
                    'step' => 1,
                ),
        ) );
        /*H6 letter spacing font Size*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h6-letter-spacing]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h6-letter-spacing'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h6-letter-spacing]', array(
            'label'     => __( 'H6 Letter Spacing', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h6_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h6-letter-spacing]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 0,
                    'max' => 35,
                    'step' => 1,
                ),
        ) );
        /*H6 font weight*/
        $wp_customize->add_setting( 'event_listing_options[event-listing-font-h6-font-weight]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['event-listing-font-h6-font-weight'],
            'sanitize_callback' => 'event_listing_sanitize_number_range'
        ) );
        $wp_customize->add_control( 'event_listing_options[event-listing-font-h6-font-weight]', array(
            'label'     => __( 'H6 Font Weight', 'event-listing' ),
            'description' => __('Size apply only for paragraphs, not headings. ', 'event-listing'),
            'section'   => 'event_listing_h6_font_options',
            'settings'  => 'event_listing_options[event-listing-font-h6-font-weight]',
            'type'      => 'number',
            'priority'  => 15,
            'input_attrs' => array(
                    'min' => 100,
                    'max' => 800,
                    'step' => 100,
                ),
        ) );
