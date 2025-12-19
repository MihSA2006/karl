<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Python_api_model extends CI_Model {

	public function call_python_api($payload) {
		unset($payload["country"]["path"]);
		$url = 'http://localhost:5000/api/prompt';
		
		$ch = curl_init($url);
		
		// Set cURL options
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Content-Type: application/json'
		]);

		$response = curl_exec($ch);
		$error = curl_error($ch);
		curl_close($ch);

		if ($error) {
			return ['error' => $error];
		}

		return json_decode($response, true);
	}
}