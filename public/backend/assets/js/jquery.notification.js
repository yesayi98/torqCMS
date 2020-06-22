window.notificationSystem = {
  notified: 'notified',
  badgeClass: 'badge badge-danger badge-up',
  url: window.location.origin + "/backend/notifications/",
  badge: '.badge',
  timeout: 10000,
  init: function () {
    var me = this;

    me.addNotificationBadge();
    me.getNotification()
    me.setTimeOutCall();
  },

  addNotificationBadge: function () {
    var me = this;
    var badge = $("<span>", {
      "class": me.badgeClass,
      "html": "0",
    });

    me.element.append(badge);
  },

  getNotification: function () {
    var me = this;
    var action = me.element.data('action');

    url = me.url + action;

    $.ajax({
      url: url,
      method: "POST",
      dataType: "JSON",
      success: function (response) {
        if (response.count > 0) {
          me.element.find(me.badge).html(response.count);
        }
      },
    })
  },

  setTimeOutCall: function () {
    var me = this;

    setInterval(function(){
      me.getNotification()
    }, me.timeout);
  },
}

$.fn.notificationSystem = function() {
  window.notificationSystem.element = this;
  window.notificationSystem.init();
}
jQuery(document).ready(function($) {
  $('.orders').notificationSystem();
});
