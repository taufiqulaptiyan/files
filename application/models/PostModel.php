<?php
class PostModel extends CI_Model{

	const TABLE_NAME="post";

	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function create($data){
		$this->db->insert($this::TABLE_NAME,$data);

	}

	public function getUsers(){
		return $this->db->get(UserModel::TABLE_NAME)->result_array();

	}

	public function getcontents(){
        $this->db->select('p.id,p.username,u.email,p.content')->from(PostModel::TABLE_NAME.' p,'.UserModel::TABLE_NAME.' u')->where('p.username = u.username')
        		->order_by('id','desc');
        $post= $this->db->get()->result_array();
        return $post;
        
    }

    public function delete($id){
		//delete data post
		$query=$this->db->where('id',$id);
		$this->db->delete($this::TABLE_NAME);
		return $query;
	}

	public function findById($id){
		//mendapatkan data post berdasarkan id
		$query=$this->db->from($this::TABLE_NAME)
						->where('id',$id)
						->get()
						->row_array();
		return $query;
	}

	public function update($post){
		//update data post
		$this->db->where('id',$post['id'])
				->update($this::TABLE_NAME,$post);
	}

	public function getPost($username){
		$this->db->select('p.id,p.username,u.email,p.content')->from(PostModel::TABLE_NAME.' p,'.UserModel::TABLE_NAME.' u')->where('p.username = u.username and p.username="'.$username.'"');
        return $this->db->get()->result_array();
	}
}
?>