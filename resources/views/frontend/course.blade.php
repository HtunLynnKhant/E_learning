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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
    @include('frontend.header')
    <!--====== COURSES PART START ======-->
    <section id="courses" class="course-area pt-140 pb-170">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 col-md-10 mx-auto">
					<div class="section-title text-center mb-50">
						
						<p class="wow fadeInUp" data-wow-delay=".4s"></p>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="single-course wow fadeInUp" data-wow-delay=".2s">
						<div class="course-img">
                            <a href="">
                                <img src="images/course2.png" alt="">
                            </a>
						</div>
						<div class="course-info">
							<h4><a href="course-single.html">Week Days Graphic Class</a></h4>
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
			
			
			<!-- <div class="row">
				<div class="col-xl-12">
					<div class="view-all-btn text-center">
						<a href="courses.html" class=" btn main-btn">View All Course</a>
					</div>
				</div>
			</div> -->
		</div>
	</section>
	<!--====== COURSES PART ENDS ======-->
    @include('frontend.footer')
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>