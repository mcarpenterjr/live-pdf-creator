<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="libraries/jquery/jquery-3.5.1.js"></script>

    <!-- JS Version of Fontawesome -->
		  <script src="libraries/fa-pro-5.14.0/js/all.min.js" type="text/javascript"></script>

    <!-- BootStrap-3.3.7 -->
      <link rel="stylesheet" href="libraries/bootstrap-4.5.2/dist/css/bootstrap.min.css" />
      <!-- <link rel="stylesheet" href="/lib/bootstrap-4.1.3-dist/css/bootstrap-theme.min.css" /> -->
      <script type="text/javascript" src="libraries/bootstrap-4.5.2/dist/js/bootstrap.min.js"></script>
      
    <script src="libraries/lodash/lodash-4.17.15.js"></script>

    <script src="libraries/tinymce/js/tinymce/tinymce.js"></script>

    <script src="js/index.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css?rev=@@hash" />

  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <h5 class="card-header">Text Editor</h5>
            <div class="card-body">
              <form name="livePdf" target="livePdfOutPut" action="php/pdf.php" method="post">
                <textarea name="editor" id="editor" cols="80">Hello, World!</textarea>
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <h5 class="card-header">PDF Preview</h5>
            <div class="card-body">
              <!-- <textarea></textarea> -->
              <iframe name="livePdfOutPut" height="500" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
