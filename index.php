<?php
$server = $_SERVER['REMOTE_ADDR'];
if ($server == '::1' || $server == 'localhost') {
  $root = '';
} else {
  $root = '/new_site/';  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dhiraj Bodicherla</title>

    <link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="<?=$root?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=$root?>css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
     <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">DB</h3>
              <ul class="nav masthead-nav">
                <li><a href="/resume/DhirajBodicherla_Resume.pdf" target="_blank">Resume</a></li>
                <li class="active"><a href="#">Work</a></li>
                <li><a href="mailto:dhiraj@live.in">Contact</a></li>
              </ul>
            </div>
          </div>

          <div class="mastbody">
            <div class="content">
              <section>
                <video id="slingo_presentation" preload controls>
                 <source src="static/Slingo_Presentation.mov"></source>
                 <source src="static/Slingo_Presentation.webm"></source>
                </video>
              </section>
              <section class="game">
                <img src="static/games/meltdown.png" />
                <div class="play">
                  <a class="content" href="/games/meltdown/" target="_blank">Play</a>
                </div>
              </section>
            </div>
          </div>

          <div class="mastfoot">
            <div class="inner">
              © 2014 <span class="name">Dhiraj Bodicherla</span>. All rights reserved.
            </div>
          </div>

        </div>

      </div>

    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?=$root?>js/bootstrap.min.js"></script>
    <script src="<?=$root?>js/script.js"></script>
  </body>
</html>
