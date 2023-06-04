<!DOCTYPE html>
<html  lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>CoBsine</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="icon" href="{{$nav->logo_image}}" />
   <style>
      .header_section {
    background-image: url({{$home->image}});
}
.bg-light {
    background-image: url({{asset('frontend/images/header-bg.png')}});
}
.services_section{
    background-image: url({{$services->image}});
}
.events_bg {
    background-image: url({{$roayt->image2}});
}
.banner_section {
    border-bottom: 80px solid {{ $contact->color }} ;
}
.about_image::after {
    background-color: {{ $contact->color }};
}
.send_bt a {
    background-color: {{ $contact->color }};
}
   </style>
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="/"><img style="height:47px" src="{{$nav->logo_image}}"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#co">تواصل معنا</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#rc">شهادتنا</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#pr">سابقة الأعمال او المشاريع</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#rr">رؤيتنا</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#wedo">الخدمات</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#about">معلومات عنا</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/"> الصفحة الرئيسية </a>
                  </li>
               </ul>
            </div>
         </nav>

         <!--banner section start -->
         <div id="kk"  class="banner_section layout_padding">
            <div class="container-fluid">
               <section class="slide-wrapper">
                  <div class="container-fluid">
                     <div style="height: 400px;" id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                           <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div  class="carousel-item active">
                              <div  class="container">
                                 <div style="height: 400px;" class="banner_main">
                                    <h1 class="banner_taital">{{ $home->title1 }}</h1>
                                    <p class="banner_text">{{ $home->text1 }}</p>
                                    <div class="btn_main">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div style="height: 400px;" class="banner_main">
                                    <h1 class="banner_taital">{{$home->title2}}</h1>
                                    <p class="banner_text">{{$home->text2}}</p>
                                    <div  class="btn_main">

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
         <!--banner section end -->
      </div>
      <!--header section end -->
      <!--about section start -->
      <div id="about" class="about_section layout_padding">
         <div class="container">
            <h1 class="about_taital">معلومات عنا</h1>
            <p style="font-size: 18pt;" class="about_text my-3">{{$about->text1}}</p>
            <div class="about_section_2">
               <div class="row">
                  <div class="col-lg-6">
                     <div id="ka" class="about_image"><img src="{{$about->image}}"></div>
                  </div>
                  <div class="col-lg-6">
                     <div class="about_taital_main">
                        <p style="font-size: 18pt;" class="lorem_text">{{$about->text2}}</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--about section end -->
      <!-- services section start -->
      <div id="wedo" class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">الخدمات</h1>
            <p style="font-size: 18pt;" class="about_text my-3">{{$services->text}}</p>
            <div class="my-5 services_section_2">
               <div class="row">
                  <div class="col-lg-4">
                     <div >
                        <div ><img style="width: 150px;height:100px" src="{{$services->image1}}"></div>
                     </div>
                     <h4 class="selection_text">{{ $services->title1 }}</h4>
                     <p class=" ipsum_text">{{ $services->text1 }}</p>
                     <div class="my-5" >
                        <div ><img style="width: 150px;height:100px" src="{{$services->image2}}"></div>
                     </div >
                     <h4 class="mx-5 selection_text">{{$services->title2}}</h4>
                     <p class=" ipsum_text">{{$services->text2}}</p>
                  </div>
                  <div class="col-lg-4">
                     <div >
                        <div ><img style="width: 150px;height:100px" src="{{$services->image3}}"></div>
                     </div>
                     <h4 class="selection_text">{{$services->title3}}</h4>
                     <p class="ipsum_text">{{$services->text3}}</p>
                     <div >
                        <div class="my-5" ><img style="width: 150px;height:100px" src="{{$services->image4}}"></div>
                     </div>
                     <h4 class="selection_text">{{$services->title4}}</h4>
                     <p class="ipsum_text">{{$services->text4}}</p>
                  </div>
                  <div class="col-lg-4">
                     <div>
                        <div ><img style="width: 150px;height:100px" src="{{$services->image5}}"></div>
                     </div>
                     <h4 class="selection_text">{{$services->title5}}</h4>
                     <p class="ipsum_text">{{$services->text5}}</p>
                     <div >
                        <div class="my-5" ><img style="width: 150px;height:100px" src="{{$services->image6}}"></div>
                     </div>
                     <h4 class="selection_text">{{$services->title6}}</h4>
                     <p class="ipsum_text">{{$services->text6}}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- blog section start -->
      <div id="rr" class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="blog_img"><img src="{{$roayt->image1}}"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="blog_taital">{{$roayt->title1}}</h1>
                  <p class="blog_text">{{$roayt->text1}}</p>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- events section start -->
      <div  class="events_section layout_padding">
         <div class="container">
            <h1 class="events_taital">{{$roayt->title2}}</h1>
            <div class="events_section_2">
               <div class="events_bg">
               </div>
            </div>
         </div>
      </div>
      <!-- events section end -->
        <!--project section start-->
        <div >
         <h1 style="font-size: 48px;color:#060707;font-weight: bold;margin-top: 200px;" class="text-center">سابقة الأعمال او المشاريع</h1>
        <div class="row my-3 px-1">
         <div class="col-md-12">
             <div id="pr" class="row">
             @foreach ($sabkas as $sabka )
               <div class="card" style="width: 18rem;margin-left: 160px;margin-top: 50px;">
                  <img src="{{$sabka->image}}" style="height:200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p style="font-size: 15pt;color:black" class="card-text">{{$sabka->text}}</p>
                  </div>
                </div>
                @endforeach  


 
               </div>
            </div>
         </div>
      </div>
        <!--project section end-->
            <!-- events Certificate start -->
            <div  class="layout_padding">
               <div  class="container">
               <h1   style="font-size: 48px;color:#060707;font-weight: bold;" class="text-center">شهادتنا</h1>
               <div id="rc"  class="text-center"><img class="w-75" src="{{asset('frontend/images/yy.jpg')}}"></div>
               <div style="margin-top: 20px;margin-bottom: 80px;">
               <form method="post" action="{{route('get')}}">
                  @csrf
            <div  style="margin-left: auto;margin-right: auto;" class=" w-50 input-group">
               <input  type="text" class="form-control text-center" name="code" placeholder="ادخل كود الشهادة" aria-label="Username"
                   aria-describedby="basic-addon1">
           </div>
           <div style="margin-left:440px" class=" input-group kk  ">
               <button  style="background-color:{{ $contact->color }};color:white;width:20% ;" class="kk p-1 my-2" name="send">ادخل الكود</button>
           </div>
           </form>
           
<form method="post" action="{{route('search')}}">
           @csrf
           <div style="margin-left:280px" class="input-group my-4 w-50 mb-3">
  <input type="text" class="form-control text-center" placeholder="ابحث عن الشهادة بالاسم" name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="mx-2 kk" style="background-color:{{ $contact->color }};color:white;width:20%;" name="button" >بحث</button>
  </div>

  </form>
         </div>
         </div>
           </div>
  
      <!-- events Certificates end -->


      <!-- contact section start -->
      <div id="co" class=" contact_section layout_padding">
         <div class="container" style="margin-left: 800px;">
            <h1 class="contact_taital text-center">تواصل معنا</h1>
            <div class="contact_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6 ">
                     <div class="contact_main">
                        <form action="{{route('senr')}}" method="post">
                           @csrf
                        <input type="text" class="mail_text" placeholder="اسمك" name="name">
                        <input type="text" class="mail_text" placeholder="رقمك" name="phone">
                        <input type="text" class="mail_text" placeholder="ايميلك" name="email">
                        <input class="massage-bt" placeholder="رسالتك" rows="5" id="comment" name="massage" />
                        <button style="width: 200px;background-color:{{ $contact->color }};color:white;margin-left:175px" class="btn kk btn-outline-success my-3" name="send" >ارسل</button>
                        </form>
                     </div>
                  </div>
             
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->

      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
         <div class="location_main">
               <div class="location_text"><img src="{{asset('frontend/images/map-icon.png')}}"><span class="padding_left_10">Location</span><p>{{ $contact->location }}</p></div>
               <div class="location_text center"><img src="{{asset('frontend/images/call-icon.png')}}"><span class="padding_left_10">Call ; {{ $contact->number }}</span></div>
               <div class="location_text right"><img src="{{asset('frontend/images/mail-icon.png')}}"><span class="padding_left_10">{{ $contact->email }}</span></div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-4">
                     <h2 class="footer_taital">عن شركتنا</h2>
                     <p class="footer_text">{{ $contact->text }}</p>
                  </div>
                  <div class="col-lg-4" style="margin-left: 380px;">
                     <div class="social_icon">
                        <ul>
                           <li><a target="_blank" href="{{ $contact->facebook }}"><img src="{{asset('frontend/images/fb-icon.png')}}"></a></li>
                           <li><a target="_blank" href="{{ $contact->twitter }}"><img src="{{asset('frontend/images/twitter-icon.png')}}"></a></li>
                           <li><a target="_blank" href="{{ $contact->instgram }}"><img src="{{asset('frontend/images/instagram-icon.png')}}"></a></li>
                           <li><a target="_blank" href="{{ $contact->youtube }}"><img src="{{asset('frontend/images/youtub-icon.png')}}"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     

  
      

      <!-- footer section end -->
      <!-- copyright section start -->
     
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
      <script src="{{asset('frontend/js/popper.min.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('frontend/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('frontend/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>