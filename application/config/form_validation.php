<?php

    $config = array(

        //controlleur + method qui charge la vue client
        'clientController/clientView' => array(

            array(
                'field' => 'name',
                'label' => 'Nom',
                'rules' => 'required'
            ),

            array(
                'field' => 'phone',
                'label' => 'telephone',
                'rules' => 'required'
            ),

            array(
                'field' => 'mail',
                'label' => 'email',
                'rules' => 'required'
            ),

            array(
                'field' => 'gender',
                'label' => 'genre',
                'rules' => 'required'
            ),

            array(
                'field' => 'age',
                'label' => 'Age',
                'rules' => 'required'
            )
        ),

        // controlleur + methode qui charge la vue agent 
        'agentController/agentView' => array(

            array(
                'field' => 'name',
                'label' => 'Nom',
                'rules' => 'required'
            ),

            array(
                'field' => 'matricule',
                'label' => 'Matricule',
                'rules' => 'required'
            ),

            array(
                'field' => 'photo',
                'label' => 'Photo',
                'rules' => 'required'
            ),

            array(
                'field' => 'adresse',
                'label' => 'Adresse',
                'rules' => 'required'
            ),

            array(
                'field' => 'phone',
                'label' => 'Phone',
                'rules' => 'required'
            ),

            array(
                'field' => 'mail',
                'label' => 'Email',
                'rules' => 'required'
            )

        ),


    )
?>