<?php
class list_user extends CI_Model {

	function getlist()
    {
        $query=$this->db->query("SELECT * FROM card");
        return $query->result();
    }

    function simpan_list()
    {
        $simpan_data=array(
            'card_desc'=> $this->input->post('nama'),
        );
        $simpan = $this->db->insert('list', $simpan_data);
        return $simpan;
    }

}