$(function() {
  var category = {
    category: '.category',
    content: '*[data-content="true"]',
    detail: '*[data-detail="true"]',
    categoryList: '.category-list',

    init: function () {
      var me = this;

      me.registerEventListener();
      me.onCategoryClick();
    },


    registerEventListener: function () {
        var me = this;

        $.subscribe('detail/deleted', function (event, arguments) {
          var object = arguments[0];
          var response = arguments[1];
          me.onCategoryDelete(object, response);
        })
        $.subscribe('detail/formSaved', function (event, arguments) {
          var object = arguments[0];
          var response = arguments[1];
          me.onCategorySaved(object, response);

        })
    },

    onCategoryDelete: function (object, response) {
      var me = this;

      $(me.detail).html(response);

      $.publish('detail/loaded', $(me.detail));
      me.getCategoryList();

    },

    onCategorySaved: function (object, response) {
      var me = this;

      me.getCategoryList();
    },

    getCategoryList: function () {
      var me = this;

      $.get($(me.categoryList).data('url'), function(response, textStatus, jqXHR) {
        $(me.categoryList).html(response);

        $.publish('categories/categoryList/updated', me);
      });
    },

    onCategoryClick: function () {
      var me = this;

      $(document).on('click', me.category, function (event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var self = $(this);
        $.preloader.createPreloader(self.parents(me.content).find(me.detail));
        $.get(url, function(response) {
          self.parents(me.content).find(me.detail).html(response);

          $.publish('detail/loaded', self);
        });
      })
    }
  }

  $(document).ready(function() {
    category.init();
  });

});
