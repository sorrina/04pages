<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Main</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <link rel="stylesheet" href="stylesheets/style.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
           <div class="row">

               <i class="medium material-icons">phone</i>
               <i class="medium material-icons">phone</i>

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
