
<?php

/* Menu */
  register_nav_menus(array(
    'menu_navbar' => 'navbar',
    'menu_footer' => 'footer',
  ));

/* Images */
add_theme_support('post-thumbnails');
add_image_size('slider_thumbs', 470, 300, true);
add_image_size('articles_list_thumbs', 450, 370, true);

/* Sidebar */

register_sidebar(array(
  'name' => 'Widgets Sidebar',
  'id' => 'widgets_sidebar',
  'description' => 'The widgets sidebar',
  'before_widget' => '<section class="widget">',
  'after_widget' => "</section>",
  'before_title' => '<h3 class="widgettitle">',
  'after_title' => "</h3>"
));

register_sidebar(array(
  'name' => 'Widgets Footer',
  'id' => 'widgets_footer',
  'description' => 'The widgets footer',
  'before_widget' => '<section class="widget">',
  'after_widget' => "</section>",
  'before_title' => '<h3 class="widgettitle">',
  'after_title' => "</h3>"
));


?>
