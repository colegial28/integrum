<?php







function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');
 


function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');


// Incluir Bootstrap JS y dependencia popper
function bootstrap_js() {
	wp_enqueue_script( 'popper_js', 
  					'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', 
  					array(), 
  					'1.14.3', 
  					true); 
	wp_enqueue_script( 'bootstrap_js', 
  					'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', 
  					array('jquery','popper_js'), 
  					'4.1.3', 
  					true); 
}

add_action( 'wp_enqueue_scripts', 'bootstrap_js');

function md_bootstrap_css() {
	wp_enqueue_style( 'md_bootstrap_css', 
  					'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css', 
  					array(), 
  					'4.19.1'
  					); 
}
add_action( 'md_bootstrap_css', 'md_bootstrap_css');


// Incluir Bootstrap JS y dependencia popper
function md_bootstrap_js() {
	wp_enqueue_script( 'md_bootstrap_js', 
  					'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js', 
  					array(), 
  					'4.19.1', 
  					true); 
	
}

add_action( 'wp_enqueue_scripts', 'md_bootstrap_js');







function webflow_assets_css(){
    wp_enqueue_style('main_styles_normalize', get_theme_file_uri('/assets/css/normalize.css'));
    wp_enqueue_style('main_styles_webflow', get_theme_file_uri('/assets/css/webflow.css'));
    wp_enqueue_style('main_styles_main', get_theme_file_uri('/assets/css/intregrum-llc.webflow.css'));


}

add_action( 'wp_enqueue_scripts', 'webflow_assets_css');


function webflow_assets_js(){
    wp_enqueue_script("webflow_js_1",get_theme_file_uri('/assets/js/customize-controls.js'));
    wp_enqueue_script("webflow_js_2",get_theme_file_uri('/assets/js/customize-preview.js'));
    wp_enqueue_script("webflow_js_3",get_theme_file_uri('/assets/js/global.js'));
    wp_enqueue_script("webflow_js_4",get_theme_file_uri('/assets/js/html5.js'));
    wp_enqueue_script("webflow_js_5",get_theme_file_uri('/assets/js/jquery.scrollTo.js'));
    wp_enqueue_script("webflow_js_6",get_theme_file_uri('/assets/js/navigation.js'));
    wp_enqueue_script("webflow_js_7",get_theme_file_uri('/assets/js/skip-link-focus-fix.js'));




}

add_action( 'wp_enqueue_scripts', 'webflow_assets_js');

function webflow_assets_fonts(){
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&family=Roboto:wght@700;900&display=swap');
}

add_action( 'wp_enqueue_scripts', 'webflow_assets_fonts');

function university_files(){
    wp_enqueue_style('main_styles', get_stylesheet_uri());

    

}










