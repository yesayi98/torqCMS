$(function() {

  var detail = {
    content: '*[data-content="true"]',
    ajaxForm: '*[data-ajaxsend="true"]',

    articleDetail: {
      deleteImage: '.deleteImage',
      categorySelector: '.category-selector',
      addedCategoryContainer: 'added-category-container',
      articleCategories: '.article-categories',
      articleCategoryDeleter: '.added-category.btn-danger',
      itemDeleter: "*[name='delete-detail']",
      detailSaver: "*[name='save-detail']",
      optionAdder: '.addDetailOption',
      optionDeleter: '.deleteDetailOption',

      init: function () {
        var me = this;

        me.onItemSave();
        me.onCategoryAdder();
        me.onArticleCategoryDelete();
        me.onImageDelete();
        me.onItemDelete();
        me.onOpenOptionAdd();
        me.onOpenOptionDelete();
      },

      onOpenOptionDelete: function (form) {
        var me = this;

        $(document).on('click', me.optionDeleter, function () {
          var $parent = $(this).parents('.item');
          var url = $(this).data('url');
          $.get(url, function(response) {
            round_success_noti();
            $.publish('detail/optionDeleted', me);
          });
          $parent.remove();
        })
      },

      onOpenOptionAdd: function () {
        var me = this;
        $.subscribe('detail/formSaved', function (event, arguments) {
          var form = arguments[0];
          if (!form.hasClass('optionsForm')) {
            return 0;
          }
          var message = arguments[1];
          var content = form.find(me.parent.content);
          form.trigger("reset");
          var url = content.data('url');
          $.get(url, function(response) {
            content.html(response);
          });
        });


      },
      onItemSave: function () {
        var me = this;

        $(document).on('click', me.detailSaver, function () {
          $(this).parents(me.parent.content).find('#' + $(this).attr('form')).submit();
        })
      },
      onItemDelete: function () {
        var me = this;

        $(document).on('click', me.itemDeleter, function () {
          var name = $(this).attr('name');
          var selector = $(this).data('name');
          var data = {};
          var url = $(this).parents('form').attr('action');
          if (!url) {
            url = $(this).data('url');
          }

          data[name] = true;
          data[selector] = $(this).data('id');

          $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(response) {
              if (response) {
                $.publish('detail/deleted', [me, response]);
                if(response.success == true){
                  round_success_noti(response.message);
                }else{
                  round_error_noti(response.message);
                }
              }
            }
          })
        })
      },
      onArticleCategoryDelete: function () {
          var me = this;

          $(document).on('click', me.articleCategoryDeleter, function() {
              var ajaxSend = $(this).data('ajaxsend');
              var value = $(this).siblings('input[type="hidden"]').val();
              var text = $(this).siblings('span').text();

              if(ajaxSend && window.route.controller != 'media'){
                me.deleteArticleCategory(value, $(this));
              }
              var option = $('<option>', {
                      'class': ['added'].join(),
                      'text': text,
                      'value': value,
              })
              $(this).parents(me.articleCategories).siblings(me.categorySelector).append(option);
              $(this).parents('.'+me.addedCategoryContainer).remove();
          })

      },

      deleteArticleCategory: function (value, $selector) {
        var me = this;
        var data = {
          article_id: $selector.parents('#detail-form').data('detail'),
          category_id: value,
          deleteArticleCategory: true,
        };
        var url = $selector.data('url');

        $.ajax({
            url: url,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            data: data,
            success: function(response) {
              console.log(response);
            }
          })

      },

      onCategoryAdder: function () {
          var me = this;


          $(me.categorySelector).change(function () {
            event.preventDefault()
            var value = $(this).val();
            var text = $(this).children('option:selected').text();
            if (value > 0) {

              html = me.generateNewCategoryContainer(text, value);
              $(this).siblings(me.articleCategories).append(html);
              $(this).children('option:selected').remove();
            }
          })
      },

      generateNewCategoryContainer: function (text, value) {
        var me = this;
        var button = $('<button>', {
                'class': ['added-category btn btn-danger'].join(),
                'type': 'button',
                'html': [$('<i>',{
                    'class': ['ti-close'].join()
                })]
        })
        var input = $('<input>', {
                'class': ['added-category-input'].join(),
                'name': 'category_id[]',
                'type': 'hidden',
                'value': value,
        })
        var span = $('<span>', {
                'class': ['added-category-text'].join(),
                'text': text,
        })
        var newCategory = $('<div>', {
                'class': [
                    me.addedCategoryContainer
                ].join(' '),
                'html': [ span, input, button],
            });
        return newCategory;
      },
      onImageDelete: function() {
        var me = this;
        $(me.deleteImage).click(function () {
          var url = $(this).data('url');
          var article_id = $(this).data('article');
          var media_id = $(this).parent().find('.detail-image-id').val();

          var image = $(this).parent();
          $.ajax({
            url: url,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            data: {article_id, media_id},
            dataType: 'json',
            success: function(response) {
              if (response.success) {
                image.remove();
              }
            }
          })
        })
      },
    },

    gallery: {
        galleryModal: '.gallery-modal',
        galleryItem: '.gallery-item',
        galleryOpener: '.gallery-opener',
        modalContnent: '',
        albumItem: '.album-item',
        contentParent: '.content-parent',
        fakeImage: ".fake-image",
        addimageInput: ".add-gallery-img",
        inputFileButton: ".inputFileButton",
        addDetailImage: ".addDetailImage",
        pathKeeper: ".pathKeeper",
        dropzoneSelectField: 'select[form="dropzone"]',
        deleteItemSelector: '*[name="deleteImage"]',
        imageContainer: '.image-container',

        init: function () {
          var me = this;

          me.modalContnent = this.parent.content;
          me.openGallery = $(me.galleryOpener);

          me.onGalleryItemClick();
          me.onGalleryOpen();
          me.onImageAlbumSelect();
          me.onAlbumItemClick();
          me.toAddDetailImage();

          $.subscribe('dropzone/filesend/success', function (event, params) {
            $(me.albumItem).first().click();
          })

          if (window.route.controller == 'media') {
            me.onImageDelete();
          }
        },

        onImageDelete: function() {
          var me = this;
          $(me.deleteItemSelector).click(function (event) {
            event.stopPropagation();
            var url = $(this).data('url');
            var media_id = $(this).parent().find('.media-image-id').val();

            var image = $(this).parents(me.imageContainer);
            console.log(image);
            $.ajax({
              url: url,
              method: 'GET',
              type: 'GET', // For jQuery < 1.9
              data: {media_id},
              dataType: 'json',
              success: function(response) {
                if(response.success == true){
                  var message = 'success';
                  if (response.message) {
                    message = response.message
                  };
                  image.remove();
                  round_success_noti(message);
                }else{
                  round_error_noti(response.message);
                }
              }
            })
          })
        },

        onImageAlbumSelect: function () {
          var me = this;

          $(document).on('change', me.dropzoneSelectField, function () {
            // var value = $(this).val();

            // $('#'+$(this).attr('form')).find('imput[type="hidden"]').val(value);
          })
        },

        onAlbumItemClick: function () {
          var me = this;

          $(document).on('click', me.albumItem, function (event) {
            event.preventDefault();

            url = $(this).attr('href');
            var self = $(this);
            $.get(url, function(response, textStatus, jqXHR) {
              self.parents(me.modalContnent).html(response);
              Dropzone.discover();
            });
          })
        },

        addFakeImage:function() {
          var me = this;
          $(me.addimageInput).change(function () {
             me.files = this.files;
             var reader = new FileReader();
             var name=this.value;
             reader.onload = function (e) {
                  $(".fake-image").attr('src', e.target.result);
             };
             reader.readAsDataURL(me.files[0]);

          })
        },
        toAddDetailImage: function () {
          var me = this;
          $(me.addDetailImage).parent("form").submit(function () {
            event.preventDefault();
            var data = $(this).serializeArray();
            data.forEach(function(item, index) {
              var path = $('input[name='+ item.name +']:checked').eq(index).siblings(me.pathKeeper).val();
              item.path = path;
            });
            me.valueChanger(data);
            $(me.galleryModal).modal('hide');
          })
        },

        valueChanger: function (data) {
          var me = this;
          // data pop for remove csrf
          data.pop();
          data.forEach(function(item, index) {
            var img = $('<img>', {
                 'class': [
                     'detail-image'
                 ].join(' '),
                 'src':  item.path,
             });
             var input = $('<input>', {
                 'class': [
                     'detail-image-id'
                 ].join(' '),
                 'val':  item.value,
                 'type': 'hidden',
                 'name': (me.openGallery.parents('.gallery-actions').data('multi') == true)?'media_id[]':'media_id'
             });
            if (me.openGallery.parents('.gallery-actions').data('multi') == true) {
                   var image = $('<div>', {
                           'class': [
                               'image-container'
                           ].join(' '),
                           'html': [img, input],
                       });
             me.openGallery.parents('.gallery-actions').append(image);
           }else{
             me.openGallery.parents('.gallery-actions').find('.image-container:not(.button)').html([img, input]);
           }
           $.publish('detail/gallery/imageAdded', me);
          });
        },
        onGalleryOpen: function () {
          var me = this;
          $(me.galleryModal).on('shown.bs.modal', function () {
            var content = $(this).find(me.modalContnent);
            var url = content.data('url');
            var image = me.galleryImageId?me.galleryImageId:0;
            $.ajax({
              url: url,
              method: 'post',
              data: {image},
              success: function (response) {
                content.html(response);
                Dropzone.discover();
              }
            })
          })
        },
        onGalleryItemClick: function () {
          var me = this;
          $(document).on('click', me.galleryItem, function () {
            me.galleryImageId = $(this).data('id');
          })
        },
    },

    init: function () {
      var me = this;

      me.onAjaxFormSubmit();
      me.gallery.parent = this;
      me.gallery.init();
      me.articleDetail.parent = this;
      me.articleDetail.init();
      me.orderArticle.parent = this;
      me.orderArticle.init();
    },

    orderArticle: {
      detailOpener: '.detail-button',
      detailModal: '.order-detail',

      // init function calls in ready to start
      init: function () {
        var me = this;
        me.$detailOpener = $(me.detailOpener)
        me.onDetailOpenerClick();
      },

      onDetailOpenerClick: function () {
        var me = this;
        var url = '';
        me.$detailOpener.click(function (event) {
          event.preventDefault();
          url = $(this).attr('href');
          $(me.detailModal).modal('show');
        });
        $(me.detailModal).on('shown.bs.modal', function (event) {
          var self = $(this);
          $.get(url, function (response) {
            self.find(me.parent.content).html(response);
            var csrf = $(document).find("input[name='csrf']");
            self.find('form').append(csrf);
          })
        })
      },

    },

    onAjaxFormSubmit: function () {
      var me = this;

      $(document).on('submit', me.ajaxForm, function (event) {
        event.preventDefault();

        var data = $(this).serializeArray();
        var method = $(this).attr('method');
        var url = $(this).attr('action');
        var self = $(this);
        $.ajax({
          url: url,
          method: method,
          data: data,
          dataType: 'json',
          success: function (response) {
            if(response.success == true){
              var message = 'success';
              if (response.message) {
                message = response.message
              };
              round_success_noti(message);
            }else{
              round_error_noti(response.message);
            }
            $.publish('detail/formSaved', [self, response]);
          }
        })
      })
    },

  };

  jQuery(document).ready(function($) {
    detail.init();
  });


});
