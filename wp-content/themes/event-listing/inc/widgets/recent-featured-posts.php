<?php
/**
 * Event Listing Featured Post Widget.
 *
 * @since 1.0.0
 */
if (!class_exists('Event_Listing_Featured_Post')) :

    /**
     * Highlight Post widget class.
     *
     * @since 1.0.0
     */
    class Event_Listing_Featured_Post extends WP_Widget
    {
        private function defaults()
        {
            $defaults = array(
                'title' => esc_html__('Recent Posts', 'event-listing'),
                'cat' => 0,
                'post-number' => 3,

            );
            return $defaults;
        }

        public function __construct()
        {
            $opts = array(
                'classname' => 'event-listing-featured-post',
                'description' => esc_html__('Display recent post with image on the front page widget area.', 'event-listing'),
            );

            parent::__construct('event-listing-featured-post', esc_html__('Event Listing Featured Post', 'event-listing'), $opts);
        }


        public function widget($args, $instance)
        {
            $instance = wp_parse_args((array)$instance, $this->defaults());
            $title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
            echo $args['before_widget'];


            if (!empty($title)) {
                echo $args['before_title'] . esc_html($title) . $args['after_title'];
            }
            $cat_id = !empty($instance['cat']) ? $instance['cat'] : '';

            $post_number = !empty($instance['post-number']) ? $instance['post-number'] : '';

            $query_args = array(
                'post_type' => 'post',
                'cat' => absint($cat_id),
                'posts_per_page' => absint($post_number),
                'ignore_sticky_posts' => true
            );


            $i = 1;
            $query = new WP_Query($query_args);
            ?>
            <div class="conainer">
                <div class="recent-post-list">
                    <?php
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                            ?>
                            <div class="recent-post-list-single">
                                <div class="recent-post-single">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        ?>
                                        <figure class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                                <div class="widget_bg_overlay"></div>
                                            </a>
                                        </figure>

                                        <?php
                                    }
                                    ?>
                                    <div class="widget_featured_content">
                                        <h3 class="entry-title"><a
                                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="enrty-meta">
                                            <?php
                                            event_listing_posted_on();
                                            event_listing_posted_by();
                                            ?>
                                        </div>
                                        <div class="post-date">
                                            <?php the_excerpt(); ?>
                                        </div><!-- .entry-meta -->
                                    </div>
                                </div>
                            </div>


                            <?php
                            $i++;
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
            <?php


            echo $args['after_widget'];

        }

        public function update($new_instance, $old_instance)
        {
            $instance = $old_instance;
            $instance['title'] = sanitize_text_field($new_instance['title']);
            $instance['cat'] = absint($new_instance['cat']);
            $instance['post-number'] = absint($new_instance['post-number']);
            return $instance;
        }

        public function form($instance)
        {
            $instance = wp_parse_args((array )$instance, $this->defaults());

            ?>
            <p>
                <label
                        for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'event-listing'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                       name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                       value="<?php echo esc_attr($instance['title']); ?>"/>
            </p>
            <p class="custom-dropdown-posts">
                <label for="<?php echo esc_attr($this->get_field_name('cat')); ?>">
                    <strong><?php esc_html_e('Select Category: ', 'event-listing'); ?></strong>
                </label>
                <?php
                $cat_args = array(
                    'orderby' => 'name',
                    'hide_empty' => 0,
                    'id' => $this->get_field_id('cat'),
                    'name' => $this->get_field_name('cat'),
                    'class' => 'widefat',
                    'taxonomy' => 'category',
                    'selected' => absint($instance['cat']),
                    'show_option_all' => esc_html__('Show Recent Posts', 'event-listing')
                );
                wp_dropdown_categories($cat_args);
                ?>
            </p>

            <p>
                <label
                        for="<?php echo esc_attr($this->get_field_id('post-number')); ?>"><?php esc_html_e('Number of Posts to Display:', 'event-listing'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('post-number')); ?>"
                       name="<?php echo esc_attr($this->get_field_name('post-number')); ?>" type="number"
                       value="<?php echo esc_attr($instance['post-number']); ?>"/>
            </p>

            <?php
        }
    }

endif;

if (!function_exists('event_listing_load_widgets')) :

    function event_listing_load_widgets()
    {

        // Featured Post.
        register_widget('Event_Listing_Featured_Post');

    }
endif;
add_action('widgets_init', 'event_listing_load_widgets');