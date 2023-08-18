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
    <link href="css/login.css" rel="stylesheet">

</head>
<style>
  .bg-background{
  background-image:url(images/bg1.png);
  }
</style>
<body class="bg-background">
    @include('frontend.header')
     <!-- Page Header Start -->
     <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h6 class="display-2 text-primary animated slideInDown">Login</h6>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#" >Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<div class="d-flex justify-content-center align-items-center mt-5">


        <div class="card">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                  <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item text-center">
                  <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
                </li>
               
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  
                  <div class="form px-4 ">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="text" name="" class="form-control" placeholder="Email">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="text" name="" class="form-control" placeholder="Password">
                    <button class="btn btn-dark  btn-block">Login</button>

                  </div>



                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  

                  <div class="form px-4">
                  <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" name="" class="form-control" placeholder="Name">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="text" name="" class="form-control" placeholder="Email">
                    <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                    <input type="text" name="" class="form-control" placeholder="Phone">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="text" name="" class="form-control" placeholder="Password">

                    <button class="btn btn-dark btn-block">Signup</button>
                    

                  </div>



                </div>
                
               </div>
            
          
          

        </div>
        

      </div>
      @include('frontend.footer')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>