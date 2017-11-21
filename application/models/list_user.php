<?php
class list_user extends CI_Model {

    //Construct
    public function __construct() 
    {
        $this->load->database();
    }

    //Mendapatkan list
	function getlist()
    {
        $query=$this->db->query("SELECT * FROM list");
        return $query->result();
    }

    //Menyimpan list
    function simpan_list()
    {
        $simpan_data=array(
            'list_desc'=> $this->input->post('nama'),
        );
        $simpan = $this->db->insert('list', $simpan_data);
        return $simpan;
    }
}