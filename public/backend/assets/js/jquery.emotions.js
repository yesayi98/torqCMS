window.emotionSystem = {
  changerSelector: '.changer',
  deleterSelector: '.deleter',
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
          me.addEventListeners();
        },
      })
    })
  },

  addEventListeners: function () {
    var me = this;

    $('#component-multi-select').multiSelect({
        selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        afterInit: function (ms) {
            var that = this,
                $selectableSearch = that.$selectableUl.prev(),
                $selectionSearch = that.$selectionUl.prev(),
                selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function (e) {
                    if (e.which === 40) {
                        that.$selectableUl.focus();
                        return false;
                    }
                });

            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function (e) {
                    if (e.which == 40) {
                        that.$selectionUl.focus();
                        return false;
                    }
                });
        },
        afterSelect: function () {
            this.qs1.cache();
            this.qs2.cache();
        },
        afterDeselect: function () {
            this.qs1.cache();
            this.qs2.cache();
        }
    });
  },

  onComponentDelete: function () {
    var me = this;
    var url;
    var data = {};
    $(document).on('click', me.deleterSelector, function (event) {
      event.preventDefault();
      url = $(this).attr('href');
      data.id = $(this).data('value');

      $.ajax({
        url: url,
        type: 'get',
        data: data,
        dataType: 'json',
        success: function (response) {
          if (response.success == true) {
            window.location.reload();
          }
        }
      })
    })
  }
}

$.fn.emotionSystem = function() {
  window.emotionSystem.element = this;
  window.emotionSystem.init();
}
jQuery(document).ready(function($) {
  $('.emotion-component').emotionSystem();
});
