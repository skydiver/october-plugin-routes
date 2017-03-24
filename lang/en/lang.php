<?php

    return [

        'plugin' => [
            'name'        => 'Redirect',
            'description' => 'Custom redirects'
        ],

        'navigation' => [
            'label' => 'Redirects',
            'sideMenu' => [
                'redirects' => 'Redirects'
            ]
        ],
        
        'form' => [
            'name'             => 'Redirect',
            'breadcrumb_label' => 'Redirects',
        ],
        
        'fields' => [
            'redirects' => [
                'type'   => ['label' => 'Type', 'options' => ['redirect' => 'Redirect', 'content' => 'Content']],
                'from'   => 'From',
                'to'     => 'To',
                'active' => 'Active',
            ]
        ],

    ];

?>