<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '5bdc9d52c070e0.45134441',
    'content' => '<div id="swiper-1638-particle" class="g-content g-particle">            <div class="">
	    <div class="g-swiper" id="swiper-1638">
    	<div class="swiper-container g-vertical-slides g-vertical-slides-swiper-1">
    		<div class="swiper-wrapper">
		        		            <div class="swiper-slide">
						<div class="swiper-slide-content">
			            				            	<div class="swiper-slide-content-text">
											            		<div class="g-swiper-slide-content-title">Kraken</div>																			            	</div>
					</div>
				</div>
		        		            <div class="swiper-slide">
						<div class="swiper-slide-content">
			            				            	<div class="swiper-slide-content-text">
											            		<div class="g-swiper-slide-content-title">Versatile</div>																			            	</div>
					</div>
				</div>
		        		            <div class="swiper-slide">
						<div class="swiper-slide-content">
			            				            	<div class="swiper-slide-content-text">
											            		<div class="g-swiper-slide-content-title">Stylistic</div>																			            	</div>
					</div>
				</div>
		        		    </div>
		    		    <div class="swiper-pagination g-vertical-slides-pagination g-vertical-slides-pagination-swiper-1"></div>
		    		</div>
	</div>
</div>

<script>
new Swiper(\'.g-vertical-slides-swiper-1\', {
    pagination: \'.g-vertical-slides-pagination-swiper-1\',
    paginationClickable: true,
    direction: \'vertical\',
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
            '849fb7a334eb86b095a72674538d65d4c540273647cfef22b3048a88c40a941035fa0143' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
    #swiper-1638 .swiper-container {
        height: 600px;
    }

    @media only all and (max-width: 48rem) {
        #swiper-1638 .swiper-container {
            height: 300px;
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
