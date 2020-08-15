window.plugin.compare = {
  compareButton: '.compare-btn',
  compareDeleteButton: '.compare-delete-btn',
  compareCounter: '.header_compare .item_count',
  method: 'post',

  init: function () {
    var me = this;

    me.onCompareButtonClick();
    me.onCompareButtonDeleterClick();
  },

  onCompareButtonClick: function () {
    var me = this;

    $(document).on('click', me.compareButton, function (event) {
      event.preventDefault();
      var url = $(this).data('url');
      var a = $(this).data('id');
      var method = me.method;
      var data = {};
      data.a = a;
      // send ajax request
      me.ajaxAction(url, method, data);
    });
  },

  onCompareButtonDeleterClick: function () {
    var me = this;

    $(document).on('click', me.compareDeleteButton, function (event) {
      event.preventDefault();
      var url = $(this).data('url');
      var a = $(this).data('id');
      var method = me.method;
      var data = {};
      data.a = a;
      // send ajax request
      var response = me.ajaxAction(url, method, data);
      $(this).parents('tr').remove();

      if ($(this).parents('table').find('tr').length == 1) {
        window.location.reload();
      }
    });
  },

  ajaxAction: function (url, method, data = null) {
    var me = this;
    if (data == null) {
      return;
    }

    $.ajax({
      url: url,
      data: data,
      method: method,
      dataType: 'json',
      success: function(response) {
        if (response.success == true) {
          $(me.compareCounter).html(response.count);
          $.fn.round_success_noti(response.message);
          return response.success;
        }
      }
    })
  },
}
