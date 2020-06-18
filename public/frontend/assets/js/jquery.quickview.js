window.plugin.quickView = {
  viewButtonSelector: '*[data-modal="quickview"]',
  viewContainerSelector: '#modal_box *[data-content="true"]',
  modal: '#modal_box',

  init: function () {
    var me = this;

    me.onViewButtonClick();
  },


  onViewButtonClick: function () {
    var me = this;
    $(document).on('click', me.viewButtonSelector, function () {
      event.preventDefault();
      me.openPreloader();

      me.url = $(this).attr('href');
      console.log( $(this).attr('href'));
    });
    $(me.modal).on('shown.bs.modal', function () {
      $.get( me.url, function( data ) {
        if (data) {
          $(me.viewContainerSelector).html(data).promise().done(function(){
            me.slider();
          });
        }
      });
    })

  },
  slider: function() {
    var me = this;

    /*carusel- item detail*/
    var sync1 = $("#sync1");
      var sync2 = $("#sync2");
      var slidesPerPage = 4; //globaly define number of elements per page
      var syncedSecondary = true;

      sync1.owlCarousel({
          items: 1,
          slideSpeed: 2000,
          nav: true,
          autoplay: false,
          dots: true,
          loop: true,
          responsiveRefreshRate: 200,
          navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
      }).on('changed.owl.carousel', syncPosition);

      sync2
          .on('initialized.owl.carousel', function() {
              sync2.find(".owl-item").eq(0).addClass("current");
          })
          .owlCarousel({
              items: slidesPerPage,
              dots: true,
              nav: true,
              smartSpeed: 200,
              slideSpeed: 500,
              slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
              responsiveRefreshRate: 100
          }).on('changed.owl.carousel', syncPosition2);

      function syncPosition(el) {

          var count = el.item.count - 1;
          var current = Math.round(el.item.index - (el.item.count / 2) - .5);

          if (current < 0) {
              current = count;
          }
          if (current > count) {
              current = 0;
          }

          //end block

          sync2
              .find(".owl-item")
              .removeClass("current")
              .eq(current)
              .addClass("current");
          var onscreen = sync2.find('.owl-item.active').length - 1;
          var start = sync2.find('.owl-item.active').first().index();
          var end = sync2.find('.owl-item.active').last().index();

          if (current > end) {
              sync2.data('owl.carousel').to(current, 100, true);
          }
          if (current < start) {
              sync2.data('owl.carousel').to(current - onscreen, 100, true);
          }
      }

      function syncPosition2(el) {
          if (syncedSecondary) {
              var number = el.item.index;
              sync1.data('owl.carousel').to(number, 100, true);
          }
      }

      sync2.on("click", ".owl-item", function(e) {
          e.preventDefault();
          var number = $(this).index();
          sync1.data('owl.carousel').to(number, 300, true);
      });

  },


  openPreloader: function () {
    var me = this;

    var preloader = $('<div>', {
          'class': [
            'preloader',
          ].join(),
          'html': $('<span>', {'class': ['inner-preloader'].join(),}),
        });
    $(me.viewContainerSelector).html(preloader);

  }
}
