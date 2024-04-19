<?php
$mainurl="http://localhost/mvc-app/";


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assetscss/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</head>
<body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white p-1">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">MVC Appliaction</a>
              <button class="navbar-toggler btn btn-sm btn-white bg-white text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-grid"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $mainurl;?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link "  href="<?php echo $mainurl;?>/About-us">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $mainurl;?>/price">Price</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $mainurl;?>/category">category</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $mainurl;?>/contact-us">contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    
</body>
</html>