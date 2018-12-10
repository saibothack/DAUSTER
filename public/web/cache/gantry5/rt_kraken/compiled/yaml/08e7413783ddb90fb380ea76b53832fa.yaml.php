<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/dauster/public/web/templates/rt_kraken/blueprints/styles/base.yaml',
    'modified' => 1541184821,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base styles for the Kraken theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Color',
                    'default' => '#272c35'
                ]
            ]
        ]
    ]
];
