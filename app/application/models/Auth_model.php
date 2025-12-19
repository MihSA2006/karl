<?php
	if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

	class Auth_model extends CI_Model {
		public function login() {
			$username = 	$this->input->post('username');
			$password = 	$this->input->post('password');

			$user = $this->db
				->from('UserDetails')
				->where('username', $username)
				->where('password', SHA1($password))
				->get()->result_array();

			if(count($user) != 1) {
				throw new Exception("Username or password incorrect.");
			}
			$user = $user[0];
			$this->session->set_userdata('user', $user['idUser']);
		}

		public function signin() {
			$firstName = 	$this->input->post('firstName');
			$lastName = 	$this->input->post('lastName');
			$username = 	$this->input->post('username');
			$email = 		$this->input->post('email');
			$password = 	$this->input->post('password');
			$cPassword = 	$this->input->post('cPassword');
			$idGender = 	$this->input->post('gender');
			$birthday = 	$this->input->post('birthday');

			if($password != $cPassword) {
				throw new Exception("Given passwords are not the same");
			}

			$data = array(
				'firstName' => $firstName,
				'lastName' => $lastName,
				'username' => $username,
				'email' => $email,
				'password' => SHA1($password),
				'idGender' => $idGender,
				'birthday' => $birthday
			);
			$this->db->insert('user', $data);
			$idUser = $this->db->insert_id();
			$this->session->set_userdata('user', $idUser);
		}

		public function logout() {
			$this->session->unset_userdata('user');
			$this->session->unset_userdata('admin');
		}
	}
?>