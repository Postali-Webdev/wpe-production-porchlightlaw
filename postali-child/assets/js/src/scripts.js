/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

    //Hamburger animation
	$('#menu-icon').click(function() {
		$(this).toggleClass('active');
		$('#menu-main-nav').toggleClass('active');
		return false;
	});

	//Toggle mobile menu & search
	$('.toggle-nav').click(function() {
		$('#menu-main-nav').slideToggle(400);
	});
	 
	//Close navigation on anchor tap
	$('.toggle-nav.active').click(function() {	
		$('#menu-main-nav').slideUp(400);
	});	

	//Mobile menu accordion toggle for sub pages
	$('#menu-main-nav > li.menu-item-has-children').append('<div class="accordion-toggle"><span class="icon-chevron-down"></span></span></div>');

	  $('#menu-main-nav .accordion-toggle').click(function() {
		$(this).parent().find('> ul').slideToggle(400);
		$(this).toggleClass('toggle-background');
		$(this).find('.icon-chevron-down').toggleClass('toggle-rotate');
	  });

    // script to make accordions function
	$(".accordions").on("click", ".accordions_title", function() {
        // will (slide) toggle the related panel.
        $(this).toggleClass("active").next().slideToggle();
    });

	//keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
	$(document).ready(function() {
		$('.menu-item-has-children').on('focusin', function() {
			var subMenu = $(this).find('.sub-menu');
			subMenu.css('display', 'block');

			$(this).find('.sub-menu > li:last-child').on('focusout', function() {
				console.log('blur!');
				subMenu.css('display', 'none');
			});
		});
	});

	// Set tracking cookie
	// $(document).ready(function () {
	// 	function setFirstTouchCookie() {
	// 		// Check if the cookie already exists
	// 		if (document.cookie.indexOf('first_touch_url') === -1) {
	// 			// Get the current URL
	// 			var currentUrl = window.location.href;
				
	// 			// Set the cookie with the current URL
	// 			document.cookie = 'first_touch_url=' + currentUrl + '; path=/; expires=' + new Date(Date.now() + 30 * 24 * 60 * 60 * 1000).toUTCString();
	// 		}
	// 	}
	// 	// Call the function when the page loads
	// 	setFirstTouchCookie();	
	// });

});