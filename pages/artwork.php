  <style type="text/css">
      #project {
        margin-bottom: 100px;
      }
      #tabmenu {
        margin-bottom: 50px; 
        text-align: center; 
        display: block; 
        margin-right: auto; 
        margin-left: auto; 
        width: 80%; 
        color: rgba(255, 255, 255, 0.25);
      }
      #tabmenu a {
        transition: 0.3s;
      }
      #tabmenu a:hover {
        color: rgba(255, 255, 255, 0.5);
        transform: scale(1.03);
      }
      #tabmenu a.active {
        transform: scale(1.03);
        color: white;
        border-bottom: 1px solid white;
      }
    </style>
  <body>
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
     <div class="container" id="project">
      <div>
        <h2><b> Artwork </b></h2>
      </div>
      <div class="row">
        <div class="col-sm-6" id="project-list">
          <a class="image" href="index.php?p=artwork-1">
            <img src="img/project-1.png">
          </a>
        </div>
        <div class="col-sm-6" id="project-list">
          <a class="image" href="">
            <img src="img/project-2.png">
          </a>
        </div>
        <div class="col-sm-6" id="project-list">
          <a class="image" href="">
            <img src="img/project-4.png">
          </a>
        </div>
        <div class="col-sm-6" id="project-list">
          <a class="image" href="">
            <img src="img/project-3.png">
          </a>
        </div>
      </div>
    </div>
  </body>