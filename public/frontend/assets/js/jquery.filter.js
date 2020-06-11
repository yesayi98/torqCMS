window.plugin.filter = {

  filterForm: '#filter_form',
  priceRangeSliderSubmiter: '*[data-rangesubmiter="true"]',
  filterInput: '*[data-filter="true"]',
  contentWrapper: '*[data-content="true"]',

  init: function () {
    var me = this;

    me.$filterForm = $(me.filterForm);
    me.onFilterInputChange();
    me.onRangeSubmiterClick();
    me.onFilterFormSubmit();
  },

  onRangeSubmiterClick: function () {
    var me = this;

    $(me.priceRangeSliderSubmiter).click(function () {
      event.preventDefault();
      me.$filterForm.submit();
    });
  },

  onFilterInputChange: function () {
    var me = this;

    $(me.filterInput).change(function () {
      me.$filterForm.submit();
    });
  },

  onFilterFormSubmit: function () {
    var me = this;

    me.$filterForm.submit(function (event) {
      event.preventDefault();

      me.data = $(this).serializeArray();
      me.url = $(this).attr('action');
      me.sendAjaxRequest(me.data, me.url);
    });
  },

  sendAjaxRequest: function (data, url) {
    var me = this;

    var loader = window.plugin.loader;
    loader.addLoaderToContent($(me.contentWrapper));
    $.get(url, data, function(response) {
      if (response) {
        window.history.pushState("", "", this.url);
        $(me.contentWrapper).html(response);
        $.publish('plugin/paginator/pageLoaded', [me, self]);
      }
    })
  }


}
