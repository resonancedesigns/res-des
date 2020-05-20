// 3D Animated Navigation
jQuery(document).ready(function($){
	//toggle 3d navigation
	$('.rd-3d-nav-trigger').on('click', function(){
		toggle3dBlock(!$('.rd-header').hasClass('nav-is-visible'));
	});

	//select a new item from the 3d navigation
	$('.rd-3d-nav').on('click', 'a', function(){
		var selected = $(this);
		selected.parent('li').addClass('rd-selected').siblings('li').removeClass('rd-selected');
		updateSelectedNav('close');
	});

	$(window).on('resize', function(){
		window.requestAnimationFrame(updateSelectedNav);
	});

	function toggle3dBlock(addOrRemove) {
		if(typeof(addOrRemove)==='undefined') addOrRemove = true;	
		$('.rd-header').toggleClass('nav-is-visible', addOrRemove);
		$('.rd-3d-nav-container').toggleClass('nav-is-visible', addOrRemove);
		$('main').toggleClass('nav-is-visible', addOrRemove).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			//fix marker position when opening the menu (after a window resize)
			addOrRemove && updateSelectedNav();
		});
	}

	//this function update the .rd-marker position
	function updateSelectedNav(type) {
		var selectedItem = $('.rd-selected'),
			selectedItemPosition = selectedItem.index() + 1, 
			leftPosition = selectedItem.offset().left,
			backgroundColor = selectedItem.data('color'),
			marker = $('.rd-marker');

		marker/*.removeClassPrefix('color').addClass('color-'+ selectedItemPosition)*/.css({
			'left': leftPosition,
		});
		if( type == 'close') {
			marker.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				toggle3dBlock(false);
			});
		}
	}

	$.fn.removeClassPrefix = function(prefix) {
	    this.each(function(i, el) {
	        var classes = el.className.split(" ").filter(function(c) {
	            return c.lastIndexOf(prefix, 0) !== 0;
	        });
	        el.className = $.trim(classes.join(" "));
	    });
	    return this;
	};
});

// Parallax Scrolling
( function( $ ) {
	// Setup variables
	$window = $(window);
	$slide = $('.homeSlide');
	$body = $('body');
    //FadeIn all sections   
	$body.imagesLoaded( function() {
		setTimeout(function() {
		      // Resize sections
		      adjustWindow();
		      // Fade in sections
			  $body.removeClass('loading').addClass('loaded');  
		}, 800);
	});
	
	function adjustWindow(){
		// Init Skrollr
		var s = skrollr.init({
		    forceHeight: false
		});
		// Get window size
	    winH = $window.height();
	    // Keep minimum height 550
	    if(winH <= 550) {
			winH = 550;
		} 
	    // Resize our slides
	    $slide.height(winH);
	    // Refresh Skrollr after resizing our sections
	    s.refresh($('.homeSlide'));
	}
} )( jQuery );

// Smooth Scroll-To
$("#portfolioButton").click(function() {
    $('html,body').animate({
        scrollTop: $("#portfolioScroll").offset().top},
        'slow');
});

// Initialize WOW.js
new WOW().init();

$(document).ready(function(){
$("#contact-form").validate({
	errorPlacement: function(error, element) {
		//http://stackoverflow.com/questions/4844594/jquery-select-the-associated-label-element-of-a-input-field
		error.appendTo("label[for="+$(element).attr('id')+"]");
	},
		errorElement: "em"
	});
	// re-enable HTML5 native validation and stop jquery from handeling it! they changed this to be novalidate by default and I DO want to use HTML5 validation first then try jquery
    $('form').removeAttr('novalidate');
});