<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>artoflwin</title>
    <link href="images/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        
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
    .bg-background{
        background-image:url(images/bg1.png);
        }
        input::placeholder{
            color:white;
            font-weight:500;

        }
        .about{
            text-align:justify;
        }
        
</style>
<body class="bg-background">
    @include('frontend.header')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5 ">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="images/p2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>Art0fLwin graphic studio</strong>
                                    </p>
                                    <h3 class="display-1 text-white mb-4 animated slideInRight">Learn graphic design with Art 0f Lwin</h3>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="images/p1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>Art0fLwin</strong>
                                    </p>
                                    <h3 class="display-1 text-white mb-5 animated slideInLeft">Ready to learn graphic
                                        design with Art Of Lwin</h3>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
    </div>
    
    <!-- Carousel End -->
    <!-- Service Start -->
    <section id="courses" class="course-area pt-140 pb-170">
    <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-15 wow fadeInUp text-primary" data-wow-delay=".2s"><i class="fa fa-cogs" aria-hidden="true"></i>
Services</h2>
                    <h2 class="mt-2">What Solutions We Provide</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-paint-brush fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Logo Design</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-pen fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Vector Design</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-tint fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Design For Social Media Marketing</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                   
                </div>
            </div><br>
            <div class="row">
				<div class="col-xl-12">
					<div class="view-all-btn text-center">
						<a href="{{url('/service')}}" class=" btn main-btn">All services</a>
					</div>
				</div>
			</div>
        </div>
        
        </section>
        <!-- Service End -->
<hr>
    <!--====== COURSES PART START ======-->
    <section id="courses" class="course-area pt-140 pb-170">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 col-md-10 mx-auto">
					<div class="section-title text-center mb-50">
						<h2 class="mb-15 wow fadeInUp text-primary" data-wow-delay=".2s"><i class="fa fa-book" aria-hidden="true"></i>Courses</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s"></p>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".2s">
						<div class="course-img">
                            <a href="{{url('/course1')}}">
                                <img src="images/course2.png" alt="">
                            </a>
						</div>
						<div class="course-info">
							<h4><a href="{{url('/course1')}}">Week Days Graphic Class</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									Mon,Tue,Web,Thu,Fri
								</div>
								<div class="meta-item">
									
								</div>
								<div class="meta-item">
									
								</div>
								<div class="price">
									<span>300000mmk</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".4s">
						<div class="course-img">
                        <a href="">
                                <img src="images/course2.png" alt="">
                            </a>
						</div>
						<div class="course-info">
							<h4><a href="course-single.html">Weekend Days Graphic Class</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									Sat,Sun
								</div>
								<div class="meta-item">
									8am to 3pm
								</div>
								<div class="meta-item">
									
								</div>
								<div class="price">
									<span>300000mmk</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".6s">
						<div class="course-img">
                        <a href="">
                                <img src="images/course2.png" alt="">
                            </a>
						</div>
						<div class="course-info">
							<h4><a href="course-single.html">Online Class</a></h4>
							<div class="course-meta">
								<div class="meta-item">
									
								</div>
								<div class="meta-item">
									
								</div>
								<div class="meta-item">
									
								</div>
								<div class="price">
									<span>300000mmk</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-xl-12">
					<div class="view-all-btn text-center">
						<a href="{{url('/course')}}" class=" btn main-btn">View All Course</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== COURSES PART ENDS ======-->
    <div class="container">
    <div class="kodfun-galeri wow fadeInUp" data-wow-delay=".6s">
        <div style="background-image:url('images/gallery/g1.jpg');"></div>
        <div style="background-image:url('images/gallery/g2.jpg');"></div>
        <div style="background-image:url('images/gallery/g3.jpg');"></div>
        <div style="background-image:url('images/gallery/g5.jpg');"></div>
        <div style="background-image:url('images/gallery/g7.jpeg');"></div>
        
        
    </div>
    </div>
    <!-- About Start -->
    <div class="container-xxl py-5 habout1 wow fadeInUp" data-wow-delay="0.3s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="images/about.svg" alt="" style="object-fit: cover; border-radius:10px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white  text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to artoflwin graphic studio</h1>
                    
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-address-book text-primary me-2"></i>Name : Art Of Lwin Studio</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-user-circle text-primary me-2"></i>Founder: Lwin Htet Aung</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-calendar text-primary me-2"></i>Established on : 16 May 2016</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-location-arrow text-primary me-2"></i>Location : No. 23, B-2, Sin Yay Twin Street, Kamayut, Yangon, Myanmar</p>
                        </div>
                        <h5>Inspiring Story</h5>
                    <p class="about mb-4">There were fewer Professional Graphic Design Services Providers around the
year 2000 in Myanmar and some Service Providers could not be accessible to
the ordinary Small and Medium entrepreneurs in terms of higher prices for
services rental. Then, most entrepreneurs hired employees who could utilize
only Microsoft Office and Photoshop editorial.</p>
                    <p class="about mb-4">With the rampant use of mobile Sim-card services and the emergence of the
social media wave brought by Facebook in 2016, we started to supply our
services as a Freelance Design Services Provider to the customers by bridging
the gaps in their needs.</p>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{url('/aboutus')}}">Read More---</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    @include('frontend.footer')

 

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>