<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Main</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <link rel="stylesheet" href="stylesheets/style.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>

  <nav class="nav-color">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?page=home">Startseite</a></li>
        <li><a href="?page=about">Über mich</a></li>
        <li><a href="?page=impressum">Impresssum</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
      <?php
      echo @$content;
       ?>
  </div>


  <footer class="page-footer background">
      <div class="container">
           <div class="row text-center">
               <a href="tel:0677 62023284"><i class="fa fa-mobile fa-5x"></i></a>
               <a href="mailto:kathisag@hotmail.com"><i class="fa fa-envelope-o fa-5x"></i></a>
               <a href="https://github.com/sorrina" target="blank"><i class="fa fa-github fa-5x"></i></a>

           </div>
       </div>
         <div class="footer-copyright pink">
           <div class="container">
           © 2016 Copyright Text
           </div>
         </div>
       </footer>



</body>
</html>
