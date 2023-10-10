<!DOCTYPE html>

<html>
<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width">

  <title>SciWiki</title>

  <link rel="icon" href="img/favicon.ico">


<!--   Bootstrap CSS CDN -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<!--   Our CSS -->

  <link href="style.css" rel="stylesheet" type="text/css" />

</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-nav-bar py-3">

    <div class="container">

      <a class="navbar-brand" href="index.php">SciWiki</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="projeto.php">Projects</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="register-project.php">Share your project</a>
          </li>

          </li>

        </ul>

      </div>

    </div>

</nav>



  <section class="bg-custom-color-one text-light p-5 text-center text-sm-start" id="home">

    <div class="container py-5">

      <div class="d-sm-flex align-items-center justify-content-between py-5">

        <div>

          <h1>Marketplace for Open <br>Science Projects</h1>

          <h3 class="text-one">Contribute with Open Source Project</h3>

          <p class="lead my-4">We will help people who are looking for open-source projects to work on and project creators who need skilled contributors to find each other and communicate
          </p>

          <a class="btn btn-light" href="login.php" role="button">Login</a>

          <a class="btn btn-dark" href="cadastro.php" role="button">Sign up</a>

        </div>

        <a href="#">
          <img src="img/imagem.svg" class="img-fluid" width="1000">
        </a>

      </div>

    </div>

  </section>



  <section class="p-5" id="services">

    <div class="container py-5">

      <div class="row text-center g-4">

        <div class="col-md">

          <div class="card bg-dark text-light p-5">

            <div class="card-body text-center">

              <div class="h1 mb-3">

                <i class="bi bi-share-fill"></i>

              </div>

              <h3 class="card-title mb-3">Open Source</h3>

              <p class="card-text">Knowledge is shared freely. Every contribution makes a difference. If you're a developer, designer, scientist, or an enthusiastic, there's a place for you here</p>

            </div>

          </div>

        </div>

        <div class="col-md">

          <div class="card bg-dark text-light p-5">

            <div class="card-body text-center">

              <div class="h1 mb-3">

                <i class="bi bi-people-fill"></i>

              </div>

              <h3 class="card-title mb-3">Networking</h3>

              <p class="card-text">When participating in open source projects, you have the chance to connect with experienced professionals and experts in different areas.</p>
            </div>
          </div>
        </div>

        <div class="col-md">

          <div class="card bg-dark text-light p-5">

            <div class="card-body text-center">

              <div class="h1 mb-3">

                <i class="bi bi-laptop"></i>

              </div>

              <h3 class="card-title mb-3">Develop</h3>

              <p class="card-text">Welcome to the epicenter of innovation. We embrace the mission of open source development and invite you to join us on this exciting journey.</p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <section class="bg-custom-color-one p-5" id="about">

    <div class="container py-5">

      <div class="row justify-content-between align-items-center">

        <div class="col-md">

          <a href="#"><img src="img/img-about.svg" class="img-fluid"></a>

        </div>

        <div class="col-md p-5">

          <h2>About the project</h2>

          <p>Our mission is to catalyze change through collaboration. We believe that the best solutions emerge when minds come together, share knowledge and work together. By creating a space dedicated to open source projects, we want to empower individuals to contribute their talent to meaningful causes, positively impacting the world.</p>
        </div>

      </div>

    </div>

  </section>

  <footer class="p-3 bg-custom-footer text-white text-center position-relative">

    <div class="container">

      <a class="footer-link" href="https://www.spaceappschallenge.org/2023/challenges/a-marketplace-for-open-science-projects/?tab=details">NASA International Space Apps Challenge</a>

      <p class="mb-0"> Developed by Lovelaces Team 🤍</p>

    </div>

    <a href="https://storyset.com/online">Online illustrations by Storyset</a>

  </footer>


<!--   Bootstrap JS CDN -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


<!--   Our JS -->

  <script src="script.js"></script>

</body>

</html>