<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function create(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$email	=$this->input->post('email');
		$name	=$this->input->post('name');

		$data=array(
			'username'=>$username,
			'password'=>$password,
			'email'=>$email,
			'name'=>$name
			//sesuai database 
		);
		$this->UserModel->create($data);
		redirect('user/login');
		
	}

	//session
	public function authenticate(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$user=$this->UserModel->findByUsername($username);
		$valid=$this->UserModel->authenticate($username,$password);


		if($valid){
			$data=array(
				'username'=>$username,
				'name'=>$user['name'],
				'logged_in'=>TRUE
			);
			$this->session->set_userdata($data);
			redirect('post');
		}
		else{
			if(!$user){
				$this->session->set_flashdata('gagal','<div style="color:red">Username tidak ditemukan</div>');
			}
			else if(!$valid){
				$this->session->set_flashdata('gagal','<div style="color:red">Password salah</div>');
			}
			redirect('user/login');
		}	
	}

	public function login(){
		$this->load->view('users/login');
	}

	public function logout(){
		$userdata=array('username','name');
		$this->session->unset_userdata($userdata);
		$this->session->set_userdata('logged_in',FALSE);
		redirect('user/login');
	}

	public function register(){
		$data['users']=$this->UserModel->getAll();
		$this->load->view('users/register',$data);

	}
	public function index(){//paling pertama dieksekusi
		$this->load->view('users/home');
	}

}
?>