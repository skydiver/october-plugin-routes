<?php

    return [

        'plugin' => [
            'name'        => 'Rouctober',
            'description' => 'Generate custom routes',
        ],

        'navigation' => [
            'label'       => 'Rouctober',
            'description' => 'Generate custom routes',
        ],

        'controllers' => [
            'routes' => [
                'title' => 'Routes'
            ]
        ],

        'form' => [
            'name'             => 'Route',
            'breadcrumb_label' => 'Routes',
        ],

        'fields' => [
            'routes' => [
                'type'         => ['label' => 'Type', 'options' => ['redirect' => 'Redirect', 'content' => 'File Content']],
                'source'       => 'Source',
                'target'       => 'Target',
                'content_type' => 'Content-Type',
                'link'         => 'Open link',
                'active'       => 'Active',
            ]
        ],

    ];

?>