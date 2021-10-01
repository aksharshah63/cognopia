<?php

$services = new WP_Query( array(
    'post_type'      => 'stm_services',
    'posts_per_page' => $posts_per_page
) );

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
$css_class .= ' stm_services_text_carousel_' . $carousel_style;
//$css_class .= ' ' . $anim;

wp_enqueue_style('lightgallery');
wp_enqueue_script('lightgallery.js');

wp_enqueue_script( 'pearl-owl-carousel2' );
wp_enqueue_style( 'owl-carousel2' );

$owl_id     = uniqid( 'owl-' );
$owl_nav_id = uniqid( 'owl-nav-' );

$image_size = (!empty($image_size)) ? $image_size : '270x170';

$i = 0;
?>

<?php if ( $services->have_posts() ): ?>
    <div class="stm_services_text_carousel <?php echo esc_attr( $css_class ); ?>">
        <div class="stm_services_carousel_wr">
            <div class="stm_services_carousel" id="<?php echo esc_attr( $owl_id ); ?>">
                <?php while ( $services->have_posts() ): $services->the_post(); $i++;
                $current = ($services->current_post < 9) ? '0' . ($services->current_post + 1) : ($services->current_post + 1);
                ?>
                    <a href="<?php the_permalink(); ?>" class="services_carousel__item">
                        
                        <?php if ( has_post_thumbnail() ): ?>
                            <?php
                            $id = get_the_ID();
                            $img_id = get_post_thumbnail_id($id);
                            $full_image = pearl_get_image_url($img_id);
                            echo pearl_get_VC_img(get_post_thumbnail_id(), $image_size);
                            ?>
                        <?php endif; ?>
                        <span class="services_carousel__content">
                            <span class="services_carousel__title heading_font"><?php the_title(); ?> <i class="stmicon-arrow-right"></i></span>
                            <span class="services_carousel__price">From <?php echo get_post_meta($id, 'service_price', true) ?></span>
                        </span>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
        <script>
            jQuery(document).ready(function ($) {
                $("#<?php echo esc_js( $owl_id ); ?>").owlCarousel({
                    dotsContainer: '#<?php echo esc_js( $owl_nav_id ); ?>',
                    items: <?php echo esc_js( $items ); ?>,
                    margin: 30,
                    <?php if( $autoplay ): ?>
                    autoplay: true,
                    <?php endif; ?>
                    <?php if( $hide_pagination_control ): ?>
                    dots: false,
                    <?php endif; ?>
                    <?php if( $show_arrows_control ): ?>
                    nav: true,
                    <?php endif; ?>
                    <?php if( $loop ): ?>
                    loop: true,
                    <?php endif; ?>
                    autoplayTimeout: <?php echo esc_js( $timeout ); ?>,
                    smartSpeed: <?php echo esc_js( $smart_speed ); ?>,
                    navText: '',
                    responsive: {
                        0: {
                            items: 1
                        },
                        420: {
                            items: <?php echo esc_js( $items_mobile ); ?>
                        },
                        768: {
                            items: <?php echo esc_js( $items_tablet ); ?>
                        },
                        980: {
                            items: <?php echo esc_js( $items_small_desktop ); ?>
                        },
                        1199:{
                            items: <?php echo esc_js( $items ); ?>
                        }
                    },
                });
            });
        </script>
    </div>
<?php endif;
wp_reset_postdata(); ?>