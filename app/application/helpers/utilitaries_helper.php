<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	if(!function_exists('var_debug')) {
		function var_debug($value) {
?>
			<div style="margin-left: 200px;">
				<pre>
					<?php echo var_export($value, true); ?>
				</pre>
			</div>
<?php
		}
	}

	if(!function_exists('slice')) {
		function slice($str, $limit) {
			if(strlen($str) > $limit) {
				$str = substr($str, 0, $limit) . " ...";
			}
			return $str;
		}
	}

	if(!function_exists('get_app_name')) {
		function get_app_name() {
			$app_name = "Bad Code";
			return $app_name;
		}
	}
?>