<?php

  include "database.php";

  if(isset($_POST['submit'])) {

      $name = $_POST['name'];

      $email = $_POST['email'];

      $password = $_POST['password'];

      //$type = ($_POST['type'] === 'publish') ? true : false;// 1 - publish 0 - work

      //$showuser = ($_POST['showuser'] === 'yes') ? true : false; //1 - not show 0 - show

      //$sql = "INSERT INTO `user`(`name`, `email`, `password`, `showuser`, `type`) VALUES ('$name','$email','$password','$showuser','$type')";

      //$sql = "INSERT INTO `user`(`name`, `email`, `password`, `showuser`, `type`) VALUES ('$name','$email','$password','0','0')";

      $sql = "INSERT INTO `user` (`name`, `email`, `password`, `showuser`, `type`) VALUES ('0', '0', '0', '0', '0')";

      $resut = mysqli_query($conn, $sql);
  }
?>

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width">

  <meta name="google-signin-client_id" content="883753607901-0ilsu1hgvic6r2ck6ave0i7ciht90td7.apps.googleusercontent.com.apps.googleusercontent.com">

  <title>SciWiki</title>

  <link rel="icon" href="img/favicon.ico">


<!--   Bootstrap CSS CDN -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<!--   Our CSS -->

  <link href="style.css" rel="stylesheet" type="text/css" />

<!--   Authentication with google -->

  <script src="https://apis.google.com/js/platform.js" async defer></script>

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

            <a class="nav-link active" aria-current="page" href="index.php">Home</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="index.php#services">Services</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="index.php#about">About</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="#">Contact us</a>

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

                    <label for="register" class="form-label">Register</label>

                  </div>

                  <div class="card-body">

                    <form id="registration-form" method="post" action="">

                      <div class="mb-3">

                        <label for="fullname" class="form-label">Full name</label>
                          <input type="text" class="form-control" name='name' id="fullname" placeholder="Enter your full name">

                      </div>

                  <div class="mb-3">

                    <label for="email" class="form-label">E-mail</label>
                      <input type="email" class="form-control" name='email' id="email" placeholder="Enter your e-mail">

                   </div>

                   <div class="mb-3">

                    <label for="password" class="form-label">Password</label>

                    <input type="password" class="form-control" id="password" name='password' placeholder="Enter your password">

                   </div>

                  <div class="mb-3">

                    <label for="confirmpassword" class="form-label">Confirm your Password</label>

                    <input type="password" class="form-control" id="password" placeholder="Confirm password">

                  </div>

                  <!-- <div class="mb-3">

                      <label for="choose" class="form-label">Choose what you want to do:</label>

                      <div class="choose-group">

                        <input type="radio" id="publish" name="type" value="publish">

                        <label for="publish">Publish project</label>



                        <input type="radio" id="work" name="type" value="work">

                        <label for="work">Work</label>

                      </div>

                  </div>

                  <label for="choose" class="form-label">I prefer my personal information (such as names, email, etc.) not to be publicly visible.</label>

                  <input type="checkbox" id="opcao1" name="showuser" value="yes">

                  <label for="opcao1">Yes</label>

                  <br>

                  <input type="checkbox" id="opcao2" name="showuser" value="no">

                  <label for="opcao2">No</label>

                  <br>

                  <br> -->

                <button type="submit" class="btn btn-dark" name="submit">Register</button>

              </form>

                        <!-- <script>

                            document.getElementById("registration-form").addEventListener("submit", async                               function (e) {

                                e.preventDefault();

                                const formData = new FormData(this);

                                const response = await fetch('/register', {

                                    method: 'POST',

                                    body: formData,

                                });



                                if (response.ok) {

                                    alert('Registration successful!');

                                } else {

                                    alert('Registration failed. Please try again.');

                                }

                            });

                        </script> -->

                  </div>

                </div>

                <div class="card">

                  <div class="card-body">

                    <div class="g-signin2" data-onsuccess="onSignIn"></div>

                  </div>

                </div>

            </div>

        </div>

    </div>


<!--   Bootstrap JS CDN -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<!--   Our JS -->

  <script src="script.js"></script>

</body>

</html>