window.plugin.wishlist = {
  wishlistAdderSelector: '*[data-wishlist="true"]',
  wishlistOnDetailPage: '.wishlist-button[data-wishlist="true"]',
  wishlistNote: '.header_wishlist .item_count',

  init: function () {
    var me = this;

    me.onWishlistAdderClickOnDetailPage();
    me.onWishlistAdderClick();
  },

  onWishlistAdderClickOnDetailPage: function () {
    var me = this;

    var url = '';
    $(document).on('click', me.wishlistOnDetailPage, function () {
      event.preventDefault();
      event.stopImmediatePropagation();
      $(this).find('i').toggleClass('fa-heart').toggleClass('fa-heart-o')
      if (!($(this).hasClass('wished'))) {
        url = $(this).attr('href');
        $(this).addClass('wished');
        $.fn.round_success_noti(window.wishlistMessage);
      }else{
        url = $(this).attr('href').replace('add', 'delete');
        $(this).removeClass('wished');
      }
      console.log(url);

      me.sendRequestWithAjax(url);
    })
  },
  onWishlistAdderClick: function () {
    var me = this;

    if (window.route.controller === 'detail') {
      return;
    }

    $(document).on('click', me.wishlistAdderSelector, function () {
      event.preventDefault();
      var $thisProduct = $(this).parents('.product-item').data('productid');
      var url = $(this).attr('href');

      if (!($(this).parents('.wishlist').hasClass('wished'))) {
        $('body').find('*[data-productid="'+$thisProduct+'"]')
                 .find('.wishlist')
                 .addClass('wished');
      }else{
        url = url.replace('add', 'delete');
        $('body').find('*[data-productid="'+$thisProduct+'"]')
                 .find('.wishlist')
                 .removeClass('wished');
      }


      me.sendRequestWithAjax(url)
    })
  },

  onRemoveWishlistItem: function () {
    var me = this;

    var url = $('.pro-remove').find('a').attr();
  },

  sendRequestWithAjax: function (url) {
    var me = this;

    $.get( url, function( data ) {
        if (data) {
          $(me.wishlistNote).html(parseInt(data));

          if (!$(me.wishlistNote).is(":visible")) {
            $(me.wishlistNote).show();
          }
          $('#wishlistMessage').removeClass("hidden").promise().done(function () {
            setInterval(function () {
              $('#wishlistMessage').addClass('hidden');
            }, 6000);
        })
      };
    })

  },
}
