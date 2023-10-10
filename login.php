<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="google-signin-client_id"
    content="883753607901-0ilsu1hgvic6r2ck6ave0i7ciht90td7.apps.googleusercontent.com.apps.googleusercontent.com">
  <title>SciWiki</title>
  <link rel="icon" href="img/favicon.ico">

  <!--   Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!--   Our CSS -->
  <link href="style.css" rel="stylesheet" type="text/css" />
  <!--   Authentication with google -->
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="script.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-nav-bar py-3">
    <div class="container">
      <a class="navbar-brand" href="index.php">SciWiki</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form onsubmit="redirecionarParaOutraPagina(); return false;">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" required maxlength="20">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" required maxlength="20">
              </div>
              <button type="submit" class="btn btn-light">Login</button>

            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-body">

            <a href="register.php">
                <button type="submit" class="btn btn-dark">Sign Up</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--   Bootstrap JS CDN -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>


  <!--   Our JS -->

</body>

</html>