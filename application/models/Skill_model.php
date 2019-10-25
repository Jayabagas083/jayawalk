<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Skill_model extends CI_Model
{
    public function rules()
    {
        return [

            ['field' => 'keahlian',
            'label' => 'Keahlian',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->get('skill');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('skill', ["id_skill" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_skill     = uniqid();
		$this->foto     	= $this->_uploadImage();
        $this->keahlian   	= $post["keahlian"];
        $this->keterangan   = $post["keterangan"];
        $this->db->insert('skill', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id_skill         	= $post["id"];
		if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->keahlian         	= $post["keahlian"];
        $this->keterangan   		= $post["keterangan"];
        $this->db->update('skill', $this, array('id_skill' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('skill', array("id_skill" => $id));
    }
	
	private function _uploadImage()
    {
    $config['upload_path']          = './assets/images/skill/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_portfolio;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }
}