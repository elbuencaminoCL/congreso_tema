<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/**
 * Optiones del tema
 * @file           theme-options.php
 * @package        imexporta 
 */
?>
<?php
add_action('admin_init', 'imexporta_theme_options_init');
add_action('admin_menu', 'imexporta_theme_options_add_page');

/**
 * A safe way of adding JavaScripts to a WordPress generated page.
 */
function imexporta_admin_enqueue_scripts( $hook_suffix ) {
	wp_enqueue_style('imexporta-theme-options', get_template_directory_uri() . '/includes/theme-options.css', false, '1.0');
	//wp_enqueue_script('forestal-theme-options', get_template_directory_uri() . '/includes/theme-options.js', array('jquery'), '1.0');
}
add_action('admin_print_styles-appearance_page_theme_options', 'imexporta_admin_enqueue_scripts');

/**
 * Init plugin options to white list our options
 */
function imexporta_theme_options_init() {
    register_setting('imexporta_options', 'imexporta_theme_options', 'imexporta_theme_options_validate');
}

/**
 * Load up the menu page
 */
function imexporta_theme_options_add_page() {
    add_theme_page(__('Opciones del tema', 'imexporta'), __('Opciones del tema', 'imexporta'), 'edit_theme_options', 'theme_options', 'imexporta_theme_options_do_page');
}
	
/**
 * Create the options page
 */
function imexporta_theme_options_do_page() {

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
        <?php screen_icon(); echo "<h2>" . $theme_name ." ". __('Opciones del tema', 'imexporta') . "</h2>"; ?>
        

		<?php if (false !== $_REQUEST['settings-updated']) : ?>
		<div class="updated fade"><p><strong><?php _e('Opciones guardadas', 'imexporta'); ?></strong></p></div>
		<?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields('imexporta_options'); ?>
            <?php $options = get_option('imexporta_theme_options'); ?>

            <div id="rwd" class="grid col-940">
                <h3 class="rwd-toggle"><a href="#"><?php _e('Opciones Generales sitio - Background', 'imexporta'); ?></a></h3>
                <div class="rwd-container">
                    <div class="rwd-block">
                        <?php
                        /**
                         * Imagen de fondo
                         */
                        ?>
                        <div class="grid col-220"><?php _e('Background sitio', 'imexporta'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="imexporta_theme_options[background]" class="regular-text" type="text" name="imexporta_theme_options[background]" value="<?php if (!empty($options['background'])) echo esc_attr($options['background']); ?>" />
                            <label class="description small-text" for="imexporta_theme_options[background]"><?php _e('Ingrese la dirección de la imagen de fondo', 'imexporta'); ?></label>
                        </div><!-- end of .grid col-620 -->
                    </div><!-- end of .rwd-block -->
                </div><!-- end of .rwd-container -->
            </div><!-- end of .grid col-940 -->

            <div id="rwd" class="grid col-940">
                <h3 class="rwd-toggle"><a href="#"><?php _e('Opciones Generales sitio - header (Redes Sociales)', 'imexporta'); ?></a></h3>
                <div class="rwd-container">
                    <div class="rwd-block">
                        <?php
                        /**
                         * Textos para footer
                         */
                        ?>
                        <div class="grid col-220"><?php _e('Facebook', 'imexporta'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="imexporta_theme_options[facebook]" class="regular-text" type="text" name="imexporta_theme_options[facebook]" value="<?php if (!empty($options['facebook'])) echo esc_attr($options['facebook']); ?>" />
                            <label class="description small-text" for="imexporta_theme_options[facebook]"><?php _e('Ingrese su página de Facebook', 'imexporta'); ?></label>
                        </div><!-- end of .grid col-620 -->
                        <div class="grid col-220"><?php _e('Instagram', 'imexporta'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="imexporta_theme_options[instagram]" class="regular-text" type="text" name="imexporta_theme_options[instagram]" value="<?php if (!empty($options['instagram'])) echo esc_attr($options['instagram']); ?>" />
                            <label class="description small-text" for="imexporta_theme_options[instagram]"><?php _e('Ingrese usuario de Instagram', 'imexporta'); ?></label>
                        </div><!-- end of .grid col-620 -->
                        <div class="grid col-220"><?php _e('Youtube', 'imexporta'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="imexporta_theme_options[youtube]" class="regular-text" type="text" name="imexporta_theme_options[youtube]" value="<?php if (!empty($options['youtube'])) echo esc_attr($options['youtube']); ?>" />
                            <label class="description small-text" for="imexporta_theme_options[youtube]"><?php _e('Ingrese el usuario de Youtube', 'imexporta'); ?></label>
                        </div><!-- end of .grid col-620 -->
                        <div class="grid col-220"><?php _e('Google+', 'imexporta'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="imexporta_theme_options[google]" class="regular-text" type="text" name="imexporta_theme_options[google]" value="<?php if (!empty($options['google'])) echo esc_attr($options['google']); ?>" />
                            <label class="description small-text" for="imexporta_theme_options[google]"><?php _e('Ingrese página de Google+', 'imexporta'); ?></label>
                        </div><!-- end of .grid col-620 -->
                    </div><!-- end of .rwd-block -->
                </div><!-- end of .rwd-container -->
            </div><!-- end of .grid col-940 -->
            
            <div id="rwd" class="grid col-940">
                <h3 class="rwd-toggle"><a href="#"><?php _e('Opciones Generales sitio - footer', 'imexporta'); ?></a></h3>
                <div class="rwd-container">
                    <div class="rwd-block">
                        <?php
                        /**
                         * Textos para footer
                         */
                        ?>
    					<div class="grid col-220"><?php _e('Dirección', 'imexporta'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="imexporta_theme_options[direccion]" class="regular-text" type="text" name="imexporta_theme_options[direccion]" value="<?php if (!empty($options['direccion'])) echo esc_attr($options['direccion']); ?>" />
                            <label class="description small-text" for="imexporta_theme_options[direccion]"><?php _e('Ingrese la dirección correspondiente', 'imexporta'); ?></label>
                        </div><!-- end of .grid col-620 -->
                        <div class="grid col-220"><?php _e('Teléfono', 'imexporta'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="imexporta_theme_options[telefono]" class="regular-text" type="text" name="imexporta_theme_options[telefono]" value="<?php if (!empty($options['telefono'])) echo esc_attr($options['telefono']); ?>" />
                            <label class="description small-text" for="imexporta_theme_options[telefono]"><?php _e('Ingrese el (los) teléfonos respectivos', 'imexporta'); ?></label>
                        </div><!-- end of .grid col-620 -->
                        <div class="grid col-220"><?php _e('E-mail', 'imexporta'); ?></div><!-- end of .grid col-300 -->
                        <div class="grid col-700 fit">
                            <input id="imexporta_theme_options[email]" class="regular-text" type="text" name="imexporta_theme_options[email]" value="<?php if (!empty($options['email'])) echo esc_attr($options['email']); ?>" />
                            <label class="description small-text" for="imexporta_theme_options[email]"><?php _e('Ingrese el e-mail correspondiente', 'imexporta'); ?></label>
                            <p class="submit">
                                <input type="submit" class="button-primary" value="<?php _e('Guardar opciones', 'imexporta'); ?>" />
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
function imexporta_theme_options_validate($input) {

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