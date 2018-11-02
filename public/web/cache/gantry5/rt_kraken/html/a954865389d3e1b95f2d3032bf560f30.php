<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '5bdc9d52cd3655.65766207',
    'content' => '<div id="gridstatistic-4974-particle" class="g-content g-particle">            <div class="">

        <h3 class="g-title">Today\'s Summary</h3>
        <div class="g-gridstatistic">
                        
            <div class="g-gridstatistic-wrapper g-gridstatistic-4cols">

                                    <div class="g-gridstatistic-item">
                        <div class="g-gridstatistic-item-wrapper">
                            <div class="g-gridstatistic-item-text1 odometer" data-odometer-value="1000"></div>
                            <div class="g-gridstatistic-item-icon"><span class="g-gridstatistic-item-separator">x</span> <i class="fa fa-comments fa-fw fa-2x }}"></i></div>
                            <div class="g-gridstatistic-item-text2"><span>Discussions</span></div>
                        </div>
                    </div>
                                    <div class="g-gridstatistic-item">
                        <div class="g-gridstatistic-item-wrapper">
                            <div class="g-gridstatistic-item-text1 odometer" data-odometer-value="250"></div>
                            <div class="g-gridstatistic-item-icon"><span class="g-gridstatistic-item-separator">x</span> <i class="fa fa-file-text fa-fw fa-2x }}"></i></div>
                            <div class="g-gridstatistic-item-text2"><span>Stories</span></div>
                        </div>
                    </div>
                                    <div class="g-gridstatistic-item">
                        <div class="g-gridstatistic-item-wrapper">
                            <div class="g-gridstatistic-item-text1 odometer" data-odometer-value="130"></div>
                            <div class="g-gridstatistic-item-icon"><span class="g-gridstatistic-item-separator">x</span> <i class="fa fa-group fa-fw fa-2x }}"></i></div>
                            <div class="g-gridstatistic-item-text2"><span>Authors</span></div>
                        </div>
                    </div>
                                    <div class="g-gridstatistic-item">
                        <div class="g-gridstatistic-item-wrapper">
                            <div class="g-gridstatistic-item-text1 odometer" data-odometer-value="34"></div>
                            <div class="g-gridstatistic-item-icon"><span class="g-gridstatistic-item-separator">x</span> <i class="fa fa-camera-retro fa-fw fa-2x }}"></i></div>
                            <div class="g-gridstatistic-item-text2"><span>Photos</span></div>
                        </div>
                    </div>
                
            </div>

            
        </div>
    </div>
            </div>',
    'frameworks' => [
        'jquery' => 1
    ],
    'scripts' => [
        'footer' => [
            '5061fb8a556f9dfc55d20bfd65ae316231f329c6be788c4d54dd2ed7b43bca353ecb85dd' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/dauster/public/web/templates/rt_kraken/js/odometer.js?5bdc9d36',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ],
            'b0fd17448ce6e6d9fa5ac7f2202fd9232255c58924ef7aef14d146299d381b12ac325130' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        ;((function() {

            var isElementInViewport = function(el, delta) {
                var rect = jQuery(el).get(0).getBoundingClientRect();
                delta = delta || 0;
                return (
                    rect.top >= -delta &&
                    rect.left >= -delta &&
                    rect.bottom <= (delta + (window.innerHeight || document.documentElement.clientHeight)) &&
                    rect.right <= (delta + (window.innerWidth || document.documentElement.clientWidth))
                );
            }

            jQuery(window).scroll(function() {
                var odometers = jQuery.find(\'.odometer\'), value, instances = {};
                odometers.forEach(function(odometer, idx) {
                    odometer = jQuery(odometer).get(0);
                    if (!instances[\'o-\' + idx] && isElementInViewport(odometer, 100)) {
                        value = jQuery(odometer).attr(\'data-odometer-value\');
                        instances[\'o-\' + idx] = {
                            i: new Odometer({ el: odometer }),
                            v: value
                        };
                        setTimeout(function() {
                            instances[\'o-\' + idx].i.update(instances[\'o-\' + idx].v || 0);
                        }, 100);
                    }
                });
            });

            jQuery(window).ready(function() {
                jQuery(this).trigger(\'scroll\');
            });

        })());
    ',
                'type' => 'text/javascript'
            ]
        ]
    ]
];
