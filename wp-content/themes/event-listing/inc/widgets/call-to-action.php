<?php
/**
 * Event Listing Featured Post Widget.
 *
 * @since 1.0.0
 */
if (!class_exists('Event_Listing_CTA')) :

    /**
     * Highlight Post widget class.
     *
     * @since 1.0.0
     */
    class Event_Listing_CTA extends WP_Widget
    {
        private function defaults()
        {
            $defaults = array(
                'title'    => esc_html__( 'Popular Music Event by Local Band', 'event-listing' ),
                'sub_title'    => esc_html__( 'Do you want to register for free today? We will give 100 free ticket today. Signup now!', 'event-listing' ),
                'cta_btn_text'    => esc_html__( 'Signup', 'event-listing' ),
                'btn_link'    => esc_url( '#', 'event-listing' ),

            );
            return $defaults;
        }

        public function __construct()
        {
            $opts = array(
                'classname' => 'event-listing-cta-widget',
                'description' => esc_html__('Help to disply the important event link.', 'event-listing'),
            );

            parent::__construct('event-listing-cta-widget', esc_html__('Event Listing Call to Action', 'event-listing'), $opts);
        }


        public function widget($args, $instance)
        {
            $instance = wp_parse_args( (array) $instance, $this->defaults() );
            $title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
            echo $args['before_widget'];

            $sub_title = !empty($instance['sub_title']) ? $instance['sub_title'] : '';

            $cta_btn_text = !empty($instance['cta_btn_text']) ? $instance['cta_btn_text'] : '';

            $btn_link = !empty($instance['btn_link']) ? $instance['btn_link'] : ''; 


            if (!empty($title)) {
                echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
            }
            ?>

            <div class="event-listing-cta">
                <div class="event-listing-cta-subtitle">
                    <?php echo esc_html($sub_title); ?>
                </div>
                <div class="event-listing-cta-button">
                    <a href="<?php echo esc_url($btn_link); ?>" class="btn"><?php echo esc_html($cta_btn_text); ?></a>
                </div>

            </div>

            <?php

            echo $args['after_widget'];

        }

        public function update($new_instance, $old_instance)
        {
            $instance = $old_instance;
            $instance['title'] = sanitize_text_field($new_instance['title']);
            $instance['sub_title'] = sanitize_text_field($new_instance['sub_title']);
            $instance['cta_btn_text'] = sanitize_text_field($new_instance['cta_btn_text']);
            $instance['btn_link'] = esc_url_raw($new_instance['btn_link']);
            return $instance;
        }
        public function form($instance)
        {
            $instance  = wp_parse_args( (array )$instance, $this->defaults() );
            
            ?>
            <p>
                <label
                for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'event-listing'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                value="<?php echo esc_attr($instance['title']); ?>"/>
            </p>

            <p>
                <label
                for="<?php echo esc_attr($this->get_field_id('sub_title')); ?>"><?php esc_html_e('Sub Title:', 'event-listing'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('sub_title')); ?>"
                name="<?php echo esc_attr($this->get_field_name('sub_title')); ?>" type="text"
                value="<?php echo esc_attr($instance['sub_title']); ?>"/>
            </p>

            <p>
                <label
                for="<?php echo esc_attr($this->get_field_id('cta_btn_text')); ?>"><?php esc_html_e('Button Text:', 'event-listing'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('cta_btn_text')); ?>"
                name="<?php echo esc_attr($this->get_field_name('cta_btn_text')); ?>" type="text"
                value="<?php echo esc_attr($instance['cta_btn_text']); ?>"/>
            </p>

            <p>
                <label
                for="<?php echo esc_attr($this->get_field_id('btn_link')); ?>"><?php esc_html_e('Button Link:', 'event-listing'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('btn_link')); ?>"
                name="<?php echo esc_attr($this->get_field_name('btn_link')); ?>" type="text"
                value="<?php echo esc_attr($instance['btn_link']); ?>"/>
            </p>
            

            <?php
        }
    }

endif;

if ( ! function_exists( 'event_listing_cta_load_widgets' ) ) :

    function event_listing_cta_load_widgets() {

        // CTA Widget.
        register_widget( 'Event_Listing_CTA' );

    }
endif;
add_action( 'widgets_init', 'event_listing_cta_load_widgets' );