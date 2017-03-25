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
                'type'   => ['label' => 'Type', 'options' => ['redirect' => 'Redirect', 'content' => 'File Content']],
                'source' => 'Source',
                'target' => 'Target',
                'link'   => 'Open link',
                'active' => 'Active',
            ]
        ],

    ];

?>