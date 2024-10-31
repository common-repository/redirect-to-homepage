<?php
/*
Plugin Name: Redirect to Homepage
Plugin URI: http://www.liton-online.com
Description: Redirects wp-login to your blog/websites home page when a user will login into dashboard and admin bar will appear in top.
Author: Md. Liton Arefin
Version: 1.0
Author URI: http://www.liton-online.com
*/

function liton_homepage() {
	global $redirect_to;
	if (!isset($_GET['redirect_to'])) {
		$redirect_to = get_option('siteurl');
	}
}

add_action('login_form', 'liton_homepage');
?> 