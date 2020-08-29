window.plugin.sorting = {
  sortTypeSelector: 'select[name="sortby"]',
  filterForm: '#filter_form',
  contentWrapper: '*[data-content="true"]',

  init: function () {
    var me = this;

    me.url = new URL(window.location.href);
    me.onChangeSortType();
  },

  onChangeSortType: function () {
    var me = this;
    var data = {};
    $(document).on('change', me.sortTypeSelector, function () {
      $('#sorting_input').val($(this).val());
      $(me.filterForm).submit();
    })
  },

}
