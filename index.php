<!DOCTYPE html>
<!--<!doctype html>-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Arlosite</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">    

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Link to the file hosted on your server, -->
    <link rel="stylesheet" href="path-to-the-file/splide.min.css">

    <!-- or the one installed in node_modules directory, -->
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">

    <!-- or the reference on CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/arlosite.css" rel="stylesheet">

  </head>
  <body>
    
    <?php
    $pages_dir = 'pages';
    if(!empty($_GET['p'])){
      $pages = scandir($pages_dir, 0);
      unset($pages[0], $pages[1]);
 
      $p = $_GET['p'];
      if(in_array($p.'.php', $pages)){
        include($pages_dir.'/'.$p.'.php');
      } else {
        echo 'Halaman tidak ditemukan! :(';
      }
    } else {
      include($pages_dir.'/home.php');
    }
    ?>
    

    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/splide/splide.min.js"></script>
    <!-- <div class="container"><hr></div> -->
    <!-- FOOTER -->
    <div id="footer">
      <footer>
      <h3><b>Get in touch</b></h3>
      <div class="row" id="sosmed">
          <a href=""><img src="img/mail.png"></a>
          <a href=""><img src="img/wa.png"></a>
          <a href=""><img src="img/linkedin.png"></a>
          <a href=""><img src="img/yt.png"></a>
          <a href=""><img src="img/ig.png"></a>
          <a href=""><img src="img/dribbble.png"></a>
      </div>
      <p style="opacity: 50%">&copy; Arlosite</p>
    </footer> 
    </div>


    <script type="text/javascript">
      window.onscroll = function() {scrollFunction()};
        
      function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
          document.getElementById("navbar").style.padding = "20px 40px";
          document.getElementById("navbar").style.backgroundColor = "rgba( 20, 20, 50, 0.50 )";
          document.getElementById("navbar").style.backdropFilter = "blur( 25px )";
          document.getElementById("navbar").style.color = "#ffff";
          document.getElementById("logo").style.fontSize = "25px";
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("navbar").style.padding = "40px";
          document.getElementById("navbar").style.backgroundColor = "transparent";
          document.getElementById("logo").style.fontSize = "35px";
          document.getElementById("myBtn").style.display = "hidden";
        }
      }

      document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#image-slider', {
          type        : 'loop',
          perPage     : 1,
          autoplay    : true,
          pauseOnHover: false,
        }).mount();
      });
    </script>


  </body>
</html>
