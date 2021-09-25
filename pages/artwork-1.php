  <style type="text/css">
   
    </style>
    <link href="css/arlosite2.css" rel="stylesheet">
<body>
  <div class="artwork-detail">
  <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Arlosite</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="topnav-right" id="navbar-menu">
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php?p=home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="index.php?p=artwork">Artwork</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>                
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="navbar-mobile">
      <a href="index.php?p=home">Home</a>
      <a href="index.php?p=artwork" class="actives">Artwork</a>
      <a href="#contact">Contact</a>
    </div>
<!-- Images used to open the lightbox -->
<div class="container" id="content-page">
  <div class="back" style="color: white;">
    <a onclick="goBack()">&#10094; Back</a>
  </div>
<div class="content">
<h2><b>E-Learning Mobile App Design</b></h2>
        
<img id="myImg" src="img/project-1.png">
<div id="myModal1" class="modal1">
  <span class="close1">&times;</span>
  <img class="modal-content1" id="img01">
  <div id="caption1"></div>
</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
      </div>

      <div class="row galeri">
        <div class="col-sm-3 gallery" id="project-list">
          <a class="image">
            <img src="img/project-1.png" onclick="openModal();currentSlide(1)">
          </a>
        </div>
        <div class="col-sm-3 gallery" id="project-list">
          <a class="image">
            <img src="img/project-2.png" onclick="openModal();currentSlide(2)">
          </a>
        </div>
        <div class="col-sm-3 gallery" id="project-list">
          <a class="image">
            <img src="img/project-3.png" onclick="openModal();currentSlide(3)">
          </a>
        </div>
        <div class="col-sm-3 gallery" id="project-list">
          <a class="image">
            <img src="img/project-4.png" onclick="openModal();currentSlide(4)">
          </a>
        </div>
      </div>

      <!-- <div class="row galeri">
        <div class="col-sm-3">
        <div class="column gallery">
          <img src="img/project-1.png" onclick="openModal();currentSlide(1)">
        </div>
        </div>
        <div class="col-sm-3">
        <div class="column gallery">
          <img src="img/project-2.png" onclick="openModal();currentSlide(2)">
        </div>
        </div>
        <div class="col-sm-3">
        <div class="column gallery">
          <img src="img/project-3.png" onclick="openModal();currentSlide(3)">
        </div>
        </div>
        <div class="col-sm-3">
        <div class="column gallery">
          <img src="img/project-4.png" onclick="openModal();currentSlide(4)">
        </div>
      </div>
      </div>
    </div> -->

    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="img/project-1.png" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="img/project-2.png" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="img/project-3.png" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="img/project-4.png" style="width:100%">
        </div>

        <!-- Next/previous controls -->
        <div class="tombol">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
        <!-- Caption text -->
        <div class="caption-container">
          <p id="caption"></p>
        </div>

        <!-- Thumbnail image controls -->
        <div class="container">
        <div class="row">
          <div class="column">
            <img class="demo" src="img/project-1.png" onclick="currentSlide(1)" alt="Nature">
          </div>

          <div class="column">
            <img class="demo" src="img/project-2.png" onclick="currentSlide(2)" alt="Snow">
          </div>

          <div class="column">
            <img class="demo" src="img/project-3.png" onclick="currentSlide(3)" alt="Mountains">
          </div>

          <div class="column">
            <img class="demo" src="img/project-4.png" onclick="currentSlide(4)" alt="Lights">
          </div>
        </div>
      </div>
      </div>
    </div>
</div>
    <script type="text/javascript">
      // Open the Modal
      function openModal() {
        document.getElementById("myModal").style.display = "block";
      }

      // Close the Modal
      function closeModal() {
        document.getElementById("myModal").style.display = "none";
      }

      var slideIndex = 1;
      showSlides(slideIndex);

      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      // Thumbnail image controls
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }

      function goBack() {
        window.history.back();
      }

      // Get the modal
      var modal = document.getElementById("myModal1");

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById("myImg");
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption1");
      img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close1")[0];

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() { 
        modal.style.display = "none";
      }
    </script>

  </body>
</html>
