<?php
	if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

	class Country_model extends CI_Model {
		public function getCountries() {
			return $this->db->get('Country')->result_array();
		}

		public function getCountry($idCountry) {
			return $this->db->where('idCountry', $idCountry)->get('Country')->result_array()[0];
		}
	}
?>