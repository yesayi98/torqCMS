window.optionSystem = {
  content: '*[data-content="true"]',
  valueSelectField: '.value-select',
  valueSelectFieldInput: '.select2-search__field',
  articleOptionRelationDeleter: '.option-relation-deleter',
  response: [],

  init: function () {
    var me = this;
    me.onOptionSelect();
    me.addEventListeners();
  },

  addEventListeners: function () {
    var me = this;

    me.onNonExistOptionChange();
    me.onNonExistValueChange();
    me.onOptionRelationDelete();
  },

  onNonExistValueChange: function () {
    var me = this;

    $(document).on('change', me.valueSelectFieldInput, function() {
      var value = $(this).val();

      if ($(me.valueSelectField).siblings('.select2-container').hasClass('select2-container--open')) {
        console.log(value);
        var data = {};
        data.value = value;
        data.option_id = $(me.valueSelectField).data('option_id');
        var url = $(me.valueSelectField).data('save_option');
        // add new option
        console.log(data);

        var response = me.sendRequest(url, data, true);
        if (response.success) {
          round_success_noti(response.message);
        }else{
          round_error_noti(response.message)
        }
        console.log(response);
        var option = response.option;
        var newOption = $('<option>').val(option.id).text(option.value).attr('data-id', option.id).attr('selected', 'true');
        $(me.valueSelectField).append(newOption).trigger('change');

        $.publish('oprions/valueAddComplated', [me, newOption]);
      }
    });
  },

  onNonExistOptionChange: function () {
    var me = this;

    $(document).on('change', me.valueSelectFieldInput, function() {
      var option = $(this).val();

      if (me.element.siblings('.select2-container').hasClass('select2-container--open')) {
        console.log(option);
        var data = {};
        data.name = option;
        var url = me.element.data('save_option');
        // add new option

        var response = me.sendRequest(url, data, true);
        if (response.success) {
          round_success_noti(response.message);
        }else{
          round_error_noti(response.message)
        }

        var option = response.option;
        var newOption = $('<option>').val(option.id).text(option.name).attr('data-id', option.id).attr('selected', 'true');
        me.element.append(newOption).trigger('change');

        $.publish('oprions/optionAddComplated', [me, newOption]);
      }
    });
  },

  onOptionSelect: function () {
     var me = this;
     var data = {};

     me.element.change(function (event) {

       var selectedOption = me.element.find('option:selected');
       data.id = selectedOption.data('id');
       data.position = selectedOption.data('position');
       data.value = selectedOption.val();

       url = me.element.data('url');

       me.changeSelectFieldValues(me.sendRequest(url, data));

     });

  },

  sendRequest: function (url, data, post = false) {
    var me = this;

    $.ajax({
      url: url,
      data: data,
      method: post?'post':'get',
      dataType: 'json',
      async: false,
      success: function (response) {
        $.publish('oprions/requestComplated', [me, response]);
        me.response = response;
      }
    });

    return me.response;
  },

  onOptionRelationDelete: function() {
    var me = this;

    $(document).on('click', me.articleOptionRelationDeleter, function() {
      var data = $(this).data();
      // console.log($(this).data());
      url = data.url;
      data.url = undefined;

      var response = me.sendRequest(url, data, true);
      if (response.success) {
        round_success_noti(response.message);

        var content = $(this).parents(me.content).first();
        var url = content.data('url');
        $.get(url, function(response) {
          content.html(response);
        });
      }else{
        round_error_noti(response.message)
      }
    });
  },

  changeSelectFieldValues: function (data) {
    var me = this;
    data.values.unshift({value: "Select Value"});
    data.values.forEach((item, i) => {
      var option = $('<option>', {
        value: item.id,
        data: {
          option_id: item.option_id,
          id: item.id,
        },
        html: item.value,
      });

      if (i == 0) {
        $(me.valueSelectField).html(option);
      }else{
        $(me.valueSelectField).append(option);
      }
    });
    $(me.valueSelectField).attr('data-option_id', data.option_id);

  },
}

$.fn.optionSystem = function() {
  window.optionSystem.element = this;
  window.optionSystem.init();
}
jQuery(document).ready(function($) {
  $('.option-select').optionSystem();
});
