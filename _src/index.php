<?php
  require $_SERVER['DOCUMENT_ROOT'].'/inc/smtlogin-mc-test.php';
?>

<html>
  <head>
    <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="/lib/jquery/jquery-3.1.1.min.js"></script>

    <!-- JS Version of Fontawesome -->
		  <script src="/lib/fontawesome-pro-5.2.0/js/all.min.js" type="text/javascript"></script>

    <!-- BootStrap-3.3.7 -->
      <link rel="stylesheet" href="/lib/bootstrap-4.1.3-dist/css/bootstrap.min.css" />
      <!-- <link rel="stylesheet" href="/lib/bootstrap-4.1.3-dist/css/bootstrap-theme.min.css" /> -->
      <script type="text/javascript" src="/lib/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

    <script src="../node_modules/tinymce/tinymce.js"></script>

    <script src="js/index.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css?rev=@@hash" />

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
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
              <iframe name="livePdfOutPut" height="500" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
