<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\dauster\\public\\web/templates/rt_kraken/blueprints/styles/extension.yaml',
    'modified' => 1541184821,
    'data' => [
        'name' => 'Extension Styles',
        'description' => 'Extension styles for the Kraken theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#272c35'
                ]
            ]
        ]
    ]
];
