<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '5bdc9d52df5f22.79873001',
    'content' => '<div id="swiper-5266-particle" class="g-content g-particle">            <div class="g-swiper-stories">
	<h2 class="g-title">Trending</h2>    <div class="g-swiper" id="swiper-5266">
    	<div class="swiper-container g-horizontal-slides g-horizontal-slides-swiper-3">
    		<div class="swiper-wrapper">
		        		            <div class="swiper-slide">
						<div class="swiper-slide-content">
			            				            	<div class="swiper-slide-content-image">
			            		<img src="/dauster/public/web/templates/rt_kraken/images/demo/home/aside/img03.jpg?5bdc9d36" alt="Particles System">
			            	</div>
			            				            	<div class="swiper-slide-content-text">
											            		<div class="g-swiper-slide-content-title">Particles System</div>								<div class="g-swiper-slide-content-desc">Gantry 5\'s Particles system makes it easy to configure content blocks.</div>											            	</div>
					</div>
				</div>
		        		            <div class="swiper-slide">
						<div class="swiper-slide-content">
			            				            	<div class="swiper-slide-content-image">
			            		<img src="/dauster/public/web/templates/rt_kraken/images/demo/home/aside/img04.jpg?5bdc9d36" alt="Twig Templating">
			            	</div>
			            				            	<div class="swiper-slide-content-text">
											            		<div class="g-swiper-slide-content-title">Twig Templating</div>								<div class="g-swiper-slide-content-desc">Gantry 5 utilizes Twig - a flexible, fast, and secure template engine for PHP.</div>											            	</div>
					</div>
				</div>
		        		            <div class="swiper-slide">
						<div class="swiper-slide-content">
			            				            	<div class="swiper-slide-content-image">
			            		<img src="/dauster/public/web/templates/rt_kraken/images/demo/home/aside/img05.jpg?5bdc9d36" alt="YAML Configuration">
			            	</div>
			            				            	<div class="swiper-slide-content-text">
											            		<div class="g-swiper-slide-content-title">YAML Configuration</div>								<div class="g-swiper-slide-content-desc">YAML makes it easy to create blueprints for back-end configuration options.</div>											            	</div>
					</div>
				</div>
		        		    </div>
		    		    <div class="swiper-pagination g-horizontal-slides-pagination g-horizontal-slides-pagination-swiper-3"></div>
		    		</div>
	</div>
</div>

<script>
new Swiper(\'.g-horizontal-slides-swiper-3\', {
    pagination: \'.g-horizontal-slides-pagination-swiper-3\',
    paginationClickable: true,
    loop: true
});
</script>
            </div>',
    'frameworks' => [
        'jquery' => 1
    ],
    'styles' => [
        'head' => [
            '6ea86b03798e3fa3059cb4442b18eca0ca96a306444d5ab2359fc00d88782e299e4b7f7e' => [
                ':type' => 'file',
                ':priority' => 0,
                'href' => 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css',
                'type' => 'text/css',
                'media' => NULL,
                'element' => [
                    
                ]
            ],
            '8a8b3a536127fbe39bb21640cb2ca0205732007dacc0fb5730a7ec3730daec76317cf153' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
    #swiper-5266 .swiper-container {
        height: auto;
    }

    @media only all and (max-width: 48rem) {
        #swiper-5266 .swiper-container {
            height: ;
        }
    }
',
                'type' => 'text/css'
            ]
        ]
    ],
    'scripts' => [
        'head' => [
            '3fb018701a882e683aa072ccbba8ae8972e6b2d806f62ad8f774c7aeb67df8b439cba473' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/dauster/public/web/templates/rt_kraken/js/swiper.js?5bdc9d36',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ]
        ]
    ]
];
