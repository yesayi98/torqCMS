window.plugin.loader = {
  loaderClass: 'loader',
  contentSelector: '*[data-content="true"]',

  init: function () {
    var me = this;

    me.loaderSelector = "."+me.loaderClass;
  },

  // add loader html to *[data-content="true"]
  addLoaderToContent: function (content) {
    var me = this;
    var loaderInner =  $('<div/>', {
                    'class': 'lds-ring',
                    'html': [$('<div/>'), $('<div/>'), $('<div/>')],
                  });
    var loader = $('<div/>', {
                    'class': [me.loaderClass].join(),
                    'html': loaderInner,
                  });
    content.append(loader);
  },

  // delete loader html from *[data-content="true"]
  deleteLoaderFromContent: function (content) {
    var me = this;

    content.find(me.loaderSelector).remove();
  },

}
