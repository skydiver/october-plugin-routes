<?php

    return [

        'plugin' => [
            'name'        => 'Rouctober',
            'description' => 'Generate custom routes',
        ],

        'navigation' => [
            'label'       => 'Rouctober',
            'description' => 'Generate your own custom routes',
        ],

        'form' => [
            'name'             => 'Route',
            'breadcrumb_label' => 'Routes',
        ],

        'fields' => [
            'routes' => [
                'type'   => ['label' => 'Type', 'options' => ['redirect' => 'Redirect', 'content' => 'File Content']],
                'source' => 'Source',
                'target' => 'Target',
                'link'   => 'Open link',
                'active' => 'Active',
            ]
        ],

    ];

?>