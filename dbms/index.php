<!doctype html>
<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll Reveal CDN-->
    <script src = "https://unpkg.com/scrollreveal"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">



    <title>Hello, world!</title>

  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="#">TASC</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Sign In</a>
        </li>        
    
      </ul>
  
    </div>

  </nav>

  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->

    <ul class="carousel-indicators">

      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>

    </ul>
  
    <!-- The slideshow -->

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="images/home_background1.jpg" alt="" width="1100" height="500">
      </div>

      <div class="carousel-item">
        <img src="images/home_background2.jpg" alt="" width="1100" height="500">
      </div>

      <div class="carousel-item">
        <img src="images/home_background3.jpg" alt="" width="1100" height="500">
      </div>

    </div>

      
    <!-- Left and right controls -->

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>

    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>

  <section class="my-5">

    <div class="py-5">
      <h2 class="text-center">What does TASC do?</h2>
    </div>

    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/image1.jpg" class="img-fluid aboutimg">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-5">For Teachers</h2>
          <p class="py-3">
            It provides easy environment for teachers to upload study materials
            and assignment. Teachers can also keep the record of the student's 
            attendance and performance in each subject. It is an easy way to maintain
            the record. They can notify and give details to students about 
            upcoming events organized in college. 
          </p>
          <a href="#" class="btn btn-success"> Create Account </a>
      </div>   

    </div>
  </section>

  <section class="my-5">

    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-5">For Students</h2>
          <p class="py-3">
            Students can easily download the assignments and study materials 
            uploaded by the teacher. Students can check their own performances 
            and improve themselves. They can also check the upcoming college events.
          </p>
          <a href="#" class="btn btn-success"> Create Account </a>
      </div>   

      <div class="col-lg-6 col-md-6 col-12">
          <img src="images/image1.jpg" class="img-fluid aboutimg">
        </div>

    </div>
  </section>


  <section class="my-5">

    <div class="py-4">
      <h2 class="text-center">Services</h2>
    </div>

    <div class="services">

      <div class="sr-items">
        <i class="fas fa-chart-line"></i>
        <h4>Attendance</h4>
        <p>
          Check and maitain student's attendance and help them improve 
          to gain attentiveness in lectures.
        </p>
      </div>

      <div class="sr-items">
        <i class="fas fa-file"></i>
        <h4>Study Materials</h4>
        <p>
          Upload and download files faster and easier.
        </p>
      </div>
    
      <div class="sr-items">
        <i class="fas fa-exclamation-triangle"></i>
        <h4>Notification</h4>
        <p>
          Get notified with the pending tasks or about the upcoming events or news
          of the college.
        </p>
      </div>
    
  </section>

  <Section class="my-5">

    <div class="py-5">
      <h2 class="text-center"> Be in Touch.</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">

        <div class="form-group">
          <label> Name </label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
          <label> Email Id </label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
          <label> Mobile </label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
          <label> Comments </label>
          <textarea class="form-control"></textarea>
        </div>

        <div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

      </form>
  
  </Section>

  <!-- Footer -->
  <footer class="footer">
    <div class="inner-footer">

      <div class="quick-links">
        <ul>
          <li class="quick-items"><a href="#"> Home </a></li>
          <li class="quick-items"><a href="#"> Contact Us </a></li>
          <li class="quick-items"><a href="#"> About Us </a></li>
          <li class="quick-items"><a href="#"> Help </a></li>
        </ul>
      </div>

      <div class="social">
      <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
      </div>



    </div>

    <div class="outer-footer">
      Copyright &copy; TASC 2020 All Rights Reserved.
    </div>
  </footer>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>