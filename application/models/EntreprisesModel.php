<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EntreprisesModel extends CI_Model{

    public __construct()
    {
        parent::__construct();
    }
    function accepter_refuser_rdv($id, $data)
    {
        $this->db->where('idRdv', $id);
        $this->db->update('etat', $data);
    }
}
?>