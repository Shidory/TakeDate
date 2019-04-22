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
        $query = $this->db->get("tb_rdv");
        return $query;
    }

    public function get_state($id){
        $this->db->select('etat')
                 ->where("idRdv", $id);

        return $this->db->get('tb_rdv');
    }

    public function update_data($id, $state){
        $this->db->where("idRdv", $id);
        $this->db->update("tb_rdv", $state);
    }

}
?>