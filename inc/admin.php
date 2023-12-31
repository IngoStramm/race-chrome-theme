<?php
/**
 * Race Chrome admin functions.
 */

/**
 * Custom admin scripts.
 */
function race_chrome_admin_scripts() {
	wp_enqueue_style( 'race-chrome-inc-admin', get_template_directory_uri() . '/inc/assets/css/custom-admin.css' );
}

add_action( 'admin_enqueue_scripts', 'race_chrome_admin_scripts' );
add_action( 'login_enqueue_scripts', 'race_chrome_admin_scripts' );

/**
 * Remove logo from admin bar.
 */
function race_chrome_admin_adminbar_remove_logo() {
	global $wp_admin_bar;

	$wp_admin_bar->remove_menu( 'wp-logo' );
}

add_action( 'wp_before_admin_bar_render', 'race_chrome_admin_adminbar_remove_logo' );

/**
 * Custom Footer.
 */
function race_chrome_admin_footer() {
	echo date( 'Y' ) . ' - ' . get_bloginfo( 'name' );
}

add_filter( 'admin_footer_text', 'race_chrome_admin_footer' );

/**
 * Custom logo URL.
 */
function race_chrome_admin_logo_url() {
	return home_url();
}

add_filter( 'login_headerurl', 'race_chrome_admin_logo_url' );

/**
 * Custom logo title.
 */
function race_chrome_admin_logo_title() {
	return get_bloginfo( 'name' );
}

$wp_version = get_bloginfo( 'version' );

if ( version_compare( $wp_version, '5.2', '>=' ) ) {
	add_filter( 'login_headertext', 'race_chrome_admin_logo_title' );
}else{
  add_filter( 'login_headertitle', 'race_chrome_admin_logo_title' );
}

/**
 * Remove widgets dashboard.
 */
function race_chrome_admin_remove_dashboard_widgets() {
	// remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	// remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );

	// Yoast's SEO Plugin Widget
	remove_meta_box( 'yoast_db_widget', 'dashboard', 'normal' );
}

add_action( 'wp_dashboard_setup', 'race_chrome_admin_remove_dashboard_widgets' );

/**
 * Remove Welcome Panel.
 */
remove_action( 'welcome_panel', 'wp_welcome_panel' );
