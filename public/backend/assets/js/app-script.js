
$(function() {
    "use strict";


//sidebar menu js
$.sidebarMenu($('.sidebar-menu'));
$.subscribe('categories/categoryList/updated', function(event, object) {
  $.sidebarMenu($(object.categoryList).find('.sidebar-menu'));
});
// === toggle-menu js
$(".toggle-menu").on("click", function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

// === sidebar menu activation js

$(function() {
        for (var i = window.location, o = $(".sidebar-menu a").filter(function() {
            return this.href == i;
        }).addClass("active").parent().addClass("active"); ;) {
            if (!o.is("li")) break;
            o = o.parent().addClass("in").parent().addClass("active");
        }
    }),


/* Top Header */

$(document).ready(function(){
    $(window).on("scroll", function(){
        if ($(this).scrollTop() > 60) {
            $('.topbar-nav .navbar').addClass('bg-dark');
        } else {
            $('.topbar-nav .navbar').removeClass('bg-dark');
        }
    });

 });


/* Back To Top */

$(document).ready(function(){
    $(window).on("scroll", function(){
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });

    $('.back-to-top').on("click", function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});


  // page loader

   $(window).on('load', function(){

      $('#pageloader-overlay').fadeOut(1000);

    })
   $.preloader = {
     append: false,

     openPreloader: function (container) {
       var me = this;

       if (me.append) {
         container.append(me.createPreloader);
       }else{
         container.html(me.createPreloader);
       }
     },
     createPreloader: function () {
       var me = this;

       var preloader = $('<div>', {
               'class': 'preloader',
               'html': '<span>loading...</span>',
           });
       return preloader;
     },
     closePreloader: function (container) {
       var me = this;

       container.find('.preloader').remove();
     },

   };

$(function () {
  $('[data-toggle="popover"]').popover()
})


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


	 // theme setting
	 $(".switcher-icon").on("click", function(e) {
        e.preventDefault();
        $(".right-sidebar").toggleClass("right-toggled");
    });
    function setCookie(name, value, days = 4) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
	  $('#theme1').click(theme1);
    $('#theme2').click(theme2);
    $('#theme3').click(theme3);
    $('#theme4').click(theme4);
    $('#theme5').click(theme5);
    $('#theme6').click(theme6);
    $('#theme7').click(theme7);
    $('#theme8').click(theme8);
    $('#theme9').click(theme9);
    $('#theme10').click(theme10);
    $('#theme11').click(theme11);
    $('#theme12').click(theme12);
    $('#theme13').click(theme13);
    $('#theme14').click(theme14);
    $('#theme15').click(theme15);

    var themeclass = "bg-theme";
    var theme = getCookie('theme');
    console.log(theme);
    var themeclass = "bg-theme";
    var theme = getCookie('theme');
    if (theme == null) {
      theme = "bg-theme2";
    }

    themeclass = themeclass + ' ' + theme;
    $('body').attr('class', themeclass);

    function theme1() {
      $('body').attr('class', 'bg-theme bg-theme1');
      setCookie("theme", "bg-theme1");
    }

    function theme2() {
      $('body').attr('class', 'bg-theme bg-theme2');
      setCookie("theme", "bg-theme2");

    }

    function theme3() {
      $('body').attr('class', 'bg-theme bg-theme3');
      setCookie("theme", "bg-theme3");
    }

    function theme4() {
      $('body').attr('class', 'bg-theme bg-theme4');
      setCookie("theme", "bg-theme4");
    }

	  function theme5() {
      $('body').attr('class', 'bg-theme bg-theme5');
      setCookie("theme", "bg-theme5");
    }

	function theme6() {
      $('body').attr('class', 'bg-theme bg-theme6');
      setCookie("theme", "bg-theme6");
    }

    function theme7() {
      $('body').attr('class', 'bg-theme bg-theme7');
      setCookie("theme", "bg-theme7");
    }

    function theme8() {
      $('body').attr('class', 'bg-theme bg-theme8');
      setCookie("theme", "bg-theme8");
    }

    function theme9() {
      $('body').attr('class', 'bg-theme bg-theme9');
      setCookie("theme", "bg-theme9");
    }

    function theme10() {
      $('body').attr('class', 'bg-theme bg-theme10');
      setCookie("theme", "bg-theme10");
    }

    function theme11() {
      $('body').attr('class', 'bg-theme bg-theme11');
      setCookie("theme", "bg-theme11");
    }

    function theme12() {
      $('body').attr('class', 'bg-theme bg-theme12');
      setCookie("theme", "bg-theme12");
    }

	  function theme13() {
      $('body').attr('class', 'bg-theme bg-theme13');
      setCookie("theme", "bg-theme13");
    }

	  function theme14() {
      $('body').attr('class', 'bg-theme bg-theme14');
      setCookie("theme", "bg-theme14");
    }

	  function theme15() {
      $('body').attr('class', 'bg-theme bg-theme15');
      setCookie("theme", "bg-theme15");
    }

// csrf validator
function getCsrf(element) {
  // csrf validator
  var getCsrf = true;
  $.ajax({
    url: window.location.origin + '/backend/csrf',
    method: 'post',
    data: {getCsrf},
    success: function (response) {
      if ($('form[method="post"]').length > 0) {
        $('form[method="post"]').each(function(index, element) {
          if ($(this).find('input[name="csrf"]').length == 0) {
            $(this).append(response);
          }
        });;

      }else{
        $('body').append(response);
      }
      window.token = $('input[name="csrf"]').val();
    }
  })
}

getCsrf();
$.subscribe('dropzone/items/discovered', function (event, dropzones) {
  getCsrf();
})
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

$.subscribe('detail/loaded', function(event, object) {
  getCsrf();
});
});
