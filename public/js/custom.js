$(document).ready(function(){
	"use strict";
	/*==============================================================
        * Table of Contents :
        * 1.0 - DL Menu Script Start
        * 2.0 - Number Count Up(WayPoints) Script
        * 3.0 - Banner Slider Script
        * 4.0 - Client Slider Script
        * 5.0 - Event Slider Script
        * 6.0 - Post Slider Script
        * 7.0 - Banner Slide Slider Script
        * 8.0 - Pretty Photo Script Script
        * 9.0 - Selectic Script Script
        * 10.0 - Countdown Script Start
        * 11.0 - Progress Bar Script Start
        * 12.0 - Google Map Function for Custom Style
        ==============================================================*/

	/*==============================================================
   		DL Menu Script Start
   	============================================================== */
	if($('#dl-menu').length){
		$(function() {
			$( '#dl-menu' ).dlmenu({
				animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
			});
		});
	}

    /*==================================================================
		Number Count Up(WayPoints) Script
	=================================================================	*/		
	if($('.keo_counter').length){
		$('.keo_counter').counterUp({
			delay: 10,
			time: 1000
		});
	}

	/*==================================================================
		Banner Slider Script
	=================================================================	*/	
	if($('.banner-slider').length){
		$('.banner-slider').slick({
			slidesToShow: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			dots:false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
		  	]
		});
	}
	/*==================================================================
		Client Slider Script
	=================================================================	*/	  	  
	if($('.client-slider').length){
		$('.client-slider').slick({
			slidesToShow: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			speed: 2500,
			dots:false,
			vertical:true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
		  	]
		});
	}
	/*==================================================================
		Event Slider Script
	=================================================================*/		  
	if($('.event-slider').length){
		$('.event-slider').slick({
			slidesToShow: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			speed: 2500,
			vertical:true,
			dots:false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
		  	]
		});
	}
	/*==================================================================
		Post Slider Script
	=================================================================*/		  
	if($('.post_slider').length){
		$('.post_slider').slick({
			slidesToShow: 1,
			autoplay: true,
			speed: 1000,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
		  	]
		});
	}
	/*==================================================================
		Banner Slide Slider Script
	=================================================================*/		  
	if($('.banner_slide').length){  
		$('.banner_slide').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: true,
			asNavFor: '.banner_slide_fig'
		});
	}
	if($('.banner_slide_fig').length){  
		$('.banner_slide_fig').slick({
			slidesToShow: 6,
			slidesToScroll: 6,
			asNavFor: '.banner_slide',
			dots: true,
			centerMode: true,
			focusOnSelect: true,
			vertical:true
		});
	}
			
	/*=======================================================================
		Pretty Photo Script Script
	=======================================================================*/
	if($("a[data-rel^='prettyPhoto']").length){
		$("a[data-rel^='prettyPhoto']").prettyPhoto()
	}
			
	/*
	=======================================================================
		Selectic Script Script
	=======================================================================
  	*/	
	if($('select').length){
		$('select').niceSelect();
	}
  			
	/*==============================================================
		Countdown Script Start
	==============================================================
	*/
	if($('.countdown').length){
		$('.countdown').downCount({ date: '8/8/2020 12:00:00', offset: +1 });
	}
  	/*==============================================================
		Progress Bar Script Start
	============================================================== */ 
	if($('.progressbar').length){ 
	  	$('.progressbar').each(function(){
			var t = $(this),
				dataperc = t.attr('data-perc'),
				barperc = Math.round(dataperc*5.56);
			t.find('.bar').animate({width:barperc}, dataperc*25);
			t.find('.label').append('<div class="perc"></div>');
			
			function perc() {
				var length = t.find('.bar').css('width'),
					perc = Math.round(parseInt(length)/5.56),
					labelpos = (parseInt(length)-2);
				t.find('.label').css('center', labelpos);
				t.find('.perc').text(perc+'%');
			}
			perc();
			setInterval(perc, 0); 
		});
	}

	/*
      ==============================================================
           Google Map Function for Custom Style
      ============================================================== */
    if ($('#map-canvas').length) {
        google.maps.event.addDomListener(window, 'load', initialize);
    }

    function initialize() {
        var MY_MAPTYPE_ID = 'custom_style';
        var map;
        var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
        var featureOpts = [{
            stylers: [{
                hue: '#f9f9f9'
            }, {
                visibility: 'simplified'
            }, {
                gamma: 0.7
            }, {
                saturation: -200
            }, {
                lightness: 45
            }, {
                weight: 0.6
            }]
        }, {
            featureType: "road",
            elementType: "geometry",
            stylers: [{
                lightness: 200
            }, {
                visibility: "simplified"
            }]
        }, {
            elementType: 'labels',
            stylers: [{
                visibility: 'on'
            }]
        }, {
            featureType: 'water',
            stylers: [{
                color: '#ffffff'
            }]
        }];
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: brooklyn,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
            },
            mapTypeId: MY_MAPTYPE_ID
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var styledMapOptions = {
            name: 'Custom Style'
        };
        var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
        map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
    }
});


    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    

        
	function fa_calculate(){

		var G_S_price = 0;
		var M_on_H_B_price = 0;
		var O_price = 0;
		var I_S_price = 0
		var Y_O_price = 0;
		var Y_OD_price = 0;

		var G_S_price = document.getElementById('G_S_price').value;
		var M_on_H_B_price = document.getElementById('M_on_H_B_price').value;
		var O_price = document.getElementById('O_price').value;
		var I_S_price = document.getElementById('I_S_price').value;
		var Y_O_price = document.getElementById('Y_O_price').value;
		var Y_OD_price = document.getElementById('Y_OD_price').value;
 
		var Net_assest = parseFloat(G_S_price) + parseFloat(M_on_H_B_price) + parseFloat(O_price)+ parseFloat(I_S_price)- parseFloat(Y_O_price) + parseFloat(Y_OD_price);
		var nisab = 240;
		var twopointfive = 2.5;

		     var result = (twopointfive/100)*Net_assest;
		
		if(!isNaN(result)){
			if(Net_assest>nisab){
			// document.getElementById('fa_net_price').innerHTML= Net_assest;
			document.getElementById('netTotal').value= Net_assest;
			document.getElementById('netZakat').value= result;
			// document.getElementById('netTotal').value= "ذکات   شما تقریبند<b>"+result+"</b>میشود";
			}
		}

	}

	function calculate(){

		var name = document.getElementById('name').value;
		var amount = document.getElementById('amount').value;
		var kg_gr = document.getElementById('kg_gr').value;
		var price = document.getElementById('price').value;
		var result= parseFloat(amount) + parseFloat(kg_gr) + parseFloat(price);
		
		if(!isNaN(result)){
			
			document.getElementById('total').innerHTML= "Zakat von Ihrem<b style='color:green'>"+name+"</b>  wäre ungefähr<b>"+result+"</b>";
			
		}

	}
   