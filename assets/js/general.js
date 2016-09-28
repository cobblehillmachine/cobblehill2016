var $ = jQuery.noConflict();

$( window ).load(function() {
	var windowHeight = $(this).height();
	if ($('#instafeed-first').length > 0) {
		hpInstagram1();
		hpInstagram2();
		hpInstagram3();
		hpInstagram4();
	}
	fullPage();
	navToggle();
	$('.desktop-nav, .city-guide-hero').css('height', windowHeight);
	$('.smooth-scroll').on('click', function(e) {
		e.preventDefault();
		var target = $(this).attr('href');
		smoothScroll($(target), 0);
	})

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

function hpInstagram1() {
	 var feed = new Instafeed({
        accessToken: '49967275.488634b.eab59ab9764f497ab182f5c0926c80fe',
        clientId: '488634b6d1d5439db82f582309be943b',
        get: 'user',
        userId: 49967275,
        target: 'instafeed-first',
        sortBy: 'most-recent',
        limit: 1,
        resolution: 'standard_resolution',
        template: '<a class="insta" href="{{link}}" target=_blank style="background-image:url({{image}})"></a>'

    });
    feed.run();
}

function hpInstagram2() {
	 var feed = new Instafeed({
        accessToken: '49967275.488634b.eab59ab9764f497ab182f5c0926c80fe',
        clientId: '488634b6d1d5439db82f582309be943b',
        get: 'user',
        userId: 49967275,
        target: 'instafeed-second',
        sortBy: 'most-recent',
        limit: 3,
        resolution: 'standard_resolution',
        template: '<a class="insta" href="{{link}}" target=_blank style="background-image:url({{image}})"></a>',
        success: function() {
			// reset the count every time instafeed.js reloads
			count = 0;
		},
		filter: function(image) {
			// only return true every 3rd image
			return (count++ > 0) ? true : false;
		}

    });
    feed.run();
}

function hpInstagram3() {
	 var feed = new Instafeed({
        accessToken: '49967275.488634b.eab59ab9764f497ab182f5c0926c80fe',
        clientId: '488634b6d1d5439db82f582309be943b',
        get: 'user',
        userId: 49967275,
        target: 'instafeed-third',
        sortBy: 'most-recent',
        limit: 4,
        resolution: 'standard_resolution',
        template: '<a class="insta" href="{{link}}" target=_blank style="background-image:url({{image}})"></a>',
        success: function() {
			// reset the count every time instafeed.js reloads
			count = 0;
		},
		filter: function(image) {
			// only return true every 3rd image
			return (count++ > 2) ? true : false;
		}

    });
    feed.run();
}

function hpInstagram4() {
	 var feed = new Instafeed({
        accessToken: '49967275.488634b.eab59ab9764f497ab182f5c0926c80fe',
        clientId: '488634b6d1d5439db82f582309be943b',
        get: 'user',
        userId: 49967275,
        target: 'instafeed-fourth',
        sortBy: 'most-recent',
        limit: 5,
        resolution: 'standard_resolution',
        template: '<a class="insta" href="{{link}}" target=_blank style="background-image:url({{image}})"></a>',
        success: function() {
			// reset the count every time instafeed.js reloads
			count = 0;
		},
		filter: function(image) {
			// only return true every 3rd image
			return (count++ > 3) ? true : false;
		}

    });
    feed.run();
}

function fullPage() {
	$('#fullpage').fullpage({
		verticalCentered: true,
        //Custom selectors
        sectionSelector: '.fullpage-section',
        // hybrid:true,
        scrollOverflow: true

    });
}

function navToggle() {
	$('.hamburger').on('click', function() {
		$('.desktop-nav').slideToggle();
		$('.hamburger').toggleClass('active');
		$('header').toggleClass('open');
	})
}

