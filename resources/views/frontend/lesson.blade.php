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
    <style>
        .course-detail{
            margin-bottom:10px;
        }
        @media (min-width: 768px){
            
            
        }
        .justify-between{
            justify-content:space-between;
        }
        .flex{
            display:flex;
        }
        .course-detail a{
            text-align:center;
            width:100%;
        }
        .course-detail p{
            font-size:16px;
            font-weight:600;
            color:#000;
        }
        .text-gray,
        .accordion-body {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
        }
        .accordion-item .accordion-button,
        .accordion-item .accordion-button:hover,
        .accordion-item .accordion-button:active,
        .accordion-item .accordion-button:focus {
            outline: 0;
            box-shadow: none;
            border:none;
            font-weight:600;
            background:none;
        }
        .breadcrum .text{
            color:#000;
        }
        .course-detail img{
            height:300px;
            border-radius:10px;
        }
    </style>
</head>
<body>
    @include('frontend.header')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-1 text-center">
            <h4 class="text animated slideInDown">Week Day Course</h4>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" >Home</a></li>
                    <li class="breadcrumb-item text" aria-current="page">Weekday</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    

    
    @include('frontend.footer')
</body>
</html>