var $ = jQuery.noConflict();

$( window ).load(function() {
	var windowHeight = $(this).height();
	hpInstagram();
	fullPage();
	navToggle();
	$('.desktop-nav, .city-guide-archive .half').css('height', windowHeight);

	if ($(window).width() > 990) {
		
	} else {
		
	}

})

$( document).ready(function() {

})

$( window ).resize(function() {
	if ($(window).width() > 990) {
		
	} else {
		
	}	
})

$(document).ajaxComplete( function() {
	
})


function squareMaker(selector) {
	var width = selector.width();
	selector.css('height', width);
	if ($(window).width() > 1150) {
		$('.contact.offset-cont .side-cont').css('height', width);
	}
}

function divEqualizer(divSelector) {
	var maxHeight = 0;
	divSelector.each(function(){
   		if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
	});
	divSelector.height(maxHeight);
}

function centerBlogImages() {
	$('img.aligncenter').parent().css('text-align','center')
}

function smoothScroll(element, padding) {
	$('html, body').animate({
        scrollTop: element.offset().top - padding
    }, 600);
}

function hpInstagram() {
	 var feed = new Instafeed({
        accessToken: '49967275.488634b.eab59ab9764f497ab182f5c0926c80fe',
        clientId: '488634b6d1d5439db82f582309be943b',
        get: 'user',
        userId: 49967275,
        sortBy: 'most-recent',
        limit: 3,
        resolution: 'standard_resolution',
        template: '<a class="insta" href="{{link}}" target=_blank><img src="{{image}}"></a>'

    });
    feed.run();
}

function fullPage() {
	$('#fullpage').fullpage({
		verticalCentered: true,
        //Custom selectors
        sectionSelector: '.fullpage-section',
        fixedElements: 'header'

    });
}

function navToggle() {
	$('.hamburger').on('click', function() {
		$('.desktop-nav').slideToggle();
		$('.hamburger').toggleClass('active');
		$('header').toggleClass('open');
	})
}

