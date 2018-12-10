<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\dauster\\public\\web/templates/rt_kraken/blueprints/styles/fixedside.yaml',
    'modified' => 1541184821,
    'data' => [
        'name' => 'FixedSide Styles',
        'description' => 'FixedSide styles for the Kraken theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#151a23'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'FixedSide Width',
                    'default' => '12rem'
                ],
                'position' => [
                    'type' => 'select.selectize',
                    'label' => 'Position',
                    'description' => 'Select the FixedSide position.',
                    'default' => 'left',
                    'options' => [
                        'left' => 'Left',
                        'right' => 'Right'
                    ]
                ]
            ]
        ]
    ]
];
