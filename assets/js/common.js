

$(document).ready(function(){
	
	/**
	 ** GESTION DE LA HAUTEUR DES BLOCS
	 **/
	var windowHeight = $(window).height();
	$(".full-height").each(function(){
		$(this).height(windowHeight);
		if ($(this).attr("id") == "#footer") {
			var newHeight = windowHeight + 20;
			$(this).height(newHeight);
		}
	});
	//alert("my height : " + myHeight);
	
	/**
	 ** MENU
	 **/
	var hamburger = $("#hamburger");
	hamburger.click(function() {
		// Ajouter un effet d'apparition CSS3 sur show-menu
		$("#main-menu ul").toggleClass("show-menu");
	})
	
	/**
	 ** HOME
	 **/
	var lastSectionMargin = windowHeight - 50;
	$("#last-section").css({
		marginBottom : lastSectionMargin
	})
	
	var scrollBtn = $(".scroll-btn");
	scrollBtn.click( function() {
		magnetizeWindow();
	});
	
	$(this).on( 'scroll', function() {
/* 		magnetizeWindow(); */
/* 		alert("tu scrolles"); */
	});
	
	
	///
	/**
	 ** Magnetisme des sections
	 **/
	function magnetizeWindow() {
		/*
			Améliorer la fonction pour automatiser
			Compter le nb de sections
			WindowHeight*1 = Section 1
			WindowHeight*2 = Section 2
		*/
		var sectionNumber = 1;
		var actualSection;
		
		var scrollPosition = $(window).scrollTop();
		var sectionOne = 0;
		var sectionTwo = sectionOne + windowHeight;
		var sectionThree = sectionTwo + windowHeight;
		var sectionFour = sectionThree + windowHeight;
		var sectionFive = sectionFour + windowHeight;
		var sectionSix = sectionFive + windowHeight;
		//scrollPosition += windowHeight;
		//$(window).scrollTop(scrollPosition);
		if ( scrollPosition >= 0 && scrollPosition < sectionTwo ) {
			$('html,body').animate({
				scrollTop: sectionTwo
		    }, 1000);
		}
		else if ( scrollPosition >= sectionTwo && scrollPosition < sectionThree ) {
			$('html,body').animate({
				scrollTop: sectionThree
		    }, 1000);
		}
		else if ( scrollPosition >= sectionThree && scrollPosition < sectionFour ) {
			$('html,body').animate({
				scrollTop: sectionFour
		    }, 1000);
		}
		else if ( scrollPosition >= sectionFour && scrollPosition < sectionFive ) {
			$('html,body').animate({
				scrollTop: sectionFive
		    }, 1000);
		}
		else if ( scrollPosition >= sectionFive && scrollPosition < sectionSix ) {
			$('html,body').animate({
				scrollTop: sectionSix
		    }, 1000);
		}
		
	};
		
});