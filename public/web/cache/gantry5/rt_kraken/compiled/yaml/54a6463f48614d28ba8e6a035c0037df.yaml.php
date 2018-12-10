<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/dauster/public/web/templates/rt_kraken/blueprints/styles/accent.yaml',
    'modified' => 1541184821,
    'data' => [
        'name' => 'Accent Colors',
        'description' => 'Accent colors for the Kraken theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'color-1' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 1',
                    'default' => '#01b2ff'
                ],
                'color-2' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 2',
                    'default' => '#ff3100'
                ],
                'color-3' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 3',
                    'default' => '#d99c00'
                ]
            ]
        ]
    ]
];
