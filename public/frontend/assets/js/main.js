(function ($) {
    "use strict";

    new WOW().init();
    /*---background image---*/
	function dataBackgroundImage() {
		$('[data-bgimg]').each(function () {
			var bgImgUrl = $(this).data('bgimg');
			$(this).css({
				'background-image': 'url(' + bgImgUrl + ')', // + meaning concat
			});
		});
    }

    $(window).on('load', function () {
        dataBackgroundImage();
    });

    /*---stickey menu---*/
    $(window).on('scroll',function() {
           var scroll = $(window).scrollTop();
           if (scroll < 100) {
            $(".sticky-header").removeClass("sticky");
           }else{
            $(".sticky-header").addClass("sticky");
           }
    });


    /*---slider activation---*/
    var $slider = $('.slider_area');
    if($slider.length > 0){
        $slider.owlCarousel({
            animateOut: 'fadeOut',
            autoplay: true,
            loop: true,
            nav: false,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 1,
            dots:true,
        });
    }

    /*---product column5 activation---*/
    var $porductColumn5 =  $('.product_column5');
    if($porductColumn5.length > 0){
        $porductColumn5.on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 5,
            margin: 20,
            dots:false,
            navText: ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                576:{
                    items:2,
                },
                768:{
                    items:3,
                },
                992:{
                    items:4,
                },
                1200:{
                    items:5,
                },

              }
        });
    }

    /*---product column4 activation---*/
        var $productColumn4 =  $('.product_column4');
        if($productColumn4.length > 0){
           $productColumn4.on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 4,
            margin:20,
            dots:false,
            navText: ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                576:{
                    items:2,
                },
                768:{
                    items:2,
                },
                992:{
                    items:4,
                },

              }
        });
    }

    /*---productpage column4 activation---*/
    var $productPageColumn4 = $('.productpage_column4');
    if($productPageColumn4.length > 0){
        $productPageColumn4.on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 4,
            margin:20,
            dots:false,
            navText: ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                576:{
                    items:2,
                },
                768:{
                    items:3,
                },
                992:{
                    items:4,
                },

              }
        });
    }
    /*---product column3 activation---*/
    var $productColumn3 = $('.product_column3');
    if($productColumn3.length > 0){
        $productColumn3.on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 3,
            dots:false,
            margin: 20,
            navText: ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                992:{
                    items:3,
                },
              }
        });
    }
    /*---product3 column3 activation---*/
    var $product3Column3 = $('.product3_column3');
    if($product3Column3.length > 0){
        $product3Column3.on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 3,
            dots:false,
            margin: 20,
            navText: ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                576:{
                    items:2,
                },
                768:{
                    items:2,
                },
                992:{
                    items:3,
                },
              }
        });
    }
    /*---product column2 activation---*/
       var $productColumn2 = $('.product_column2');
        if($productColumn2.length > 0){
           $productColumn2.on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
            autoplay: true,
            loop: true,
            nav: false,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 2,
            dots:false,
            margin: 20,
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                768:{
                    items:1,
                },
                992:{
                    items:2,
                },
              }
        });
    }
    /*---smallp column2 activation---*/
    var $smallpColumn2 = $('.smallp_column2');
       if($smallpColumn2.length > 0){
           $('.smallp_column2').on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 2,
            dots:false,
            margin: 20,
            navText: ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                768:{
                    items:1,
                },
                992:{
                    items:2,
                },
              }
        });
    }
    /*---product column1 activation---*/
    var $productColumn1 = $('.product_column1');
       if($productColumn1.length > 0){
           $('.product_column1').on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 2,
            dots:false,
            margin: 20,
            navText: ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                992:{
                    items:1,
                },
              }
        });
    }
    /*---deals3 column1 activation---*/
     var $deals3Column1 = $('.deals3_column1');
       if($deals3Column1.length > 0){
       $('.deals3_column1').on('changed.owl.carousel initialized.owl.carousel', function (event) {
        $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
        autoplay: true,
		loop: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 8000,
        items: 1,
        dots:false,
        margin: 20,
        navText: ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
        responsiveClass:true,
		responsive:{
				0:{
				items:1,
			},
            576:{
				items:2,
			},
            768:{
				items:1,
			},
            992:{
				items:1,
			},
		  }
    });
    }
     /*---smallp4 left column1 activation---*/
       var $smallp4LeftColumn1 = $('.smallp4_left_column1');
        if($smallp4LeftColumn1.length > 0){
           $('.smallp4_left_column1').on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 1,
            dots:false,
            margin: 20,
            navText: ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                768:{
                    items:1,
                },
                992:{
                    items:1,
                },
              }
        });
    }
    /*---blog column3 activation---*/
    var $blogColumn3 = $('.blog_column3');
        if($blogColumn3.length > 0){
        $('.blog_column3').owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 3,
            dots:false,
            navText: ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                 992:{
                    items:3,
                },
              }
        });
    }


    /*---brand container activation---*/
     var $brandContainer = $('.brand_container');
        if($brandContainer.length > 0){
         $('.brand_container').on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
            autoplay: true,
            loop: true,
            nav: false,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 5,
             margin: 20,
            dots:false,
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                300:{
                    items:2,
                    margin: 15,
                },
                480:{
                    items:3,
                },
                768:{
                    items:4,
                },
                992:{
                    items:5,
                },

              }
        });
    }

    /*---testimonial column1 activation---*/
    var $testimonialColumn1 = $('.testimonial_column1');
        if($testimonialColumn1.length > 0){
        $('.testimonial_column1').owlCarousel({
            autoplay: true,
            loop: true,
            nav: false,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 1,
            dots:true,
        });
    }
    /*---testimonial active activation---*/
    var $testimonialTwo = $('.testimonial-two');
        if($testimonialTwo.length > 0){
        $('.testimonial-two').owlCarousel({
            autoplay: true,
            loop: true,
            nav: false,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 1,
            dots: true,
        })
    }

    /*---blog thumb activation---*/
    var $blogThumbActive = $('.blog_thumb_active');
        if($blogThumbActive.length > 0){
        $('.blog_thumb_active').owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 1,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        });
    }


    /*---single product activation---*/
     var $singleProductActive = $('.single-product-active');
        if($singleProductActive.length > 0){
        $('.single-product-active').owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 4,
            margin:15,
            dots:false,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                320:{
                    items:2,
                },
                400:{
                    items:3,
                },
                992:{
                    items:3,
                },
                1200:{
                    items:4,
                },


              }
        });
    }

    /*---product navactive activation---*/
    var $productNavactive = $('.product_navactive');
        if($productNavactive.length > 0){
        $('.product_navactive').owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 4,
            dots:false,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items:1,
                },
                250:{
                    items:2,
                },
                480:{
                    items:3,
                },
                768:{
                    items:4,
                },

            }
        });
     }

    $('.modal').on('shown.bs.modal', function (e) {
        $('.product_navactive').resize();
    })

    $('.product_navactive a').on('click',function(e){
      e.preventDefault();

      var $href = $(this).attr('href');

      $('.product_navactive a').removeClass('active');
      $(this).addClass('active');

      $('.product-details-large .tab-pane').removeClass('active show');
      $('.product-details-large '+ $href ).addClass('active show');

    })

    /*--- video Popup---*/
    $('.video_popup').magnificPopup({
        type: 'iframe',
        removalDelay: 300,
        mainClass: 'mfp-fade'
    });

    /*--- Magnific Popup Video---*/
    $('.port_popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*--- Tooltip Active---*/
    $('.action_links ul li a,.add_to_cart a,.footer_social_link ul li a').tooltip({
            animated: 'fade',
            placement: 'top',
            container: 'body'
    });

    /*--- niceSelect---*/
     $('.select_option').niceSelect();
     $.subscribe('plugin/paginator/pageLoaded', function () {
         $('.select_option').niceSelect();
     });
     $(document).on('click', '.nice-select .option', function () {
       var value = $(this).data('value');
       console.log(123);
       var select = $(this).parents('.nice-select').siblings('.select_option').find('select');
       select.val(value);
       select.change();
     });

    /*---  Accordion---*/
    $(".faequently-accordion").collapse({
        accordion:true,
        open: function() {
        this.slideDown(300);
      },
      close: function() {
        this.slideUp(300);
      }
    });



    /*---  ScrollUp Active ---*/
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-double-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*---countdown activation---*/

	 $('[data-countdown]').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
		$this.html(event.strftime('<div class="countdown_area"><div class="single_countdown"><div class="countdown_number">%D</div><div class="countdown_title"></div></div><div class="single_countdown"><div class="countdown_number">%H</div><div class="countdown_title"></div></div><div class="single_countdown"><div class="countdown_number">%M</div><div class="countdown_title"></div></div><div class="single_countdown"><div class="countdown_number">%S</div><div class="countdown_title"></div></div></div>'));

       });
	});
  jQuery(document).ready(function($) {
    /*---slider-range here---*/
    var minPriceInput = $('#min-price');
    var maxPriceInput = $('#max-price');
    var minVal = parseInt(minPriceInput.val());
    var maxVal = parseInt(maxPriceInput.val());
    $( "#slider-range" ).slider({
        range: true,
        min: minVal,
        max: maxVal,
        values: [ minVal, maxVal ],
        slide: function( event, ui ) {
        $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + window.currentCur.symbol + " - " + $( "#slider-range" ).slider( "values", 1 ) + window.currentCur.symbol )
        minPriceInput.val(ui.values[ 0 ]);
        maxPriceInput.val(ui.values[ 1 ]);
       }
    });
    $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + window.currentCur.symbol + " - " + $( "#slider-range" ).slider( "values", 1 ) + window.currentCur.symbol );

    // csrf validator
    function getCsrf(element) {
      // csrf validator
      var getCsrf = true;
      $.ajax({
        url: window.location.origin + '/frontend/csrf',
        method: 'post',
        data: {getCsrf},
        success: function (response) {
          if ($('form[method="post"]').length > 0) {
            $('form[method="post"]').append(response);
          }else{
            $('body').append(response);
          }
          window.token = $('input[name="csrf"]').val();
        }
      })
    }

    getCsrf();

    jQuery(document).ready(function($) {
      $.ajaxSetup({
        beforeSend: function(jqXHR, settings) {
          var hrefParams = new URLSearchParams(settings.data);
          hrefParams.set('csrf', window.token);
          var data = hrefParams.toString();
          settings.data = data;
          return true;
        }
      });
    });

  });


    /*---elevateZoom---*/
    $("#zoom1").elevateZoom({
        gallery:'gallery_01',
        responsive : true,
        cursor: 'crosshair',
        zoomType : 'inner'

    });

    /*---portfolio Isotope activation---*/
      $('.portfolio_gallery').imagesLoaded( function() {

        var $grid = $('.portfolio_gallery').isotope({
           itemSelector: '.gird_item',
            percentPosition: true,
            masonry: {
                columnWidth: '.gird_item'
            }
        });

          /*---ilter items on button click---*/
        $('.portfolio_button').on( 'click', 'button', function() {
           var filterValue = $(this).attr('data-filter');
           $grid.isotope({ filter: filterValue });

           $(this).siblings('.active').removeClass('active');
           $(this).addClass('active');
        });

    });


    /*---categories slideToggle---*/
    $(".categories_title").on("click", function() {
        $(this).toggleClass('active');
        $('.categories_menu_toggle').slideToggle('medium');
    });

    /*---widget sub categories---*/
    $(".sub_categories > a").on("click", function() {
        $(this).toggleClass('active');
        $(this).siblings('.dropdown_categories').slideToggle('medium');
    });

    /*---addClass/removeClass categories---*/
   $("#cat_toggle.has-sub > a").on("click", function() {
            $(this).removeAttr('href');
            $(this).toggleClass('open').next('.categorie_sub').toggleClass('open');
            $(this).parents().siblings().find('#cat_toggle.has-sub > a').removeClass('open');
    });


    /*---MailChimp---*/
    $('#mc-form').ajaxChimp({
        language: 'en',
        callback: mailChimpResponse,
        // ADD YOUR MAILCHIMP URL BELOW HERE!
        url: 'http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'

    });
    function mailChimpResponse(resp) {

        if (resp.result === 'success') {
            $('.mailchimp-success').addClass('active')
            $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
            $('.mailchimp-error').fadeOut(400);

        } else if(resp.result === 'error') {
            $('.mailchimp-error').html('' + resp.msg).fadeIn(900);
        }
    }

    /*---Category menu---*/
    function categorySubMenuToggle(){
        $('.categories_menu_toggle li.menu_item_children > a.has-children').on('click', function(){
        if($(window).width() < 991){
            $(this).removeAttr('href');
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp();
            }
            else {
                element.addClass('open');
                element.children('ul').slideDown();
                element.siblings('li').children('ul').slideUp();
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp();
            }
        }
        });
        $('.categories_menu_toggle li.menu_item_children > a').append('<span class="expand"></span>');
    }
    categorySubMenuToggle();


    /*---shop grid activation--- --------------*/
    $('.shop_toolbar_btn > button').on('click', function (e) {

		e.preventDefault();

        $('.shop_toolbar_btn > button').removeClass('active');
		$(this).addClass('active');

		var parentsDiv = $('.shop_wrapper');
		var viewMode = $(this).data('role');


		parentsDiv.removeClass('grid_3 grid_4 grid_5 grid_list').addClass(viewMode);

		if(viewMode == 'grid_3'){
			parentsDiv.children().addClass('col-lg-4 col-md-4 col-sm-6').removeClass('col-lg-3 col-cust-5 col-12');

		}

		if(viewMode == 'grid_4'){
			parentsDiv.children().addClass('col-lg-3 col-md-4 col-sm-6').removeClass('col-lg-4 col-cust-5 col-12');
		}

        if(viewMode == 'grid_list'){
			parentsDiv.children().addClass('col-12').removeClass('col-lg-3 col-lg-4 col-md-4 col-sm-6 col-cust-5');
		}

	});

    /*---search box slideToggle---*/
    $(".search_box > a").on("click", function() {
        $(this).toggleClass('active');
        $('.search_widget').slideToggle('medium');
    });


    /*---header account slideToggle---*/
    $(".header_account > a").on("click", function() {
        $(this).toggleClass('active');
        $('.dropdown_account').slideToggle('medium');
    });

     /*---slide toggle activation---*/
    $('.mini_cart_wrapper > a').on('click', function(event){
        if($(window).width() < 991){
            event.preventDefault();
            $('.mini_cart').slideToggle('medium');
        }
    });


    /*---canvas menu activation---*/
    $('.canvas_open').on('click', function(){
        $('.offcanvas_menu_wrapper,.off_canvars_overlay').addClass('active')
    });

    $('.canvas_close,.off_canvars_overlay').on('click', function(){
        $('.offcanvas_menu_wrapper,.off_canvars_overlay').removeClass('active')
    });



    /*---Off Canvas Menu---*/
    var $offcanvasNav = $('.offcanvas_main_menu'),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
    $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-angle-down"></i></span>');

    $offcanvasNavSubMenu.slideUp();

    $offcanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.siblings('ul').slideUp('slow');
            }else {
                $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                $this.siblings('ul').slideDown('slow');
            }
        }
        if( $this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/) ){
        	$this.parent().toggleClass('menu-open');
        }else if( $this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/) ){
        	$this.toggleClass('menu-open');
        }
    });

    // filter opener
    $('.filter-opener-button').click(function () {
      $(".filter-container").slideToggle();
    })

    jQuery(document).ready(function($) {
      if (window.route.controller == 'detail') {
        // OVERCOMPLICATED VERSION: https://codepen.io/Betich/pen/XWmOaRE

        var hues = [90, 100, 114, 134, 144]; // Color Scheme based on hue

        $(document).ready(function() {
          var stars = $(".star");
        	var rating = parseInt($("#ratingInput").val());
        	const ratingPreview = $("#ratingVal");

          var Star = {
            onClicked: function() {
        			// Determine Input Value
        		$("#ratingInput").val($(this).attr("star-rating"));
        			rating = parseInt($("#ratingInput").val());

        			// Assign Colors
              $(this).siblings()
        				.filter(".star").removeClass("clickedStars"); // Reset Color
              assignColor(hues[rating - 1], "Color");
              $(this).prevAll().addBack().addClass("clickedStars");
            },

            onHovered: function() {
              const currIndex = $(this).index();

        			// If the hovered star is higher than the clicked star,
        			// Assign the current star's color value to all stars
        			var ratingIdx = rating - 1; // Rating Index
              if (currIndex > ratingIdx) {
                assignColor(hues[currIndex], "Color");
              }

              $(this).prevAll().addBack().addClass("hoveredStars");

        			let hovRating = parseInt($(this).attr("star-rating"));
            },

        		unHover: function() {
        			// Reset Color
            	$(this).prevAll().addBack()
              	.removeClass("hoveredStars");
        			assignColor(hues[rating - 1], "Color");

          	}
          };

        	/* INIT: Set up stars beforehand */
        	init(stars, rating);

        	/* Star Events */
          stars.click(Star.onClicked);
          stars.hover(Star.onHovered, Star.unHover);
        });

        // Functions

        function init(obj, initRating) {

        	initRating--; // Convert to Array Index
        	let initStar = obj.get(initRating);

        	// Assign Colors
          $(initStar).siblings()
        		.filter(".star").removeClass("clickedStars"); // Reset Color
          assignColor(hues[initRating], "Color");
          $(initStar).prevAll().addBack().addClass("clickedStars");
        }

        function assignColor(hue, assignedVar) {
          const sat = "65%",
            		val = "45%"; // Saturation & Value
          document.documentElement.style.setProperty(
            "--" + assignedVar,
            "hsl(" + hue + "," + sat + "," + val + ")"
          );
        }
      }

      // ajax forms
      $("*[data-ajax='true']").submit(function(event) {
        event.preventDefault();
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        var data = $(this).serializeArray();
        var dataType = $(this).attr('datatype');

        $.ajax({
          url: url,
          method: method,
          dataType: dataType,
          data: data,
          success: function (response) {
            if (response.success) {
              $.fn.round_success_noti(response.message);
            }else{
              $.fn.round_error_noti(response.message);
            }
            $.publish('main/formSubmited', [$(this), response]);
          }
        })
      });
    });

})(jQuery);
