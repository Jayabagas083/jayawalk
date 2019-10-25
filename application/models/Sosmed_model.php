<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sosmed_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'class',
            'label' => 'Class',
            'rules' => 'required'],

            ['field' => 'link',
            'label' => 'Link',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->get('sosmed');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('sosmed', ["id_sosmed" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
		$this->id_sosmed = uniqid();
        $this->class         	= $post["class"];
        $this->link         	= $post["link"];
        $this->db->insert('sosmed', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
		$this->id_sosmed        = $post["id"];
        $this->class         	= $post["class"];
        $this->link         = $post["link"];
        $this->db->update('sosmed', $this, array('id_sosmed' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('sosmed', array("id" => $id));
    }

}