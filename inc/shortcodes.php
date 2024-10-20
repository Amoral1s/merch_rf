<?php 


function services() {
  ob_start();
  get_template_part('shortcodes/services');
  return ob_get_clean();
}
add_shortcode('services', 'services');



