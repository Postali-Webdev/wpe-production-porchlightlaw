/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	$('#award-slider').slick({
		dots: false,
		infinite: true,
		fade: true,
		autoplay: false,
  		autoplaySpeed: 5000,
  		speed: 1300,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: false,
    	nextArrow: false,
    	swipeToSlide: true,
		cssEase: 'ease-in-out'
	});
	
});