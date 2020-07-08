window.emotionSystem = {
  changerSelector: '.changer',
  componentModal: '.component-modal',
  modalContent: '*[data-content="true"]',

  init: function () {
    var me = this;
    me.changerButton = me.element.find(me.changerSelector);
    me.onComponentPrepareToChange();
    me.onComponentDelete();
  },

  onComponentPrepareToChange: function () {
    var me = this;
    var data = {};
    var url = '';

    me.changerButton.click(function (event) {
      event.preventDefault();
      data.id = $(this).data('value');
      url = $(this).attr('href');
      $(me.componentModal).modal('show');
    })

    $(me.componentModal).on('shown.bs.modal', function (e) {
      $.ajax({
        url: url,
        method: 'get',
        data: data,
        success: function (response) {
          $(me.componentModal).find(me.modalContent).html(response);
        },
      })
    })
  },

  onComponentDelete: function () {
    var me = this;

  }
}

$.fn.emotionSystem = function() {
  window.emotionSystem.element = this;
  window.emotionSystem.init();
}
jQuery(document).ready(function($) {
  $('.emotion-component').emotionSystem();
});
