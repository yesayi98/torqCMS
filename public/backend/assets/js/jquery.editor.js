$(function() {
  $.descEditor = function () {
    var CKEDITOR = ClassicEditor;
    // CKEDITOR.config.allowedContent = true;
    $("textarea[name='description']").each(function(){
      var editor;
      CKEDITOR.create(this)
              .then( newEditor => {
                  editor = newEditor;
              })
              .catch( error => {
                  console.error( error );
              } );
              var self = $(this);
      $(this).parents('form').submit(function () {
        self.html(editor.getData());
      });
    });
    $("*[data-description='true']").each(function(){
      CKEDITOR.create(this)
              .catch( error => {
                  console.error( error );
              } );
    });
      $('.search-select').select2();
      $('.search-select').on('select2:open', function (event) {
        $('.select2-container').css({'max-width': $('.select2-container').outerWidth()+'px'})
      });

      var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
      $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
       });
  }
  $.descEditor();

  $.subscribe('detail/loaded', function(self) {
    $.descEditor();
  });
});
