window.plugin.emotions = {
    emotionContainer: '.emotion-container',

    init: function () {
      var me = this;

      me.$container = $(me.emotionContainer);
      me.categoryTeaser.parent = me;
      me.categoryTeaser.init();
    },

    categoryTeaser: {
      categorySelector: '*[data-category-sort]',
      content: '*[data-content="true"]',

      init: function () {
        var me = this;

        me.onCategorySelectorClick();
        $(me.categorySelector+'.active').click()
      },

      onCategorySelectorClick: function () {
        var me = this;

        $(me.categorySelector).on('click', function () {
          var url = $(this).data('url');
          var content = $($(this).attr('href')).find(me.content);
          console.log(url);
          $.get(url, function(response, textStatus, jqXHR) {
            content.html(response);

            /*---product column5 activation---*/
            var categoryTeaserSlider =  content.find('.product_carousel');
            if(categoryTeaserSlider.length > 0){
                categoryTeaserSlider.on('changed.owl.carousel initialized.owl.carousel', function (event) {
                    $(event.target).find('.owl-item').removeClass('last').eq(event.item.index + event.page.size - 1).addClass('last')}).owlCarousel({
                    autoplay: true,
                    loop: true,
                    nav: true,
                    autoplay: false,
                    autoplayTimeout: 8000,
                    items: 4,
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
          });
        })
      }
    }
  }
