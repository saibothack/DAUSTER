<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/XAMPP/xamppfiles/htdocs/dev/dauster/public/web/templates/rt_kraken/gantry/theme.yaml',
    'modified' => 1536385015,
    'data' => [
        'details' => [
            'name' => 'Kraken',
            'version' => '1.0.0',
            'icon' => 'paper-plane',
            'date' => 'October  2, 2015',
            'author' => [
                'name' => 'RocketTheme, LLC',
                'email' => 'support@rockettheme.com',
                'link' => 'http://www.rockettheme.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'updates' => [
                'link' => 'http://updates.rockettheme.com/themes/kraken.yaml'
            ],
            'news' => [
                'link' => 'http://news.rockettheme.com/prime/themes.yaml'
            ],
            'copyright' => '(C) 2007 - 2015 RocketTheme, LLC. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Kraken Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'joomla',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'rt_kraken',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://include/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'playfairdisplay' => [
                    700 => 'gantry-theme://fonts/playfairdisplay/playfairdisplay_bold/playfairdisplay-bold-webfont',
                    '700italic' => 'gantry-theme://fonts/playfairdisplay/playfairdisplay_bolditalic/playfairdisplay-bolditalic-webfont',
                    '400italic' => 'gantry-theme://fonts/playfairdisplay/playfairdisplay_italic/playfairdisplay-italic-webfont',
                    400 => 'gantry-theme://fonts/playfairdisplay/playfairdisplay_regular/playfairdisplay-regular-webfont'
                ],
                'kelson_sans' => [
                    700 => 'gantry-theme://fonts/kelson_sans/kelson_sans_bold/kelson_sans-bold-webfont',
                    400 => 'gantry-theme://fonts/kelson_sans/kelson_sans_regular/kelson_sans-regular-webfont'
                ],
                'bebastam' => [
                    900 => 'gantry-theme://fonts/bebastam/bebastam_book/bebastam-book-webfont',
                    700 => 'gantry-theme://fonts/bebastam/bebastam_bold/bebastam-bold-webfont',
                    400 => 'gantry-theme://fonts/bebastam/bebastam_regular/bebastam-regular-webfont',
                    200 => 'gantry-theme://fonts/bebastam/bebastam_light/bebastam-light-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'target' => 'gantry-theme://css-compiled',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'kraken',
                    1 => 'kraken-joomla',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'kraken'
                ],
                'overrides' => [
                    0 => 'kraken-joomla',
                    1 => 'custom'
                ]
            ],
            'block-variations' => [
                'Title Variations' => [
                    'title1' => 'Title 1',
                    'title2' => 'Title 2',
                    'title3' => 'Title 3',
                    'title4' => 'Title 4',
                    'title-grey' => 'Title Grey',
                    'title-pink' => 'Title Pink',
                    'title-red' => 'Title Red',
                    'title-purple' => 'Title Purple',
                    'title-orange' => 'Title Orange',
                    'title-blue' => 'Title Blue',
                    'title-underline' => 'Title Underline',
                    'title-inline' => 'Title Inline',
                    'title-rounded' => 'Title Rounded',
                    'g-title-bordered' => 'Title Bordered',
                    'g-title-promo' => 'Title Promo'
                ],
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box3' => 'Box 3',
                    'box4' => 'Box 4',
                    'box-white' => 'Box White',
                    'box-grey' => 'Box Grey',
                    'box-pink' => 'Box Pink',
                    'box-red' => 'Box Red',
                    'box-purple' => 'Box Purple',
                    'box-orange' => 'Box Orange',
                    'box-blue' => 'Box Blue'
                ],
                'Effects' => [
                    'spaced' => 'Spaced',
                    'bordered' => 'Bordered',
                    'shadow' => 'Shadow 1',
                    'shadow2' => 'Shadow 2',
                    'rounded' => 'Rounded',
                    'square' => 'Square'
                ],
                'Utility' => [
                    'equal-height' => 'Equal Height',
                    'g-outer-box' => 'Outer Box',
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'title-center' => 'Centered Title',
                    'center' => 'Center',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent',
                    2 => 'font'
                ],
                'section' => [
                    0 => 'top',
                    1 => 'header',
                    2 => 'slideshow',
                    3 => 'showcase',
                    4 => 'feature',
                    5 => 'main',
                    6 => 'extension',
                    7 => 'bottom',
                    8 => 'footer',
                    9 => 'copyright',
                    10 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ]
        ]
    ]
];
