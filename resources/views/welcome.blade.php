<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>EspritMobility</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  
</head>

<body>
<div >
          

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/logoesp.png" alt="" /><span>
              Esprit Mobility
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              @if (Route::has('login'))
                <li class="nav-item active">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                </li>
                @else
                <li class="nav-item">
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif  
                @endauth 
                 </li>
               
                @endif
              </ul>
       
            </div>
         
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="">
          <div class="">
            <div class="">
              <div class="">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="">
                        <div>
                          <h1>
                            Welcome to <br />
                            ESPRIT MOBILITY
                          </h1>
                          <p>
                          ESPRIT is a private higher education institution, approved by the State, founded in 2003, on the initiative of academics experienced in teaching and who wanted to take up the challenge of creating a private school dedicated to the training of operational engineers, initially in the fields of ICT, meeting the requirements of companies in the sector.

                          </p>
                          <br>
                          <div class="d-flex">
                          
                            <a href="" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="images/grad.jpg" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Welcome to <br />
                            Our Fruits Shop
                          </h1>
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                          <div class="d-flex">
                            <a href="" class="text-uppercase custom_orange-btn mr-3">
                              Shop Now
                            </a>
                            <a href="#contact" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="images/slide-img.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Welcome to <br />
                            Our Fruits Shop
                          </h1>
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                          <div class="d-flex">
                         
                            <a href="#Contact" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="images/slide-img.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          
        
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding ">
    <div class="container">
      <h2 class="custom_heading">Our Services</h2>
      <p class="custom_heading-text">
        There are many variations of passages of Esprit Mobility, but
        the majority have
      </p>
      <div class=" layout_padding2">
        <div class="card-deck">
          <div class="card">
           
            <div class="card-body">
              <h5 class="card-title">HIGH SCHOOL & YOUNGER</h5>
              <p class="card-text">
              We offer programs that enable youth to improve their English and other skills and spend exchange years abroad ur country for a better experience.
              </p>
            </div>
          </div>
          <div class="card">
      
            <div class="card-body">
              <h5 class="card-title">UNDERGRADUATE STUDY</h5>
              <p class="card-text">
              Esprit Mobility supports scholarship opportunities for undergraduate studies arround the world institutions in the MENA region.
              </p>
            </div>
          </div>
          <div class="card">
           
            <div class="card-body">
              <h5 class="card-title">GRADUATE STUDY </h5>
              <p class="card-text">
              Esprit Mobility supports scholarship and exchange opportunities for graduate studies arround the world such as the Fulbright Foreign Student Program for the MENA region.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
       
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- fruits section -->

  

  <!-- end tasty section -->

 

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <h2 class="font-weight-bold" id="#Contact">
        Contact Us
      </h2>
      <div class="row">
        <div class="col-md-8 mr-auto">
          <form action="">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" placeholder="Name">
                </div>
                <div>
                  <input type="text" placeholder="Phone Number">
                </div>
                <div>
                  <input type="email" placeholder="Email">
                </div>

                <div class="mt-5">
                  <input type="text" placeholder="Message">
                </div>
                <div class="mt-5">
                  <button type="submit">
                    send
                  </button>
                </div>
              </div>

            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->





    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
        Copyright &copy; 2022 All Rights Reserved By
        Esprit Mobility</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
   


  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>