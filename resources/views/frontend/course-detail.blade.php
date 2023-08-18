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
    <div class="container mx-30">
    <div class="row course-detail">
        <div class="col-md-6">
            <img src="https://cdn.nerdschalk.com/wp-content/uploads/2020/06/blur-your-background-on-zoom-2-759x427.png" alt="course-image" srcset="" />
        </div>

        <div class="col-md-3 py-5">
            <div class="justify-between flex">
                <div>
                    <p>Course Period</p>
                    <p>Fees</p>
                    <p>Students</p>
                    <p>Course Duration</p>
                </div>
                <div>
                    <p>3 months</p>
                    <p>300000 ks</p>
                    <p>150+</p>
                    <p>3hr/day</p>
                </div>
            </div>
            <a type="button" class="btn btn-primary p-2" href="">Join Now</a>
        </div>
    </div>
    <div class="row my-10">
        <div class="col-md-12">
            <h5>About Course</h5>
            <p class="text-gray">ဒီ Course ကိုလေ့လာပြီးသွားရင်တော့ သင်တန်းသားတို့ အနေနဲ့ Graphic Design  တစ်ယောက်သိသင့်တတ်သင့်သည်များကို သိရှိပြီး Design တွေရဲ့ နောက်ကွယ်မှာဘယ်လိုလေးတွေ အလုပ်လုပ်နေလဲ ဆိုတာမြင်လာပါမယ်။Graphic Designer အဖြစ် အလုပ်ဝင်နိုင်သည်အထိ သင်ကြားပေးသည့် သင်တန်းဖြစ်ပါတယ်။</p>
            <h5>အသုံးပြု သင်ကြားမည့် Software Tool များ</h5>
            <ul>
                <li>Adobe Photoshop</li>
                <li>Adobe Illustrator</li>
                <li>Adobe InDesign</li>
                <li>Behance</li>
            </ul>
        </div>
    </div>
    <div class="row my-10">
        <h5>Course Description</h5>
        <div class="col-md-12 border rounded-lg">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Tools + Theory
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Software အသုံးပြုရုံမဟုတ်ပဲ Graphic Designer တစ်ယောက်သိသင့်တတ်သင့်သည်များကို သီအိုရီနှင့်လက်တွေ့ပေါင်းစပ်ကာ လုပ်ငန်းများတွင် အသုံးပြုသည့်ဒီဇိုင်းများကို လက်တွေ့ရေးဆွဲလေကျင့်စေခြင်းဖြင့် အချိန်တိုအတွင်း
                            စနစ်တကျတတ်မြောက်အောင် ဒီဇိုင်းဆွဲထားပါတယ်။
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            The Best Experience Trainer Make Learning
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            ဒီဇိုင်းများကိုလက်တွေ့နယ်ပယ်မှာ ဖန်တီးရေးဆွဲပေးနေတဲ့ ...Art of Lwin Creative Studio မှ ဆရာလွင်ထက်အောင် ကိုယ်တိုင် နှစ်အတန်ကြာ လေ့လာခဲ့ရတဲ့ အတွေ့အကြုံများကို သင်ကြားပေးမှာဖြစ်လို ဒီဇိုင်းပိုင်းဆိုင်ရာ
                            အတွေ့အကြုံနဲ့ ပညာတွေအများကြီးရနိုင်တဲ့သင်တန်းဖြစ်ပါတယ်။
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Detail Design Course Make Learning Process Fast and Understandable
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            ဒါ့ အပြင် သင်ယူသူများအတွက် Lesson များကို ခေါင်းစဥ်တစ်ခုချင်းစီအလိုက် နားလည်လွယ်အောင်သေချာသင်ပြပေးသလို သင်တန်းချိန်တိုင်းကို Video Record ယူထားလို့ အခက်အခဲမရှိ ပြန်လည် လေ့လာသင်ယူနိုင်မှာဖြစ်ပါတယ်။
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                            Practice in Place and No More Further Effort
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            ဒါ့ အပြင် သင်ယူသူများအတွက် Lesson များကို ခေါင်းစဥ်တစ်ခုချင်းစီအလိုက် နားလည်လွယ်အောင်သေချာသင်ပြပေးသလို သင်တန်းချိန်တိုင်းကို Video Record ယူထားလို့ အခက်အခဲမရှိ ပြန်လည် လေ့လာသင်ယူနိုင်မှာဖြစ်ပါတယ်။
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                            Certificate and Portfolio Support For Work
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            သင်တန်းပြီးဆုံးပါက Graphic Designer Certificate လည်းပေးအပ်သွားမှာဖြစ်သလို အလုပ်လျှောက် ဖို့အတွက် CV, Cover letter, နှင့် Portfolio ပြုလုပ်နည်းကိုပါ သင်ကြားပေးမှာဖြစ်လို့ ပညာပိုင်းအရကော Document ပိုင်းမှာပါ
                            အခက်အခဲမရှိ ပဲ Graphic Designer လမ်းကြောင်းကို လျှောက်လှမ်းသွားနိုင်မှာဖြစ်ပါတယ်။
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseThree">
                            Course Outline
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <h6>Theory</h6>
                            <ol>
                                <li>Design တစ်ခုကို ပညာရှင်ဆန်ဆန် ပိုင်နိုင်စွာဖန်တီးနိုင်စေဖို့ အတွက် Color Theory/CMYK and RGB/Color Pallet အရောင်များ၏ သဘာဝတရားနှင့် ပိုင်နိုင်စွာ အသုံးချပုံ</li>
                                <li>Graphic Design Basic & Advance Elements အစိတ်အပိုင်းများနှင့် လိုက်ဖက်စွာအသုံးချခြင်း</li>
                                <li>Phychology and Mood of Color and Elements စိတ်ပိုင်းဆိုင်ရာကိုအသုံးချ၍ အကြောင်းအရာနှင့် လိုက်ဖက်မှုရှိသော ဒီဇိုင်းများဖန်တီးခြင်း</li>
                                <li>About Light and Tone အလင်း/အမှောင် သဘောတရားများ</li>
                                <li>About Design Principles အခြေခံစည်းမျဉ်းများ</li>
                                <li>စဉ်းစားတွေးခေါ်ပုံ (Mood board/ Concept Thinking)</li>
                                <li>နေရာချထားမှု (Layout, Compostion, Golden Ratio, Gird System) နှင့်အခြား ဒီဇိုင်းနာများသိသင့်သည့်သီအိုရီနှင့်အယူအဆများ</li>
                            </ol>
                            <h6>Illustrations</h6>
                            <ol>
                                <li>Landscape illustration</li>
                                <li>Flat Character illustration</li>
                                <li>Chibi Character illustration</li>
                                <li>Vector Portrait</li>
                                
                            </ol>
                            <h6>Type</h6>
                            <p>Typography and Text Style or Effect Section Font အမျိုးအစားများ, Anatomy of Typography, Usage of font. Premium Font များရယူထည့်သွင်းခြင်း မြန်မာစာ စာလုံးများနှင့် Unicode မှန်အောင်ရိုက်နည်း အပြင် Typography နဲ့ပက်သတ်ပြီးသိသင့်သိထိုက်တဲ့ အချက်အလက်များ လိုက်နာရမည့် အချက်များ</p>
                            <h6>Logo & Brand</h6>
                            <p>Professional ဒီဇိုင်းနာတိုင်းမသိမဖြစ်သိထားသင့်သော Logo နှင့် Brand တစ်ခု လုပ်ငန်းတစ်ခု တည်ဆောက်ရာမှာ Branding အရေးပါပုံနှင့် Personal Branding,Business Branding အကြောင်းကိုလေ့လာပြီး လုပ်ငန်းတစ်ခု၏ သဘောတရား အငွေ့အသက်လွမ်းခြုံသော Professionalလိုဂိုဖန်တီးရေးဆွဲပုံ Workflow ကိုသင်ကြားပေးသွားမှာပါ။</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

    
    @include('frontend.footer')
</body>
</html>