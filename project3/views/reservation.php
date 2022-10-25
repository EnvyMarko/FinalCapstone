<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Waze: Reservation</title>

    <!-- BS -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8fe3227aac.js" crossorigin="anonymous"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- custom google font -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=EB+Garamond&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

<!-- <div style="height:10vh"></div> -->

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php"><img class="mx-3 flip-y" src="../public/img/logo.png"><span>Park</span> Waze</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                <a class="nav-link" href="../views/reservation.php">Park</a>
                <a class="nav-link" href="../views/about.php">About</a>
                <a class="nav-link" href="../views/testimonial.php">Testimonial</a>
                <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#login_modal">Login</a>
            </div>
        </div>
    </div>
</nav>


<!-- Login Modal -->
<div class="modal fade" id="login_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h1 class="modal-title fs-5 text-center w-100" id="login_modalLabel">USER LOGIN</h1>
        <button type="button" class="btn-close border border-dark" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div>
                <!-- <label class="form-label" for="login_username">User Name:</label> -->
                <input id="login_username" type="text"  class="form-control" name="lastname" placeholder="User Name"/>
                
                <!-- <label class="form-label" for="login_password">User Name:</label> -->
                <input id="login_password" type="text"  class="form-control my-4" name="lastname" placeholder="Password"/>


                <button type="button" class="btn btn-primary w-100">Log in</button>
            </div>
        </div>
      <div class="modal-footer">
        <div class="w-100">
            New to this site?
            <!-- <a class="ms-2 text-decoration-none text-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign Up</a> -->
            <a class="ms-2 text-decoration-none text-primary" href="./views/signUp.php">Sign Up</a>
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- end od modal -->

<!-- Sign Up Modal -->
<div class="modal fade" id="signupmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h1 class="modal-title fs-5 text-center w-100" id="signupmodalLabel">SIGN UP</h1>
        <button type="button" class="btn-close border border-dark" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div>
                <!-- <label class="form-label" for="login_username">User Name:</label> -->
                <input id="login_username" type="text"  class="form-control" name="lastname" placeholder="User Name"/>
                
                <!-- <label class="form-label" for="login_password">User Name:</label> -->
                <input id="login_password" type="text"  class="form-control my-4" name="lastname" placeholder="Password"/>


                <button type="button" class="btn btn-primary w-100">Continue</button>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- End -->

<div style="height:10vh"></div>

<!-- 
<div id="hero-rent"></div> -->
<!-- hero search button-->


<div class="container-fluid col-xl-12 col-xxl-12 px-4 py-5" id="hero-search">
  <div class="row align-items-center g-lg-5 py-5 pt-5 mt-5">
    <div class="col-lg-7 text-center text-lg-start">
      <h1 class="display-4  lh-1 mb-3 hero-title">Search the nearest parking space near you!</h1>
      
    </div>
    <div class="col-md-10 mx-auto col-lg-5">
      <form class="p-4 p-md-5 form-feature">
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>Parking Slot</label>
        </div>
        <div class="checkbox mb-3">
       
        </div>
        <button class="w-100 btn btn-lg btn" type="submit">Search Parking Space</button>
     
      </form>
    </div>
  </div>
</div>
<img src="../public/img/cross.png" alt="">
<!-- hero serach end -->

<div id="rent">
    <!-- <img src="../public/img/cross.png" alt=""> -->
    <div class="container">
        <div class="heading_container">
            <h2 class="mt-5 shadow">
                Available Parking Slots
            </h2>
            <p>
                Magni quod blanditiis non minus sed aut voluptatum illum quisquam aspernatur ullam vel beatae rerum ipsum voluptatibus
            </p>
        </div>
        <div class="rent-row-1">
            <div class="rent-choice rent-choice-1">
                <img src="https://allthingsflooring.com/wp-content/uploads/2019/02/Leaking-Top-Decks-Blog-H4.jpg" alt="">
                <div>Parking Name:</div>
                <div>Rate:</div>
                <div>Floor:</div>
                <div>slot:</div>
                <button class="btn">Login/Register</button>
            </div>
            <div class="filler"></div>
            <div class="rent-choice rent-choice-2">
                <img src="https://allthingsflooring.com/wp-content/uploads/2019/02/Leaking-Top-Decks-Blog-H4.jpg" alt="">
            </div>
            <div class="filler"></div>
        </div>
        <!-- <div class="rent-row-2">
            <div class="filler"></div>
            <div class="rent-choice rent-choice-3">
                <img src="https://allthingsflooring.com/wp-content/uploads/2019/02/Leaking-Top-Decks-Blog-H4.jpg" alt="">
            </div>
            <div class="filler"></div>
            <div class="rent-choice rent-choice-4">
                <img src="https://allthingsflooring.com/wp-content/uploads/2019/02/Leaking-Top-Decks-Blog-H4.jpg" alt="">
            </div>
        </div> -->
    </div>
</div>


<!-- map -->
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Makati%20Philippines&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><a href="https://www.embedgooglemap.net">google maps webpage</a></div></div>

    <img src="../public/img/cross.png" alt="">
<!-- pricing -->
<div class="pricingCsection">
    <div class="bgbox">
        <img src="../public/img/mustang.jpg" alt="">
    </div>
    <div class="container">
        <div class="heading_container">
            <h2>
                Proprietorship Plans
            </h2>
        </div>
        <div class="col-xl-10 px-0 mx-auto">
            <div class="row">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <h4 class="price">
                            10$
                        </h4>
                        <h5 class="name">
                            Basic
                        </h5>
                        <p>
                            Consequuntur iure, quam vero quidem minima obcaecati veniam, praesentium impedit quod repudiandae tempora amet deserunt rerum accusamus. Commodi qui, illum ad ipsa porro ipsum nostrum magni minus.
                        </p>
                        <a href="">
                   
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box boxcenter">
                        <h4 class="price">
                            30$
                        </h4>
                        <h5 class="name">
                            Premium
                        </h5>
                        <p>
                            Consequuntur iure, quam vero quidem minima obcaecati veniam, praesentium impedit quod repudiandae tempora amet deserunt rerum accusamus. Commodi qui, illum ad ipsa porro ipsum nostrum magni minus.
                        </p>
                        <a href="">
                   
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <h4 class="price">
                            20$
                        </h4>
                        <h5 class="name">
                            Standard
                        </h5>
                        <p>
                            Consequuntur iure, quam vero quidem minima obcaecati veniam, praesentium impedit quod repudiandae tempora amet deserunt rerum accusamus. Commodi qui, illum ad ipsa porro ipsum nostrum magni minus.
                        </p>
                        <a href="">
                   
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div style="height:10vh"></div>

<!-- Footer -->
<footer>
    <img src="../public/img/cross.png" alt="">
    <div class="container info_section">
        <div class="info_top ">
            <div class="row ">
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_form">
                        <h4>Stay Connected</h4>
                        <form action="">
                            <input type="text" placeholder="Enter Your Email" />
                            <button type="submit">Subscribe</button>
                        </form>
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 info_col ">
                    <div class="info_detail">
                        <h4>About Us</h4>
                        <p>
                        Our website is here to help you find the perfect spot to park. We have a wide selection of parking options available, so you can find the perfect one for your needs. Plus, we offer great discounts on parking, so you can save money while you're on the go.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 info_col">
                    <h4>Contact us</h4>
                    <p> Harrie : Bernard : Nathaniel : Marko</p>
                    <div class="contact_nav">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Parkwaze bldg, Ayala Ave, Makati Philippines</span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>Call : +01 123455678990</span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Email : Parkwaze@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
  AOS.init();
</script>
<script>
  var navbar = document.querySelector('nav')

  window.onscroll = function() {

  // pageYOffset or scrollY
  if (window.pageYOffset > 10) {
    navbar.classList.add('scrolled')
  } else {
    navbar.classList.remove('scrolled')
  }
}
</script>

</body>
</html>