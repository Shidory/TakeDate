<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EntreprisesModel extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public function fetch_data()
	{
        $query = $this->db->get("tb_rdv");
        return $query;
	}


    function accepter_refuser_rdv($id)
    {
        $this->db->where('idRdv', $id);
        $query = $this->db->get("tb_rdv", $data);
        return $query;
    }
    public function update_data($data, $id){
        $this->db->where("id", $id);
        $this->db->update("tb_rdv", $data);
    }

}
?>