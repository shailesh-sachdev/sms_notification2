<?php
/**
 * Dynamic css
 *
 * @param null
 * @return null
 *
 * @since Event Listing 1.0.0
 *
 */
if (!function_exists('event_listing_dynamic_css')) :

    function event_listing_dynamic_css()
    {
        global $event_listing_theme_options;

        if(empty($event_listing_theme_options))
            return;

        /* Paragraph Font Options */
        $event_listing_google_fonts = event_listing_google_fonts();
        $event_listing_font_family = $event_listing_theme_options['event-listing-font-family-url'];
        $event_listing_font_body_family = esc_attr($event_listing_google_fonts[$event_listing_font_family]);

        $event_listing_font_size = esc_attr($event_listing_theme_options['event-listing-font-paragraph-font-size']);
        $event_listing_paragraph_line_height = esc_attr($event_listing_theme_options['event-listing-font-paragraph-line-height']);
        $event_listing_paragraph_letter_spacing = esc_attr($event_listing_theme_options['event-listing-font-paragraph-letter-spacing']);
        $event_listing_paragraph_font_weight = esc_attr($event_listing_theme_options['event-listing-font-paragraph-font-weight']);

        /* H1 Font Options */
        $event_listing_h1_family = $event_listing_theme_options['event-listing-h1-font-family-url'];
        $event_listing_h1_font_family = esc_attr($event_listing_google_fonts[$event_listing_h1_family]);
        $event_listing_h1_font_size = esc_attr($event_listing_theme_options['event-listing-font-h1-font-size']);
        $event_listing_h1_line_height = esc_attr($event_listing_theme_options['event-listing-font-h1-line-height']);
        $event_listing_h1_letter_spacing = esc_attr($event_listing_theme_options['event-listing-font-h1-letter-spacing']);
        $event_listing_h1_font_weight = esc_attr($event_listing_theme_options['event-listing-font-h1-font-weight']);

        /* H2 Font Options */
        $event_listing_h2_family = $event_listing_theme_options['event-listing-h2-font-family-url'];
        $event_listing_h2_font_family = esc_attr($event_listing_google_fonts[$event_listing_h2_family]);
        $event_listing_h2_font_size = esc_attr($event_listing_theme_options['event-listing-font-h2-font-size']);
        $event_listing_h2_line_height = esc_attr($event_listing_theme_options['event-listing-font-h2-line-height']);
        $event_listing_h2_letter_spacing = esc_attr($event_listing_theme_options['event-listing-font-h2-letter-spacing']);
        $event_listing_h2_font_weight = esc_attr($event_listing_theme_options['event-listing-font-h2-font-weight']);

        /* H3 Font Options */
        $event_listing_h3_family = $event_listing_theme_options['event-listing-h3-font-family-url'];
        $event_listing_h3_font_family = esc_attr($event_listing_google_fonts[$event_listing_h3_family]);
        $event_listing_h3_font_size = esc_attr($event_listing_theme_options['event-listing-font-h3-font-size']);
        $event_listing_h3_line_height = esc_attr($event_listing_theme_options['event-listing-font-h3-line-height']);
        $event_listing_h3_letter_spacing = esc_attr($event_listing_theme_options['event-listing-font-h3-letter-spacing']);
        $event_listing_h3_font_weight = esc_attr($event_listing_theme_options['event-listing-font-h3-font-weight']);

        /* H4 Font Options */
        $event_listing_h4_family = $event_listing_theme_options['event-listing-h4-font-family-url'];
        $event_listing_h4_font_family = esc_attr($event_listing_google_fonts[$event_listing_h4_family]);
        $event_listing_h4_font_size = esc_attr($event_listing_theme_options['event-listing-font-h4-font-size']);
        $event_listing_h4_line_height = esc_attr($event_listing_theme_options['event-listing-font-h4-line-height']);
        $event_listing_h4_letter_spacing = esc_attr($event_listing_theme_options['event-listing-font-h4-letter-spacing']);
        $event_listing_h4_font_weight = esc_attr($event_listing_theme_options['event-listing-font-h4-font-weight']);

        /* H5 Font Options */
        $event_listing_h5_family = $event_listing_theme_options['event-listing-h5-font-family-url'];
        $event_listing_h5_font_family = esc_attr($event_listing_google_fonts[$event_listing_h5_family]);
        $event_listing_h5_font_size = esc_attr($event_listing_theme_options['event-listing-font-h5-font-size']);
        $event_listing_h5_line_height = esc_attr($event_listing_theme_options['event-listing-font-h5-line-height']);
        $event_listing_h5_letter_spacing = esc_attr($event_listing_theme_options['event-listing-font-h5-letter-spacing']);
        $event_listing_h5_font_weight = esc_attr($event_listing_theme_options['event-listing-font-h5-font-weight']);

        /* H6 Font Options */
        $event_listing_h6_family = $event_listing_theme_options['event-listing-h6-font-family-url'];
        $event_listing_h6_font_family = esc_attr($event_listing_google_fonts[$event_listing_h6_family]);
        $event_listing_h6_font_size = esc_attr($event_listing_theme_options['event-listing-font-h6-font-size']);
        $event_listing_h6_line_height = esc_attr($event_listing_theme_options['event-listing-font-h6-line-height']);
        $event_listing_h6_letter_spacing = esc_attr($event_listing_theme_options['event-listing-font-h6-letter-spacing']);
        $event_listing_h6_font_weight = esc_attr($event_listing_theme_options['event-listing-font-h6-font-weight']);

        /* Color Options */
        $event_listing_page_content_color = esc_attr($event_listing_theme_options['event_listing_page_content_color']);
        $event_listing_primary_color = esc_attr($event_listing_theme_options['event_listing_primary_color']);
        $event_listing_secondary_color = esc_attr($event_listing_theme_options['event_listing_secondary_color']);
        $event_listing_button_color = esc_attr($event_listing_theme_options['event_listing_button_color']);
        $event_listing_button_text_color = esc_attr($event_listing_theme_options['event_listing_button_text_color']);
        $event_listing_link_color = esc_attr($event_listing_theme_options['event_listing_link_color']);
        $event_listing_link_hover_color = esc_attr($event_listing_theme_options['event_listing_link_hover_color']);
        $wpem_primary_color = isset($event_listing_theme_options['event_listing_wpem_primary_color']) ? esc_attr($event_listing_theme_options['event_listing_wpem_primary_color']) : '';



        $custom_css = '';

        //Paragraph Font Options 
        if (!empty($event_listing_font_body_family)) {
            $custom_css .= "
            body{ 
                font-family:" . $event_listing_font_body_family . "; 
            }";
        }

        if (!empty($event_listing_font_size)) {
            $custom_css .= "
            body, .event-social-menu li a:before,
            input[type=\"submit\"],
            button, 
            input[type=\"button\"], 
            input[type=\"reset\"]{ 
                font-size: " . $event_listing_font_size . "px; 
            }";
        }
        if (!empty($event_listing_paragraph_line_height)) {
            $custom_css .= "
            body, .event-social-menu li a:before{ 
                line-height:" . $event_listing_paragraph_line_height . "px; 
            }";
        }
        if (!empty($event_listing_paragraph_letter_spacing)) {
            $custom_css .= "
            body{ 
                letter-spacing:" . $event_listing_paragraph_letter_spacing . "px; 
            }";
        }
        if (!empty($event_listing_paragraph_font_weight)) {
            $custom_css .= "
            body{ 
                font-weight:" . $event_listing_paragraph_font_weight . "; 
            }";
        }


        // H1 Font Options 

        if (!empty($event_listing_h1_font_family)) {
            $custom_css .= "
            h1, .site-title{ 
                font-family:" . $event_listing_h1_font_family . "; 
            }";
        }

        if (!empty($event_listing_h1_font_size)) {
            $custom_css .= "
            h1, .site-title{ 
                font-size:" . $event_listing_h1_font_size . "px; 
            }";
        }
        if (!empty($event_listing_h1_line_height)) {
            $custom_css .= "
            h1, .site-title{ 
                line-height: " . $event_listing_h1_line_height . "px; 
            }";
        }
        if (!empty($event_listing_h1_letter_spacing)) {
            $custom_css .= "
            h1, .site-title{ 
                letter-spacing:" . $event_listing_h1_letter_spacing . "px; 
            }";
        }
        if (!empty($event_listing_h1_font_weight)) {
            $custom_css .= "
            h1, .site-title{ 
                font-weight:" . $event_listing_h1_font_weight . "; 
            }";
        }

        // H2 Font Options 

        if (!empty($event_listing_h2_font_family)) {
            $custom_css .= "
            h2{ 
                font-family:" . $event_listing_h2_font_family . "; 
            }";
        }

        if (!empty($event_listing_h2_font_size)) {
            $custom_css .= "
            h2{ 
                font-size:" . $event_listing_h2_font_size . "px; 
            }";
        }
        if (!empty($event_listing_h2_line_height)) {
            $custom_css .= "
            h2{ 
                line-height:" . $event_listing_h2_line_height . "px; 
            }";
        }
        if (!empty($event_listing_h2_letter_spacing)) {
            $custom_css .= "
            h2{ 
                letter-spacing:" . $event_listing_h2_letter_spacing . "px; 
            }";
        }
        if (!empty($event_listing_h2_font_weight)) {
            $custom_css .= "
            h2{ 
                font-weight:" . $event_listing_h2_font_weight . "; 
            }";
        }

        // H3 Font Options 
        if (!empty($event_listing_h3_font_family)) {
            $custom_css .= "
            h3{ 
                font-family:" . $event_listing_h3_font_family . "; 
            }";
        }

        if (!empty($event_listing_h3_font_size)) {
            $custom_css .= "
            h3{ 
                font-size:" . $event_listing_h3_font_size . "px; 
            }";
        }
        if (!empty($event_listing_h3_line_height)) {
            $custom_css .= "
            h3{ 
                line-height:" . $event_listing_h3_line_height . "px; 
            }";
        }
        if (!empty($event_listing_h3_letter_spacing)) {
            $custom_css .= "
            h3{ 
                letter-spacing:" . $event_listing_h3_letter_spacing . "px; 
            }";
        }
        if (!empty($event_listing_h3_font_weight)) {
            $custom_css .= "
            h3{ 
                font-weight: " . $event_listing_h3_font_weight . "; 
            }";
        }

        /* H4 Font Options */
        if (!empty($event_listing_h4_font_family)) {
            $custom_css .= "
            h4{ 
                font-family:" . $event_listing_h4_font_family . "; 
            }";
        }

        if (!empty($event_listing_h4_font_size)) {
            $custom_css .= "
            h4{ 
                font-size:" . $event_listing_h4_font_size . "px; 
            }";
        }
        if (!empty($event_listing_h4_line_height)) {
            $custom_css .= "
            h4{ 
                line-height:" . $event_listing_h4_line_height . "px; 
            }";
        }
        if (!empty($event_listing_h4_letter_spacing)) {
            $custom_css .= "
            h4{ 
                letter-spacing:" . $event_listing_h4_letter_spacing . "px; 
            }";
        }
        if (!empty($event_listing_h4_font_weight)) {
            $custom_css .= "
            h4{ 
                font-weight: " . $event_listing_h4_font_weight . "; 
            }";
        }

        /* H5 Font Options */
        if (!empty($event_listing_h5_font_family)) {
            $custom_css .= "
            h5{ 
                font-family:" . $event_listing_h5_font_family . "; 
            }";
        }

        if (!empty($event_listing_h5_font_size)) {
            $custom_css .= "
            h5{ 
                font-size: " . $event_listing_h5_font_size . "px; 
            }";
        }
        if (!empty($event_listing_h5_line_height)) {
            $custom_css .= "
            h5{ 
                line-height:" . $event_listing_h5_line_height . "px; 
            }";
        }
        if (!empty($event_listing_h5_letter_spacing)) {
            $custom_css .= "
            h5{ 
                letter-spacing:" . $event_listing_h5_letter_spacing . "px; 
            }";
        }
        if (!empty($event_listing_h5_font_weight)) {
            $custom_css .= "
            h5{ 
                font-weight:" . $event_listing_h5_font_weight . "; 
            }";
        }

        /* H6 Font Options */
        if (!empty($event_listing_h6_font_family)) {
            $custom_css .= "
            h6{ 
                font-family:" . $event_listing_h6_font_family . "; 
            }";
        }

        if (!empty($event_listing_h6_font_size)) {
            $custom_css .= "
            h6{ 
                font-size:" . $event_listing_h6_font_size . "px; 
            }";
        }
        if (!empty($event_listing_h6_line_height)) {
            $custom_css .= "
            h6{ 
                line-height:" . $event_listing_h6_line_height . "px; 
            }";
        }
        if (!empty($event_listing_h6_letter_spacing)) {
            $custom_css .= "
            h6{ 
                letter-spacing:" . $event_listing_h6_letter_spacing . "px; 
            }";
        }
        if (!empty($event_listing_h6_font_weight)) {
            $custom_css .= "
            h6{ 
                font-weight:" . $event_listing_h6_font_weight . "; 
            }";
        }

        /* Color Options */
        if (!empty($event_listing_page_content_color)) {
            $custom_css .= "
            :root{
                --wpem-theme-content-color:" . $event_listing_page_content_color . ";
            }";
        }
        if (!empty($event_listing_primary_color)) {
            $custom_css .= "
            :root{
                --wpem-theme-primary-color:" . $event_listing_primary_color . ";
            }";
        }

        if (!empty($event_listing_secondary_color)) {
            $custom_css .= "
            :root{
                --wpem-theme-secondary-color:" . $event_listing_secondary_color . ";
            }";
        }

        if (!empty($event_listing_button_color)) {
            $custom_css .= "
            :root{
                --wpem-theme-button-color:" . $event_listing_button_color . ";
            }";
        }

        if (!empty($event_listing_button_text_color)) {
            $custom_css .= "
            :root{
                --wpem-theme-button-text-color:" . $event_listing_button_text_color . ";
            }";
        }

        if (!empty($event_listing_link_color)) {
            $custom_css .= "
            :root{
                --wpem-theme-link-color:" . $event_listing_link_color . ";
            }";
        }
        if (!empty($event_listing_link_hover_color)) {
            $custom_css .= "
            :root{
                --wpem-theme-link-hover-color:" . $event_listing_link_hover_color . ";
            }";
        }
        if (!empty($wpem_primary_color)) {
            $custom_css .= "
            :root{
                --wpem-primary-color:" . $wpem_primary_color . ";
            }";
        }

        wp_add_inline_style('event-listing-style', $custom_css);
    }
endif;
add_action('wp_enqueue_scripts', 'event_listing_dynamic_css', 99);
