Created the 'wp_ajax_load_more_posts' and 'wp_ajax_nopriv_load_more_posts' action hooks to add the ajax handling function for all users (logged- and non-logged-in);

Added new load_more_posts_callback() php-function as an callback, where the output creates using the parent theme templates for the post content;

Used the wp_localize_script() function to be able to use the ajax WP handler from the outside of the admin panel;

Added the load_more_posts_javascript() to print out the script on the Home page. Used the offset variable to compare with the posts counter and hide the 'Load more' button in case if all posts are already shown.

Used this template as an example to create the Header and the Footer: https://www.graphberry.com/products/download/mint-minimal-portfolio-psd-template