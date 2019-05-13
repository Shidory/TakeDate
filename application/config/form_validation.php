<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $config = array (

        // controller + methode qui charge la vue horaire
        'welcome/enregistrer' => array(

            array(
                'field' => 'jour',
                'label' => 'Jour',
                'rules' => 'required'
            ),

            array(
                'field' => 'heureDebut',
                'label' => 'HeureDebut',
                'rules' => 'required'
            ),

            array(
                'field' => 'heureFin',
                'label' => 'HeureFin',
                'rules' => 'required'
            )
        )
    );
?>