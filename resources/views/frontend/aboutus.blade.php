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
   hr.style14 { 
  border: 1px ; 
  height: 1px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
}
.bg-background{
            background-image:url(images/bg1.png);
            background-size:cover;
        }
        .about{
            text-align:justify;
            font-size:12;
        }
</style>
<body class="bg-background">
    @include('frontend.header')

     <!-- Page Header Start -->
     <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h6 class="display-2 text-primary animated slideInDown">About us</h6>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" >Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">About us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
        <!-- About Start -->
    <div class="container-xxl py-5 about1 wow fadeInUp" data-wow-delay="0.3s">
        <div class="container ">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="images/about1.jpg" alt="" style=" border-radius:10px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
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
            </div><br>
            <h5>Core Value</h5>
            <p class="about">Since the beginning, we offered our services to our business clients by creating
splendid Visual Designs bringing business success to their brands. This is the
reason why our services has been unwaveringly supported by the business
partners and continues to evolve as a ‘Design Studio’.</p>
            <p class="about">Given the scenario of the wider implication of Facebook Business Pages in
2018, ‘Art of Lwin’ could have extended its services to Facebook Marketing,
Digital Marketing, and Digital Illustration and so on.</p>
            <p class="about">During the outspread of pandemic covid-19 in 2020, we orchestrated some
illustrations in order to participate in the nationwide containment of the
pandemic by publicising the Visual Aids for ‘Dos and Don’ts’ for public
awareness raising on it.</p>
            <h5>Goal</h5>
            <p class="about">Since the beginning, we offered our services to our business clients by creating
splendid Visual Designs bringing business success to their brands. This is the
reason why our services has been unwaveringly supported by the business
partners and continues to evolve as a ‘Design Studio’.</p>
            <p class="about">In February 2020, we shifted our Design Studio to the current business location
in Kamayat and have been sharing the knowledges of Graphic Illustration
through ‘Graphic Design Master Classes’ for the ones who are passionate about
the career of Graphic Design Making as well as nourishing the highly-skilled
specialists needed for the business enterprises.</p>
            <p class="about">We believe that our efforts could support via a tiny corner for the sake of
Country development in terms of Human Resources Development and
Production Scale.</p>
            <p class="about">Today, there are dozens of junior graphic designers working in the illustration
and design industry who have accomplished the design classes at ‘Art of Lwin’
successfully.</p>

            <h5>Vision and Mission</h5>
            <p class="about">As an Art creator Studio, Our focuses on the future are - to provide committed
Graphic Courses for juniors and extraordinary Services/ Products for our
business partners based on digital artistic creativities, to raise internationally
recognized skilful creators of Art and Design, to supply the excellent artistic
creations to our customers such as Design, Motion Graphics and illustration and
to support the advancement of social life quality through edutainment
(Education + Entertainment) including the creation of comic, animated visual
tools.</p>
            
        </div>
    </div>
    <!-- About End -->
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    @include('frontend.footer')
</body>
</html>