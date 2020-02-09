<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('PostModel');
	}

	public function create($username){
		$username=$this->input->post('username');
		$content=$this->input->post('content');

		$data=array(
			'username'=>$username,
			'content'=>$content
		);
		$this->PostModel->create($data);
		redirect('post');
	}

	public function delete($id){
		$this->PostModel->delete($id);
		redirect('post');
	}

	public function update_post($id){
		$data['post']=$this->PostModel->findById($id);
		$this->load->view('post/update_post',$data);
	}

	public function update($id){
		//mendapatkan data dari form
			$content=$this->input->post('content');
		//membuat array data
		$post=array(
			'id' => $id,
			'content'=>$content
		);

		//proses update dengan memanggil model update
		$this->PostModel->update($post);
		redirect('post');
	}

	public function index(){
		if($this->session->userdata('logged_in')){
			$data['users']=$this->PostModel->getUsers();
			$data['posts'] = $this->PostModel->getContents();
			$this->load->view('post/thread2',$data);
		}
		else{
			redirect('user/login');
		}
	}

	public function user_thread($username){
		$data['posts']=$this->PostModel->getPost($username);
		$data['users']=$this->UserModel->findByUsername($username);
		$this->load->view('post/user_thread',$data);
	}
}

?>