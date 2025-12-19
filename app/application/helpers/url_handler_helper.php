<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	if(!function_exists('css_url')) {
		function css_url($file) {
			return base_url() . 'assets/own/css/' . $file;
		}
	}

	if(!function_exists('js_url')) {
		function js_url($file) {
			return base_url() . 'assets/own/js/' . $file;
		}
	}

	if(!function_exists('img_url')) {
		function img_url($file) {
			return base_url() . 'assets/img/' . $file;
		}
	}

	if(!function_exists('bootstrap_css')) {
		function bootstrap_css($file) {
			return base_url() . 'assets/bootstrap/css/' . $file;
		}
	}

	if(!function_exists('bootstrap_js')) {
		function bootstrap_js($file) {
			return base_url() . 'assets/bootstrap/js/' . $file;
		}
	}

	if(!function_exists('bootstrap_jquery')) {
		function jQuery() {
			return base_url() . 'assets/jquery.min.js';
		}
	}

	if(!function_exists('font_awesome')) {
		function font_awesome() {
			return base_url() . 'assets/font-awesome/css/all.css';
		}
	}

	if(!function_exists('boxicons')) {
		function boxicons() {
			return base_url() . 'assets/boxicons/css/boxicons.css';
		}
	}
?>