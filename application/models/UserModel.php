<?php

class UserModel extends CI_Model{
	public const TABLE_NAME="user";

	public function create($data){
		//insert data ke tabel user
		$this->db->insert($this::TABLE_NAME, $data);
	}

	public function getAll(){
		//mendapatkan semua data user
		return $this->db->get($this::TABLE_NAME)->result_array();
	}

	public function delete($username){
		//delete data user
		$query=$this->db->where('username',$username);
		$this->db->delete($this::TABLE_NAME);
		return $query;
	}

	public function update($user){
		//update data user
		$this->db->where('username',$user['username'])
				->update($this::TABLE_NAME,$user);
	}

	public function findByUsername($username){
		//mendapatkan data user berdasarkan username
		$query=$this->db->from($this::TABLE_NAME)
						->where('username',$username)
						->get()
						->row_array();
		return $query;
	}

	public function authenticate($username,$password){
		$user=$this->findByUsername($username);
		if(!$user)
			return false;

		if($password==$user['password']){
			return true;
		}

	}
}
?>