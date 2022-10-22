<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./public/img/favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Waze</title>

    <!-- BS -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8fe3227aac.js" crossorigin="anonymous"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">


    <!-- Custom Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=EB+Garamond&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php"><img class="mx-3" src="./public/img/logo.png"><span>Park</span> Waze</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                <a class="nav-link" href="./views/reservation.php">Reservation</a>
                <a class="nav-link" href="./views/about.php">About</a>
                <a class="nav-link" href="./views/testimonial.php">Testimonial</a>
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
            <a class="ms-2 text-decoration-none text-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign Up</a>
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




<div id="hero">
  <div class="hero-text container-fluid">
    <div class="hero-title">
        Parking within your reach
    </div>
    <div class="hero-description">
      <span>Looking for a parking space?</span> Whether you're looking for street parking, garage parking, or even airport parking, <span>Park Waze</span> is the app for you.
    </div>
    <button class="hero-button rounded" id="hero-button" href="./reservation.php">
      Reservation
    </button>
  </div>
</div>




<img id="cross-slanted" src="./public/img/crossHero.png" alt="">





<!-- Infographics -->
<div class="mt-5" id="infographics">
    <div class="container-fluid">
        <h1 class="steps mt-5 shadow">RESERVATION PROCESS</h1>
        <div style="height:22vh"></div>
    </div>

    <p class="container-fluid" id="autoParking">AUTO</p>
    <p class="parking">PARKING</p>

    <div class="container-fluid" style="position: relative;">

        <svg class="svg1" viewbox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" >
            <text x="43" y="30" fill="rgb(254,210,103)"> 1 </text>
            <polygon fill="#ffffff"
                fill-opacity="0"
                stroke="rgb(73,231,255)"
                stroke-width="2"
                points="50 1 95 25 95 75 50 99 5 75 5 25"
            />
            <text class="text1"  x="20" y="57" fill="white" style="font-size: 10px; text-shadow: none;"> Create account <tspan x="30" y="70">and Login </tspan></text>
        </svg>


        <svg class="svg2" viewbox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <text x="43" y="30" fill="rgb(254,210,103)"> 2 </text>
            <polygon fill="#ffffff"
                fill-opacity="0"
                stroke="rgb(73,231,255)"
                stroke-width="2"
                points="50 1 95 25 95 75 50 99 5 75 5 25"
            />
            <text class="text1"  x="16" y="57" fill="white" style="font-size: 10px; text-shadow: none;"> Search the nearest <tspan x="24" y="70">parkings space </tspan></text>
        </svg>


        <svg class="svg3" viewbox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <text x="43" y="30" fill="rgb(254,210,103)"> 3 </text>
            <polygon fill="#ffffff"
                fill-opacity="0"
                stroke="rgb(73,231,255)"
                stroke-width="2"
                points="50 1 95 25 95 75 50 99 5 75 5 25"
                />
            <text class="text1"  x="16" y="57" fill="white" style="font-size: 10px; text-shadow: none;"> Select and reserved <tspan x="32" y="70">the spot </tspan></text>
        </svg>


        <svg class="svg4" viewbox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <text x="43" y="30" fill="rgb(254,210,103)"> 4 </text>
            <polygon fill="#ffffff"
                fill-opacity="0"
                stroke="rgb(73,231,255)"
                stroke-width="2"
                points="50 1 95 25 95 75 50 99 5 75 5 25"
            />    
            <text class="text1"  x="16" y="57" fill="white" style="font-size: 10px; text-shadow: none;"> Get your QR code <tspan x="32" y="70"> and enjoy! </tspan></text>
        </svg>

    </div>
 
</div>





<!-- Brands -->
<div id="brands">
    <div><img src="./public/img/dmci.png" class="img-fluid" alt=""></div>
    <div><img src="./public/img/ayala.png" class="img-fluid" alt=""></div>
    <div><img src="./public/img/megaworld.png" class="img-fluid" alt="" style="width: 50vh; height: 5vh; margin-top: 2px;"></div>
    <div><img src="./public/img/prime.png" class="img-fluid d-none d-md-block" alt=""></div>
    <div><img src="./public/img/rob.png" class="img-fluid d-none d-lg-block" alt=""></div>
    <div><img src="./public/img/rockwell.png" class="img-fluid d-none d-lg-block" alt=""></div>
</div>



<img src="./public/img/cross.png" class="cross" alt="">
<div style="height:10vh"></div>


<!-- Reviews -->
<div id="reviews" class="carousel slide container-fluid pt-5 pb-5 mt-5 mb-5" data-bs-ride="true">
    <div class="container-fluid">
        <h1 class="shadow">HEAR FROM OUR USERS</h1>
        <div  style="height:12vh"></div>
    </div>

    <div class="carousel-indicators ">
        <button type="button" data-bs-target="#reviews" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#reviews" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#reviews" data-bs-slide-to="2" aria-label="Slide 3"></button>
        
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            <div class="row gap-5 justify-content-center">
                <div class="review col-8 col-md-4 col-xl-3">
                    <img src="./public/img/vanessa.jpg" alt="">
                    <div class="reviewer">Vannesa</div>
                    <div class="review-text">This parking app is amazing! I never have to worry about finding a spot or feeding a meter again. It has made my life so much easier.</div>
                </div>
                <div class="review d-none d-md-block col-4 col-xl-3">
                    <img src="./public/img/herbet.jpg" alt="">
                    <div class="reviewer">Herbert</div>
                    <div class="review-text"> Awesome website! It is so easy to use and always accurate. I would highly recommend it to anyone who needs help finding parking.</div>
                </div>     
                <div class="review col-3 d-none d-xl-block">
                    <img src="./public/img/amanda.jpg" alt="">
                    <div class="reviewer">Amanda</div>
                    <div class="review-text">I've been using this parking app for a while now and it's been fantastic! It's so convenient and easy to use, and it's saved me a lot of money and hassle.</div>
                </div>
                <div class="review col-2 d-none">
                    <img src="./public/img/photo_of_me.png" alt="">
                    <div class="reviewer">reviewer_name</div>
                    <div class="review-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam cupiditate recusandae perspiciatis ab cum voluptatem eligendi fugiat? Fugiat, labore amet.</div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            <div class="row gap-5 justify-content-center">
                <div class="review col-8 col-md-4 col-xl-3">
                    <img src="./public/img/Aldous.jpg" alt="">
                    <div class="reviewer">Aldous</div>
                    <div class="review-text"> Great Website! It is so easy to use and always accurate. I would highly recommend it to anyone who needs help finding parking.</div>
                </div>
                <div class="review d-none d-md-block col-4 col-xl-3">
                    <img src="./public/img/Selena.jpg" alt="">
                    <div class="reviewer">Selena</div>
                    <div class="review-text">I've been using this parking app for a while now and it's been fantastic! It's so convenient and easy to use, and it's saved me a lot of money and hassle.</div>
                </div>     
                <div class="review col-3 d-none d-xl-block">
                    <img src="./public/img/tigreal.jpg" alt="">
                    <div class="reviewer">Tigreal</div>
                    <div class="review-text">This parking app is amazing! I never have to worry about finding a spot or feeding a meter again. It has made my life so much easier.</div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            <div class="row gap-5 justify-content-center">
                <div class="review col-8 col-md-4 col-xl-3">
                    <img src="./public/img/Beatrice.jpg" alt="">
                    <div class="reviewer">Beatrice</div>
                    <div class="review-text">This parking app is amazing! I never have to worry about finding a spot or feeding a meter again. It has made my life so much easier.</div>
                </div>
                <div class="review d-none d-md-block col-4 col-xl-3">
                    <img src="./public/img/Bill.jpg" alt="">
                    <div class="reviewer">Bill</div>
                    <div class="review-text">I've been using this parking app for a while now and it's been fantastic! It's so convenient and easy to use, and it's saved me a lot of money and hassle.</div>
                </div>     
                <div class="review col-3 d-none d-xl-block">
                    <img src="./public/img/Gusion.jpg" alt="">
                    <div class="reviewer">Gusion</div>
                    <div class="review-text">Great Website! It is so easy to use and always accurate. I would highly recommend it to anyone who needs help finding parking.</div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Features -->
<div style="height:10vh"></div>
<div id="features">
    <div class="container-fluid d-flex justify-center">
        <h1 class="shadow">GET DISCOUNTS AND CREDITS</h1>
        <div style="height:5vh"></div>
    </div>
    <div class="feature-container">
        <div class="feature-1 ">
            <div class="feature-title">USERS</div>
            <div class="feature-description">If you register with us, you'll get free credits that you can use to reserved your parking slot.You can search for parking by location and then book a space that suits your needs.</div>
            <div class="button-div">
                <button href="#" class="feature-button" id="textHover">Reserved Now</button>
            </div>
        </div>
        <div class="feature-2">
            <div class="feature-title"> PROPRIETOR</div>
            <div class="feature-description">As a Proprietor, you can now register for free to use our new parking management system. This system will help you keep track of your parking spots, revenue, and customers.</div>
            <div class="button-div">
                <button href="#" class="feature-button hovText">Register Now</button>
            </div>
        </div>
    </div>
</div>





<!-- Footer -->
<footer>
    <img src="./public/img/cross.png" alt="">
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