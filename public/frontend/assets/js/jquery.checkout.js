window.plugin.chechout = {

  regionSelector: '.region-select',
  regionSelectField: 'select[name="region"]',
  citySelectField: 'select[name="city"]',
  paymentMethodSelector: '*[role="presentation"] .cart-btn',
  formSubmiter:'.submit-form',
  checkoutForm:'#checkoutForm',


  init: function () {
    var me = this;
    me.url = $(me.regionSelector).data('url');
    me.$regionSelector = $(me.regionSelector);
    me.$paymentMethodSelector = $(me.paymentMethodSelector);
    me.totalPrice = parseFloat($('#totalPrice').val());
    me.$formSubmiter = $(me.formSubmiter);
    me.onRegionCityChange();
    me.onPaymentSelect();
    me.onFormSubmiterClick();
    me.onFormSubmit();
  },

  onFormSubmiterClick: function () {
    var me = this;
    me.$formSubmiter.click(function () {
      var formId = $(this).attr('form');
      var form = $('#'+formId);
      form.submit();
    })
  },

  onFormSubmit: function () {
    var me = this;

    $(me.checkoutForm).submit(function (event) {
      if(!$(this).data('ajax')){
        return;
      }
      event.stopImmediatePropagation();
      event.preventDefault();
      var data = $(this).serializeArray();
      var url = $(this).attr('action');
      $.ajax({
        url: url,
        data: data,
        method: 'post',
        success: function (response) {
          if (response.search('http') >= 0) {
            window.location.href = response;
            return;
          }

          me.orderSuccess = response;
         $(document).bind('checkout/formSubmited', function(callback) {
           callback();
         });
        },
      })
    })
  },

  onPaymentSelect: function () {
    var me = this;

    me.$paymentMethodSelector.click(function () {
      $(this).find('input').prop({'checked': true});
    });
  },

  onRegionCityChange: function () {
    var me = this;

    me.getRegionCities(me.$regionSelector.find(me.regionSelectField).find('option[selected]').val());

    me.$regionSelector.find(me.regionSelectField).change(function () {
      me.getRegionCities($(this).val());
    })
  },


  getRegionCities: function (value) {
    var me = this;
    me.regionId = value;

    console.log(me.regionId);

    me.getWithAjax();
  },

  getWithAjax: function () {
    var me = this;
    $.ajax({
      url: me.url,
      method: 'post',
      data: {region_id: me.regionId},
      dataType: 'JSON',
      success: function (result) {
        me.cities = result;

        me.changeCurrentCities();
      }
    })
  },

  changeCurrentCities: function () {
    var me = this;
    me.$regionSelector.find(me.citySelectField).find('option').remove();

    $.each(me.cities, function(index, item) {
      option = $('<option>', {
              'value':  item.id,
              'data-value': item.price,
              'html': item.name,
          });
      me.$regionSelector.find(me.citySelectField).append(option);
      console.log(me.$regionSelector.find(me.citySelectField).append(option));
    });

    me.onCityChange();
    $(me.citySelectField).find('option').eq(1).click();
  },

  onCityChange: function () {
    var me = this;
    $(me.citySelectField).find('option').click(function () {
        $('#shipping').val($(this).data('value'));
        $('*[for="shipping"] span').html($(this).data('value'));
        var total = me.totalPrice + parseFloat($(this).data('value'));

        $('#totalPrice').val(total);
        $('label[for="totalPrice"] span').html(total);
    });
    $(me.citySelectField).find('option').eq(0).click();
    $(me.citySelectField).change(function () {
      $(this).find('option[value="'+$(this).val()+'"]').click();
    });
  },
}
