<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '5bdc9d52e03777.50318108',
    'content' => '<div id="swiper-4864-particle" class="g-content g-particle">            <div class="g-swiper-testimonial">
	    <div class="g-swiper" id="swiper-4864">
    	<div class="swiper-container g-horizontal-slides g-horizontal-slides-swiper-4">
    		<div class="swiper-wrapper">
		        		            <div class="swiper-slide">
						<div class="swiper-slide-content">
			            				            	<div class="swiper-slide-content-text">
											            		<div class="g-swiper-slide-content-title">Kraken is worth its weight in gold, just fantastic!</div>								<div class="g-swiper-slide-content-desc">- Alex Simon, Think Kraken Co.</div>											            	</div>
					</div>
				</div>
		        		            <div class="swiper-slide">
						<div class="swiper-slide-content">
			            				            	<div class="swiper-slide-content-text">
											            		<div class="g-swiper-slide-content-title">Extraordinary. Kraken is by far my favorite theme.</div>								<div class="g-swiper-slide-content-desc">- John Young, Buy Kraken LLC</div>											            	</div>
					</div>
				</div>
		        		            <div class="swiper-slide">
						<div class="swiper-slide-content">
			            				            	<div class="swiper-slide-content-text">
											            		<div class="g-swiper-slide-content-title">Kraken cannot be ignored, it is a design for the ages!</div>								<div class="g-swiper-slide-content-desc">- Derek Abels, Love Kraken Inc.</div>											            	</div>
					</div>
				</div>
		        		    </div>
		    		    <div class="swiper-pagination g-horizontal-slides-pagination g-horizontal-slides-pagination-swiper-4"></div>
		    		</div>
	</div>
</div>

<script>
new Swiper(\'.g-horizontal-slides-swiper-4\', {
    pagination: \'.g-horizontal-slides-pagination-swiper-4\',
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
            '90a0883bb44d4b644b1c14706f5430877fc6269326bc1ad34bd41b24c6d05f5fdd418b89' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
    #swiper-4864 .swiper-container {
        height: 300px;
    }

    @media only all and (max-width: 48rem) {
        #swiper-4864 .swiper-container {
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
