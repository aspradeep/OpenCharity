(function ($) {
	"use strict";
	$('#nav').slicknav();
	if($("#partners").length){
		$("#partners .view-content").owlCarousel({
			loop:true,
			margin:100,
			nav:false,
			dots:true,
			slideBy:5,
			autoplay:true,
			autoplayTimeout:5000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		});
	}
	if($("#blog").length){
		$("#blog .view-content").owlCarousel({
			loop:true,
			margin:100,
			nav:true,
			slideBy:1,
			autoplay:true,
			autoplayTimeout:5000,
			navText : ["<i class='fa fa-chevron-left fa-2x color-secondary'></i>","<i class='fa fa-chevron-right fa-2x color-secondary'></i>"],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:4
				}
			}
		});
	}
}(jQuery));	