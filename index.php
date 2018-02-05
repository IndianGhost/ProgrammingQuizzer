<?php
#session, cookies, ip adress ...etc will be added
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">>
    <meta name="description" content="">
    <meta name="author" content="BELLAALI Achraf" />

  <!-- 
  //////////////////////////////////////////////////////

  PLATEFORME HTML5
  CONÇUE ET DEVELOPPEE PAR BELLAALI Achraf

  HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by BELLAALI Achraf
    
  Github:     https://www.github.com/IndianGhost
  Email:      achraf.bellaali@gmail.com
  Twitter:    @achraf_bellaali
  LinkedIn:     https://www.linkedin.com/in/bellaali-achraf


  //////////////////////////////////////////////////////
   -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- L'icône de la page à déplacer ultérieurement dans le répertoire image -->
  <link rel="shortcut icon" type="x-icon" href="#">

    <title>Quizzer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Quizzer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#html">HTML</a></li>
            <li><a href="#css">CSS</a></li>
            <li><a href="#javascript">JavaScript</a></li>
            <li class="active"><a href="#">PHP</a></li>
            <li><a href="#python">Python</a></li>
            <li><a href="#sql">SQL</a></li>
            <li><a href="#c">C</a></li>
            <li><a href="#about">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Quizzer</h1>
        <p class="lead">ipsum lorem dolor sit amet ipsum lorem dolor sit amet.<br> ipsum lorem dolor sit ametipsum lorem dolor sit ametipsum lorem dolor sit amet.</p>
      </div>

      <div class="row">
      	<div class="col-lg-offset-4 col-lg-4 col-sm-12 col-xs-12 js-question">
      	</div>
      </div>
      <div class="row">
      	<div class="col-lg-offset-4 col-lg-4 col-sm-12 col-xs-12 js-choix">
      		<input type="checkbox" class="choix" name="ipsum">ipsum lorem dolor sit amet<br/>
      	</div>
      </div>
      <div class="row">
      	<div class="col-lg-offset-4 col-lg-4 col-sm-12 col-xs-12">
      		<input type="submit" name="send" value="Send"/>
      	</div>
      </div>

      <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">ipsum Quizz</h1>
      </div>
      <div id="html"></div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">ipsum Quizz</h1>
      </div>
      <div id="css"></div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">ipsum Quizz</h1>
      </div>
      <div id="javascript"></div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">PHP Quizz</h1>
      </div>
      <div id="php"></div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">ipsum Quizz</h1>
      </div>
      <div id="python"></div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">ipsum Quizz</h1>
      </div>
      <div id="sql"></div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">C Quizz</h1>
      </div>
      <div id="c"></div>
    </div>

    </div><!-- /.container -->

    <div class="panel panel-default" id="about">
      <div class="panel-heading">
        <h1 class="panel-title">About me</h1>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- Read data from json files -->
    <script type="text/javascript" src="js/readData.js"></script>
  </body>
</html>