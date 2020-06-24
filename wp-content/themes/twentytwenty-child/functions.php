<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), '1.0.0');
    wp_enqueue_script('child-script', get_stylesheet_directory_uri().'/child-script.js', array('jquery',), '1.0.0', true);
    wp_localize_script('child-script', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        )
    );
}

//добавляем функцию со скриптом обработки аякс-запроса
add_action('wp_footer', 'load_more_posts_javascript', 99);
function load_more_posts_javascript() {
    if(is_home()) {
        ?>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#load-more-btn').on('click',function(e){
                    e.preventDefault();
                    var offset = $('.home article').length;
                    if(offset > <?php echo wp_count_posts( 'post' )->publish; ?>) {
                        $('#load-more-btn').hide();
                    } else {
                        var data = {
                            action: 'load_more_posts',
                            offset: offset
                        };
                        $.post( myajax.url, data, function(response) {
                            if(response){
                                $('#site-content').append(response);
                            };
                        });
                    }
                    return false;
                });
            });
        </script>
        <?php
    }
}
add_action('wp_ajax_load_more_posts', 'load_more_posts_callback');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts_callback');
function load_more_posts_callback() {
    $args = array(
        'post_type' => 'post',
        'numberposts' => 10
    );
    if( isset($_POST['offset']) ) {
        $args['offset'] = $_POST['offset'];
    }
    $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

        <!-- pagination here -->

        <!-- the loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php echo get_template_part( 'template-parts/content', get_post_type() ); ?>
        <?php endwhile; ?>
        <!-- end of the loop -->

        <!-- pagination here -->

        <?php wp_reset_postdata();?>

    <?php else : ?>
    <?php endif;
    wp_die();
}
function twentytwenty_child_sidebar_registration() {

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget'  => '</div></div>',
    );

    // Footer Bottom.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'        => __( 'Footer Bottom', 'twentytwentychild' ),
                'id'          => 'sidebar-bottom',
                'description' => __( 'Widgets in this area will be displayed in the bottom section of the footer.', 'twentytwentychild' ),
            )
        )
    );

}

add_action( 'widgets_init', 'twentytwenty_child_sidebar_registration' );