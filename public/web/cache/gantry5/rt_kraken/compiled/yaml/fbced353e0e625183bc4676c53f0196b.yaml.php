<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/dauster/public/web/templates/rt_kraken/blueprints/styles/header.yaml',
    'modified' => 1541184821,
    'data' => [
        'name' => 'Header Styles',
        'description' => 'Header styles for the Kraken theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#272c35'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => 'gantry-media://backgrounds/header/preset-01.jpg'
                ]
            ]
        ]
    ]
];
