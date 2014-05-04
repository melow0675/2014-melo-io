/**
 *	JS
 *	common.js
 *
 *	@author userstudio
 *	Copyright (c) 2013, User Studio (USER.IO). All rights reserved.
 *
 */

$(document).ready(function(){

	/**
	 *	Main menus controlled from the header
	 *
	 */
 
	$("#hello-menu").hide();
	$("#menu").hide();
	
	var helloOn = false;
	var menuOn = false;
	
	
	// menu
	
	// set the menu's CSS props programmatically
	var resizeMenu = function()
	{
		$('#menu').css({
			height: $(window).height(),
			top: ( $('#menu').is(':hidden') ? - $(window).height() : $('header').height() )
		});
	}

	// at startup
	$('#menu').hide();
	resizeMenu();
	
	// when there is a resize
	$(window).bind('smartresize', function(){
		resizeMenu();
	});
	
	// when there is a click
	$('#hamburger-btn-wrapper').click(function(){
	
		// make sure hello menu is folded up
		// and then do our thing for menu
		$("#hello-menu").hide('fast', function(){
		
			helloOn = false;

			$('#hamburger-btn').toggleClass('initial-hamburger');
			$('#hamburger-btn').toggleClass('rotate-hamburger');
			
			if (!menuOn) {
				//$(".current-page").addClass('blur-effect');
				
				// make sure the position is right
				$('#menu').css({top: - $(window).height()});
				// animate
				$('#menu').show().animate({top: $('header').height()}, 500, function(){});
				
			} else {
				$('#menu').animate({top: -$(window).height()}, 300,
					function(){
						//$(".current-page").removeClass('blur-effect');
						$(this).hide();
					});
			}
			menuOn = !menuOn;

		});
		
	});


	// hello menu
	
	$('#hello-btn').click(function(){
	
		// make sure menu is folded up
		// and then do our thing
		
		if (menuOn) {
			
			$('#menu').animate({top: -$(window).height()}, 300, function(){
			
				$(this).hide();
				menuOn = false;
				$('#hamburger-btn').addClass('initial-hamburger');
				$('#hamburger-btn').removeClass('rotate-hamburger');
				// $(".current-page").removeClass('blur-effect');
				
				showHideHelloMenu();
			});

		} else {
		
			showHideHelloMenu();
			
		}
		
	});
	
	var showHideHelloMenu = function()
	{
		// deploy
		if (!helloOn)
			$("#hello-menu").show('fast', function(){});
		else
			$("#hello-menu").hide('fast', function(){});
		helloOn = !helloOn;
	};
 	
 	
 	
	/**
	 *	Smooth scroll
	 *
	 */
	
	var scrollToAnchor = function(attr) {
	    var elem = $("*[id='"+ attr +"']");
	    var elemTop = elem.offset().top;
	    var myTop = parseFloat(elemTop) - parseInt(50);
	    $('html,body').animate({scrollTop: myTop}, 2500);
	}
	
	$('a[href*=#]').each(function() {
		$(this).click(function(e) {
			e.preventDefault ? e.preventDefault() : e.returnValue = false;
			var attr = $(this).attr('href');
			var attrLength = attr.length;
			var idElement = attr.substring(1, attrLength);
			scrollToAnchor(idElement);
		});
	});
	
	var scrollToElement = function($el, speed) {
		speed = typeof speed !== 'undefined' ? speed : 500;
		$('html, body').animate({ scrollTop: $el.offset().top - $('header').height() }, speed);
	}

	
	
	/**
	 *	See more on click
	 *	and close the others at the same time if they're open
	 *
	 */
	
 	var initiallyHidden = $(".initially-hidden");
 	var onClickShowMore = $(".on-click-show-more");
 	initiallyHidden.hide();
 	
 	// what follows happens
 	// at startup
	onClickShowMore.each(function(){
		var $item = $(this);
	
		if ($item.hasClass('deployed')) {
			$item.children('.more-less').children('span').attr( "data-icon", "q" );
 			$(window).load(function(){
	 			$item.children(".initially-hidden").show().animate({height:'auto'}, 500, function(){scrollToElement($item, 750)});
	 		});
 		} else {
			$item.children('.more-less').children('span').attr( "data-icon", "p" );
 			$item.children(".initially-hidden").hide().css({height:'0px'});
 		}
	});
 	
 	// what follows happens
 	// when user clicks on item
 	onClickShowMore.click(function() {
 		var $self = $(this);
 		
		// start work on the items
 		onClickShowMore.each(function(){
 			if( !$(this).is($self) ) {
 			
 				// closing all the previously deployed elements
 				if ($(this).hasClass('deployed')) {
		 			$(this).children('.more-less').children('span').attr( "data-icon", "p" );
		 			$(this).children(".initially-hidden").animate({height:'0px'},500,function(){$(this).hide()});
		 			$(this).removeClass('deployed');
		 		}
 		 		
 			} else {
		
				// operating on the clicked item
				// either closing it if it was open
				// or the other way around
	 			if ($self.hasClass('deployed')) {
		 			$self.children('.more-less').children('span').attr( "data-icon", "p" );
		 			$self.children(".initially-hidden").animate({height:'0px'},500,function(){$(this).hide();scrollToElement($self);});
		 		} else {
		 			$self.children('.more-less').children('span').attr( "data-icon", "q" );
		 			// momentarily switching to auto height to save it
		 			var $item = $self.children(".initially-hidden"),
		 				curHeight = $item.height(),
		 				autoHeight = $item.show().css('height', 'auto').height();
		 			// and now animate to there
		 			$item.height(curHeight).animate({height: autoHeight},500,function(){scrollToElement($self)});
		 		}
	 			$self.toggleClass('deployed');
	 			
	 		}
 		});

 	});

 	
 	
 	
 	
 	
 	
	

	/**
	 *	Page: HOME & FLAGSHIPS
	 *
	 *	Slideshow using SwipeJS plugin
	 *
	 */
	
	if ($.PAGE == "home" || $.PAGE == "flagships-and-others" || $.PAGE == "article") {
	
		var bullets = document.getElementById('bullets-list').getElementsByTagName('li');
		
		var mySwipe = document.getElementsByClassName('swipe');
		
		for (var i=0; i < mySwipe.length; i++) {
			// Swipe object
			window.slider = new Swipe(mySwipe[i], {
				startSlide : 0,
				//auto: 6000,
				continuous: true,
				callback: function(pos) {
					var i = bullets.length;
					while (i--) {
						bullets[i].className = ' ';
					}
					bullets[pos].className = 'on';
				}
			});
		}

		// Dynamic bullets
		for (var i=0; i < bullets.length; i++) {
		    (function(i, bullets){
		        bullets[i].addEventListener('click', function(e){
		            slider.slide(i, 500);
		        });
		    })(i, bullets);
		}

	 	// Gestion du placement des bullets du slideshow
	 	var bulletsWidth = $("#my-swipe-nav").outerWidth(true);
	 	
	 	$("#my-swipe-nav").css({
	 		width: bulletsWidth + "3",
	 		left : "50%",
	 		marginLeft : - bulletsWidth/2
	 	});
	
	}	
 	
 	
 	
 	/**
	 *	Page: ARTICLE
	 *
	 *  Vérifier que la page active est article
	 *
	 *  Créer une variable elementHeight
	 *
	 *	Récupérer la hauteur de l'image (.img-subhead)
	 *  Grâce à outerHeight()
	 *
	 *  Enregister cette valeur dans la variable
	 *
	 *  Puis appliquer "elementHeight" à l'élément .main-wrapper
	 *  Grace .css() en margin-top
	 *
	 */
	 
	 if ($.PAGE == "article" || $.PAGE == "studio") {
	 
	 	$('.js-get-height .img-wrapper img').load( function(){
	 	//	alert("yo");
		 	var elementHeight = $('.js-get-height').outerHeight();
		 	var newMarginTop = elementHeight -1;
			$(".js-apply-height-to-margintop").css({
				marginTop: newMarginTop
			});
		});
		
	 }

}); // Fin document ready


 
$(window).bind('load scroll touchmove ontouchmove ongesturechange resize', function() {

	/**
	 *  Page: HIRE US
	 *
	 */
	 
	if ($.PAGE == "hire-us" ) {
	
		var whereWeShow = $("#philosophie").offset();
		var whereWeHide = $("#competences-outils").offset();
		var backToTopBtn = $("#back-to-top-btn");
		var clientsLogos = $("#clients-logo");
		
		if ( $(window).scrollTop() <= whereWeShow.top ) {
			backToTopBtn.hide();
			clientsLogos.show();
		}
		else if ( $(window).scrollTop() <= whereWeHide.top ) {
			backToTopBtn.hide();
		} 
		else {
			 backToTopBtn.show();
			 clientsLogos.hide();
		}
		
	}

	
	/**
	 *  Page: ARTICLE
	 *
	 */
	 
	if ($.PAGE == "article" ) {
	
		var getMyTop = $(".js-get-my-top").offset();
		var hideMe = $(".js-hide-me");
		if ( $(window).scrollTop() > getMyTop.top){
			hideMe.hide();
		}
		else {
			hideMe.show();
		}
		
	}

});






/*
$(window).bind('DOMMouseScroll mousewheel', function(e) {
	//SCROLL DOWN
	if(e.originalEvent.detail > 0) {
		$("#header").hide();
    	if ($.PAGE == "hire-us") {
	    	$("#back-to-top-btn").hide();
    	}
        console.log('Down');
    } 
    //SCROLL UP
    else {
    	$("#header").show();
    	if ($.PAGE == "hire-us") {
	    	$("#back-to-top-btn").show();
    	}
        console.log('Up');
    }
    //prevent page fom scrolling
    return false;
});
*/
