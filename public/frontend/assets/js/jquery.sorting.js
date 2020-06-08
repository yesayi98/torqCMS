window.plugin.sorting = {
  sortTypeSelector: 'select[name="sortby"]',
  contentWrapper: '*[data-content="true"]',

  init: function () {
    var me = this;
    me.url = removeParam('sort', window.location.href);
    me.onChangeSortType();
  },

  onChangeSortType: function () {
    var me = this;
    var data = {};
    $(document).on('change', me.sortTypeSelector, function () {
      data.sort = $(this).val();

      me.sendRequestWithAjax(data);
    })
  },

  sendRequestWithAjax: function (data) {
    var me = this;

    $.ajax({
      url: me.url,
      method: 'get',
      data: data,
      complete : function(){
        window.history.pushState("", "", this.url);
      },
      success: function (response) {
        if (response) {
          $(me.contentWrapper).html(response);
          $.publish('plugin/paginator/pageLoaded', [me]);
        }
      }
    })
  },


}
function removeParam(key, sourceURL) {
    var rtn = sourceURL.split("?")[0],
        param,
        params_arr = [],
        queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
    if (queryString !== "") {
        params_arr = queryString.split("&");
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("=")[0];
            if (param === key) {
                params_arr.splice(i, 1);
            }
        }
        rtn = rtn + "?" + params_arr.join("&");
    }
    return rtn;
}
