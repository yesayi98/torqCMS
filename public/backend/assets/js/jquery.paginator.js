var paginator = {
  pagingSelector: ".pagination a",
  contentSelector: '*[data-content="true"]',

  init: function () {
    var me = this;


    me.onPaginatorClick();
  },
  onPaginatorClick: function () {
    var me = this;

    $(document).on('click', me.pagingSelector, function (event) {
      if ($(this).parents(me.contentSelector).length == 0) {
        return;
      }
      event.preventDefault();
      var dataUrl = $(this).parents('.pagination').parents(me.contentSelector).first().data('url');
      var url = dataUrl ? dataUrl : window.location.href ;

      var hrefParams = new URLSearchParams($(this).attr('href'));
      var page = hrefParams.get('page');
      var limit = hrefParams.get('limit');
      var currentUrl = new URL(url);
      currentUrl.searchParams.set('page', page);
      currentUrl.searchParams.set('limit', limit);
      url = currentUrl.toString();

      // window.history.pushState( null , document.title, url);


      me.getCurrentPage(url, this);
    })
  },

  getCurrentPage: function (url, self) {
    var me = this;
    if (!url) {
      return ;
    }
    $.get(url, function(data) {
      $(self).parents(me.contentSelector).first().html(data);
    });
  }
}

jQuery(document).ready(function($) {
  paginator.init();
});
