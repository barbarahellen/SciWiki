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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


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
            <a class="nav-link active" aria-current="page" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
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
<!--
  <div class="menu-lateral">
    <p>Categories</p>
    <a href="#">Science</a>
    <a href="#">Technology</a>
    <a href="#">Astronomy</a>
    <a href="#">Health</a>
  </div>
-->



  <div class="container py-5">
    <h1 class="projects-h1">Projects</h1>
    <form class="d-flex mt-5 mb-3">
            <input class="form-control me-2" type="text" placeholder="keywords"/>
            <button class="btn btn-light">Search</button>
    </form>
    <div class="row">
        <!-- Primeiro card -->
        <div class="col-6 mb-3">
            <div class="card">
                <h4 class="card-header">Monarch Health</h4>
                <div class="card-body">
                    <p class="card-text">Monarch Health is a citizen science project in which volunteers sample wild monarch butterflies to help track the spread of a protozoan parasite across North America. Our mission is to understand host-parasite interactions in monarchs and to enhance awareness of monarch biology and conservation through the coupling of citizens and scientists.</p>
                </div>
                <div class="card-footer">
                    <a href="https://monarchparasites.org" class="btn btn-primary" target="_blank">Read more</a>
                   <a href="#" class="btn btn-dark">Register interest</a>
                </div>
            </div>
        </div>

        <!-- Segundo card  -->
        <div class="col-6 mb-3">
            <div class="card">
                <h4 class="card-header" style="font-size: 21.5px;">FluWatch - Become a FluWatcher and help monitor the spread of flu-like illnesses in Canada.</h4>
                <div class="card-body">
                    <p class="card-text">Traditional ways of tracking diseases require a person to see a doctor and get tested. The FluWatchers program captures information on these individuals to get a better sense of illness levels in the community.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.canada.ca/en/public-health/services/diseases/flu-influenza/fluwatcher.php" class="btn btn-primary" target="_blank">Read more</a>
                   <a href="#" class="btn btn-dark">Register interest</a>
                </div>
            </div>
        </div>


    </div>
</div>


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