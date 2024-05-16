<?php

$routes = 
    [   '/' =>
            ['controller' => 'PersonnageController',
            'action' => 'afficherPersonnage'
            ],      
        '/ajouter' => 
            ['controller' => 'PersonnageController', 
            'action' => 'ajouterPersonnage'
            ],      
        '/save' => 
            ['controller' => 'PersonnageController', 
            'action' => 'savePersonnage'
            ]
    ];

?>