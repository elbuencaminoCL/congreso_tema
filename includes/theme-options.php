<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/**
 * Optiones del tema
 * @file           theme-options.php
 * @package        congreso 
 */
?>
<?php
add_action('admin_init', 'congreso_theme_options_init');
add_action('admin_menu', 'congreso_theme_options_add_page');

/**
 * A safe way of adding JavaScripts to a WordPress generated page.
 */
function congreso_admin_enqueue_scripts( $hook_suffix ) {
	wp_enqueue_style('congreso-theme-options', get_template_directory_uri() . '/includes/theme-options.css', false, '1.0');
	//wp_enqueue_script('forestal-theme-options', get_template_directory_uri() . '/includes/theme-options.js', array('jquery'), '1.0');
}
add_action('admin_print_styles-appearance_page_theme_options', 'congreso_admin_enqueue_scripts');

/**
 * Init plugin options to white list our options
 */
function congreso_theme_options_init() {
    register_setting('congreso_options', 'congreso_theme_options', 'congreso_theme_options_validate');
}

/**
 * Load up the menu page
 */
function congreso_theme_options_add_page() {
    add_theme_page(__('Opciones del tema', 'congreso'), __('Opciones del tema', 'congreso'), 'edit_theme_options', 'theme_options', 'congreso_theme_options_do_page');
}
	
/**
 * Create the options page
 */
function congreso_theme_options_do_page() {

	if (!isset($_REQUEST['settings-updated']))
		$_REQUEST['settings-updated'] = false;
	?>
    
    <div class="wrap">
        <?php
        /**
         * < 3.4 Backward Compatibility
         */
        ?>
        <?php $theme_name = function_exists('wp_get_theme') ? wp_get_theme() : get_current_theme(); ?>
        <?php screen_icon(); echo "<h2>" . $theme_name ." ". __('Opciones del tema', 'congreso') . "</h2>"; ?>
        

		<?php if (false !== $_REQUEST['settings-updated']) : ?>
		<div class="updated fade"><p><strong><?php _e('Opciones guardadas', 'congreso'); ?></strong></p></div>
		<?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields('congreso_options'); ?>
            <?php $options = get_option('congreso_theme_options'); ?>
            <div id="rwd" class="grid col-940">
                <h3 class="rwd-toggle"><a href="#"><?php _e('Opciones Generales sitio - inicio', 'congreso'); ?></a></h3>
                <div class="rwd-container">
                    <div class="rwd-block">
                        <?php
                        /**
                         * Textos para inicio
                         */
                        ?>
                        <div class="grid col-220"><?php _e('Fecha Congreso', 'congreso'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="congreso_theme_options[fecha]" class="regular-text" type="text" name="congreso_theme_options[fecha]" value="<?php if (!empty($options['fecha'])) echo esc_attr($options['fecha']); ?>" />
                            <label class="description small-text" for="congreso_theme_options[fecha]"><?php _e('Ingrese la fecha del Congreso', 'congreso'); ?></label>
                        </div><!-- end of .grid col-620 -->
                        <div class="grid col-220"><?php _e('Lugar Congreso', 'congreso'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="congreso_theme_options[lugar]" class="regular-text" type="text" name="congreso_theme_options[lugar]" value="<?php if (!empty($options['lugar'])) echo esc_attr($options['lugar']); ?>" />
                            <label class="description small-text" for="congreso_theme_options[lugar]"><?php _e('Ingrese lugar del Congreso', 'congreso'); ?></label>
                        </div><!-- end of .grid col-620 -->
                    </div><!-- end of .rwd-block -->
                </div><!-- end of .rwd-container -->
            </div><!-- end of .grid col-940 -->
            
            <div id="rwd" class="grid col-940">
                <h3 class="rwd-toggle"><a href="#"><?php _e('Opciones Generales sitio - footer', 'congreso'); ?></a></h3>
                <div class="rwd-container">
                    <div class="rwd-block">
                        <?php
                        /**
                         * Textos para footer
                         */
                        ?>
    					<div class="grid col-220"><?php _e('Texto footer', 'congreso'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="congreso_theme_options[texto_footer]" class="regular-text" type="text" name="congreso_theme_options[texto_footer]" value="<?php if (!empty($options['texto_footer'])) echo esc_attr($options['texto_footer']); ?>" />
                            <label class="description small-text" for="congreso_theme_options[texto_footer]"><?php _e('Ingrese texto que aparecerá en el footer del sitio', 'congreso'); ?></label>
                            <p class="submit">
                                <input type="submit" class="button-primary" value="<?php _e('Guardar opciones', 'congreso'); ?>" />
                            </p>
                        </div><!-- end of .grid col-620 -->
                    </div><!-- end of .rwd-block -->
                </div><!-- end of .rwd-container -->
            </div><!-- end of .grid col-940 -->
        </form>
    </div>
    <?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function congreso_theme_options_validate($input) {

	// checkbox value is either 0 or 1
	foreach (array(
		'breadcrumb',
		'cta_button'
		) as $checkbox) {
		if (!isset($input[$checkbox]))
			$input[$checkbox] = null;
		    $input[$checkbox] = ( $input[$checkbox] == 1 ? 1 : 0 );
	}
	
	$input['subtitulo01'] = wp_kses_stripslashes($input['subtitulo01']);
	
    return $input;
}

/*END*/