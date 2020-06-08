window.plugin.basket = {
  buyButtonSelector: '*[data-ajaxsend="true"]',
  miniCartOpener: '.mini_cart_wrapper .opener',
  miniCartCloser: ".offcanvas-close, .minicart-close,.offcanvas-overlay",
  basketNote: '.mini_cart_wrapper .item_count',
  miniBasketBox: '*[data-basket="true"]',
  basketRemover: '.cart_remove a',
  minicartContent: '.minicart-inner',
  quantityButton : '.quantity .quantity-button',


  init: function () {
    var me = this;

    me.onBuyButtonClick();
    me.onBasketItemRemove();
    me.onMiniCartOpenerHover();
    me.onMiniCartCloserClick();
    me.onIndDecPrice();
  },

  onIndDecPrice: function() {
    var me = this;
    $(document).on('click', me.quantityButton, function () {
      var input = $(this).parent().find('input');
      var q = parseFloat(input.val());
      var step = parseFloat(input.attr('step'));
      var url = $(this).parent().data('url');
      var a = $(this).parent().data('id');
      var t = $(".total-"+a);
      if ($(this).hasClass('add')) {
        q+=step;
      }
      if ($(this).hasClass('desc')) {
        if (q <= step) {
          return;
        }
        q-=step;
      }
      input.val(q);

      if (window.route.controller == "basket" || window.route.controller == "checkout") {

        $.get(url, { q: q , a: a,updateQuantity: true}, function (data) {
           if(data){
            $(".total-amount").html(data.totalPrice.toFixed(2));
            $(".delivery-amount").html(data.deliveryPrice.toFixed(2));
            $(".primary-amount").html((data.deliveryPrice + data.totalPrice).toFixed(2));
            t.html(data.total.toFixed(2));
           }
        },'json');
      }
    })
  },

  onBuyButtonClick: function () {
    var me = this;

    $(document).on('click', me.buyButtonSelector, function () {
      event.preventDefault();
      var url = $(this).attr('href');
      var q = $(this).parents('.product_content').find('.quantity').find('input').val();
      if(q){
        url += '&q=' + q;
      }

      me.sendRequestWithAjax(url);

      // $(me.miniCartOpener).click();
    });
  },
  onBasketItemRemove: function () {
    var me = this;

    $(document).on('click',me.basketRemover,function (event) {
       var url = $(this).attr('href');
       event.preventDefault();
       console.log($(this));
       $.get(url, function (data) {
         if(data){
          $(me.basketNote).html(parseInt(data));

          urlToMiniCart = $(me.miniCartOpener).attr('href')

          me.getMiniCartContent(urlToMiniCart);
         }
       });
    });
  },

  sendRequestWithAjax: function (url) {
    var me = this;
    var msg;
    $.get( url, function( data ) {
      if (data) {
        $(me.basketNote).html(parseInt(data));

        if (!$(me.basketNote).is(":visible")) {
          $(me.basketNote).show();
        }
        msg = window.basketMessage;
        round_success_noti(msg)
      }
    });
  },

  onMiniCartOpenerHover: function () {
    var me = this;
    $(me.miniCartOpener).on('mouseover', function(){
      event.preventDefault();
      if (window.route.controller == 'basket') return;

      url = $(this).attr('href');
      me.openPreloader();
      me.getMiniCartContent(url);
    });
  },

  onMiniCartCloserClick: function () {
    var me = this;
    $(me.miniCartCloser).on('click', function(){
      $("body").removeClass('fix');
      $(me.minicartContent).removeClass('show')
    })
  },

  getMiniCartContent: function (url) {
    var me = this;

    $.get( url, function( data ) {
      if (data) {
        $(me.miniBasketBox).html(data);
      }
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
    $(me.miniBasketBox).html(preloader);

  }
}