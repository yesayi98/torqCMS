window.plugin = {};

jQuery(document).ready(function($) {
  $.each(window.plugin, function(key, value) {
    value.init();
  });
});
