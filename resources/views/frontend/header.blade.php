<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>artoflwin</title>
    <link href="images/favicon.png" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="css/all.min.css" rel="stylesheet">
    <link href="font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    
        body{
		  	font-family: 'Roboto', sans-serif;
		}
    
    .bg-primary{
        background:linear-gradient(to right,darkblue, #E31298);
    }
</style>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
  <!-- Topbar Start -->
  <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <h2 class="text-white fw-bold m-0">Art0fLwin</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>No. 23/B, Tsp, 2 Sin Yay Twin St, Yangon 11041</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>artoflwin@gmail.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+95 9 254 701 883</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg  navbar-light p-lg-0">
            <a href="#" class="navbar-brand"><img src="images/logo1.jpg" height="30" alt="LWN logo" alt=""></a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav">
                    <li class=" {{Request::is('/')? 'active':''}}" ><a href="{{url('/')}}" class="nav-item nav-link">Home</a></li>
                    <li class=" {{Request::is('aboutus')? 'active':''}}" ><a href="{{url('/aboutus')}}" class="nav-link">About</a></li>
                    <li class="{{Request::is('service')? 'active':''}}" role="presentation"><a href="{{url('/service')}}" class="nav-item nav-link">Services</a></li>
                    <li class="{{Request::is('course')? 'active':''}}" role="presentation"><a href="{{url('/course')}}" class="nav-item nav-link">Course</a></li>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="quote.html" class="dropdown-item">Quotation</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <li class="{{Request::is('contact')? 'active':''}}" role="presentation"><a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a></li>
                        
</ul>
<a class="btn btn-primary action-button" role="button" href="{{url('login')}}">Get Start</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
     <!-- JavaScript Libraries -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>