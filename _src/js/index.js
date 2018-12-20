$(document).ready(function() {
  let doSubmit;

  DoUpdate = function() {
    document.livePdf.submit()
  };

  tinymce.init({
    selector: '#editor',
    plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    init_instance_callback: function(editor) {
      editor.on('Change', _.debounce(DoUpdate, 1750));
    }
  });
});