@extends('front.master')


@section('title', __('messages.home'))
@section('css')
<style>
  
 .images-container img   {
    position:absolute;
    left:-190px;
    top:70px;
    transition:all 0.5s;
}
 .letter{
   font-weight:bold;
   font-size:40px;
 }
    .register-now{
      background-color:#191e3a;
      color:#fff;
      border:#fff 1px solid;
      padding: 10px 30px;
      font-size: 19px;
      transition:all 0.5s;
      margin-left:10px;
    }
    .login-button{
        background-color:#fff;
        color:#191e3a;
        padding: 10px 20px;
        font-size: 19px;
        transition:all 0.5s;
        margin-left: 12px;
    }
   .btn:hover {
        background-color:#ffffffc9;
        color:#fff;
    }
    .header-desc{
      font-size: 17px;
      line-height: 1.9;
      width:80%;
    }
    .service{
    background: #e19809;
    padding: 7px 6px;
    margin: 0 8px;
    }
    .package{
    background: #25d3e3;
    padding: 7px 6px;
    margin: 0 8px;
    }
    .advantages-content{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height:50vh;
    }
    .header-section{
      color: var(--white);
      height: 60%;
      margin-bottom:250px;
    }
    .search-input{
     position: relative;
    }
    .search-input input{
      width: 50%;
    margin: 30px auto;
    padding: 20px;
   
    }
    
    .search-input  .login-button {
    position: absolute;
    left: 26%;
    top: 28%;
    width: 150px;
    border-radius: 10px;
    }
    @media(max-width:992px){
        .img2{display:none;}
    }
        /* Start packages */

.all-offer a {
  transition: 0.5s ease-in-out !important;
  color: #25d4e3 !important;
  opacity: 0.5 !important;
  text-decoration: none !important;
  font-size: 25px !important;
  font-weight: 500 !important;
  transition: 0.5s ease-in-out !important;
}
.all-offer a {
  opacity: 1 !important;
}
.all-offer a i,
.all-offer a svg,
.all-offer a path {
  transform: translateX(-20px) !important;
}
.all-offer a i,
.all-offer a svg,
.all-offer a path
 {
  transition: 0.5s ease-in-out !important;
  color: #25d4e3 !important;
}

.packages .item .card {
  overflow: hidden !important;
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.25) !important;
  transition: 0.5s ease-in-out !important;
  background-color: #fff !important;
  background-clip: border-box !important;
  height: 100%;
  padding-bottom: 60px !important;
}
.packages .item:hover .card {
  background-color: #191e3a !important;
  color: #f5f7fb !important;
}

.packages .card-img-top {
  width: 30% !important;
  display: none !important;
}
.packages .item .container-card-img {
  transition: 0.2s ease-in-out !important;
  height: 100% !important;
  display: none !important;
  align-items: center !important;
  justify-content: center !important;
}
/* .packages .item .container-card-img {
  height: 0 !important;
} */
.packages .item .card-img-top {
  transition: 0.1s ease-in-out !important;
}
/* .packages .item .card-img-top {
  display: none !important;
} */
.packages .item {
  position: relative !important;
}
.packages .item .card p {
  vertical-align: middle !important;
  height: auto !important;
  color: #282f59 !important;
  margin-bottom: 15px !important;
  opacity: 1 !important;
}
.packages .item .card p {
  /* opacity: 0;
  height: 0; */
  padding: 2px 0 !important;
}

.packages .item:hover .card p{
  color: #fff !important;
}

.packages .name-service {
  display: none !important;
  justify-content: center !important;
  flex-wrap: wrap !important;
  transition: 0.3s ease-in-out !important;
}

.packages .item .name-service {
  display: flex !important;
}
.packages .name-service li {
  display: flex !important;
  align-items: center !important;
  justify-content: flex-start !important;
}
.packages .item .icon {
  transition: 0.5s ease-in-out !important;
  background-color: #191e3a !important;
  color: #f5f7fb !important;
  margin-left: 10px !important;
  flex-basis: 23.33px !important;
  padding: 5px !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  border-radius: 50% !important;
}
.packages .item .icon {
  background-color: #f5f7fb !important;
  color: #191e3a !important;
}
.footer-card {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  position: relative !important;
  padding: 0 10px !important;
  padding-bottom: 5px !important;
}
.footer-card .icons {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
}
.packages .footer-card .bonus {
  transition: 0.3s ease-in-out !important;
  position: absolute !important;
  top: 0 !important;
  left: calc(50% - 5%) !important;
  transform: translate(-50%, 0) !important;
}
.packages .item .footer-card .bonus {
  position: absolute !important;
  top: 50% !important;
  transform: translate(-50%, -200%) !important;
}
.packages .item .footer-card .icons {
  display: none !important;
}
.packages .footer-card .show-service {
  display: none !important;
  border: 1px solid #191e3a !important;
  border-radius: 10px !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
  color: #191e3a !important;
  background-color: transparent !important;
}
.packages .item .footer-card .show-service {
  display: flex !important;
}
.packages .item:hover .footer-card .show-service {
  display: flex !important;
  color: #f5f7fb !important;
  border: 1px solid #f5f7fb !important;
}

/* Packages page */
/* End packages */
        /* Start Services */
.services.dark {
  background-color: transparent;
  color: #ffffff;
  margin-bottom: 100px;
}
.services.dark .main-title::after {
  background-color: #a5a5a5;
}
.services .box{
  width: 100% !important;
}
.services .box .card {
  background-color: #fff !important;
  background-clip: border-box !important;
  height: 100% !important;
  padding-bottom: 60px !important;
}
.services .box:hover .card {
  background-color: #191e3a !important;
  color: #ffffff !important;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.25);
  border-radius: 12.5px;
  transform: scale(1.02);
}
.services .box .card-text {
  font-weight: 400;
  font-size: 19px;
}

.services .box .card {
  transition:  0.3s ease-in-out;
  overflow: hidden;
}
.services .box .card-title {
  font-size: 20px;
  font-weight: 500;
  margin: 0 10px
}

.services .service-btn {
  border: 1px solid #282f59;
  border-radius: 10px;
  padding: 5px 10px;
  cursor: pointer;
  transform: translateY(120%);
  color: #282f59;
  background-color: transparent;
  display: block;
  transition:  0.3s ease-in-out;
}
.services .box:hover .service-btn {
  border: 1px solid #ffffff;
  color: #ffffff;
}
.services .box .service-btn {
  transform: translateY(0);
}
.services .all-offer a {
  color: #ffffff !important;
}
.services .all-offer i,
.services .all-offer svg,
.services .all-offer path {
  color: #ffffff !important;
}
.postion_customize{
  position: absolute !important;
  bottom: 5px;
  right: 0;
  left: 0;
}
/* End Services */
.owl-carousel .owl-stage{display: flex !important;}
.owl-carousel .owl-item{display: flex !important;}
.article-items {
    display: flex !important;
    flex: 1 0 auto !important;
    height: 100% !important;
}
.aticle-box {
    position: relative !important;
    overflow: hidden !important;
    /* margin-bottom: 80px !important; *//*This is optional*/
    display: flex !important;
    flex-direction: column !important;
    align-items: stretch !important;
}
</style>
@endsection

{{--
@section('section-here')
@if (!empty($sliders))
        <!-- Start  Carousel -->
        <section class="head-carousel">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators indicators">
              <?php $a=0; ?>
              @foreach ($sliders as $slider)
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->iteration-1}}" class="<?php  if($a==0):  ?> active <?php $a++;  endif; ?>"
                aria-current="true" aria-label="Slide {{$loop->iteration}}"></button>
              @endforeach
            </div>
            <div class="carousel-inner  carousel_inner">
              <?php $a=0; ?>
              @foreach ($sliders as $slider)
              <div class="carousel-item <?php  if($a==0):  ?> active <?php $a++;  endif; ?> carousel_item" style="background-image: url('{{asset('storage/images/sliders/'.$slider->image)}}');">
                <div></div>
                <div class="login-container">
                  <div class="login-btn">
                    <a href="{{route("login")}}">تسجيل الدخول</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <button class="carousel-control-prev d-none d-md-flex" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none d-md-flex" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        <!-- End Carousel -->
@endif

@endsection
--}}


@section('content')
<!-- start new div -->
<section class="header-section">
   <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="advantages-content">
            <h2 class="letter">من  
                  <span style="color:#25d4e3;"> الإبداع </span>
                الى 
              <span style="color:#25d4e3;">     
              الإنجاز
              </span>
              ، نحن شريكك في النجاح
            </h2><br><br>
            <p class="header-desc">
              <!-- إذا كنت تسعى لتحقيق النجاح في عالم الأعمال، فشركتنا هي الشريك المثالي لك. -->
                
                نوفر لعملائنا منصة الكترونية سهلة الاستخدام تمكنهم من الوصول لخدماتنا بكل سهولة ويسر، وذلك بفضل فريقنا المحترف والمتميز في هذا المجال
                كما يمكن لعملائنا الاستفادة من خدمة الاستقبال الفعالة والسريعة لخدماتهم، بالإضافة إلى خدمة التواصل الفوري التي نقدمها عبر المنصة والتي تتيح لهم التواصل بسهولة مع فريق الدعم الفني.
            </p><br><br>
            <div class="d0">              
                <button class="btn login-button" id="btn1">  سجل دخول </button>
                <span class="m-2" style="font-size:25px;">   او  </span>
                <button class="btn register-now" id="btn2"> سجل الان </button>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="images-container">
              <img src="assets\images\68f17e9b046d7b2f8a3524a6980df60700643d51" alt="target" class="img1">  
              <img src="assets\images\ba0ed4ba24b5ad7229cc87f7bd12749b2313abab" alt="target" class="img2">
          </div>
        </div>
      </div>
   </div>
</section>
<!-- end new div -->
<!-- Start Advantages -->
<section class="advantages" id="advantages">

    <div class="container">

      <h2 class="h2">مميزاتنا</h2>

      <div class="container">
        <div class="row">

          <div class="col-lg  card card1">
            <img src="assets/images/advantages/target 1.svg" alt="target"class="image1"><br>
            <div class="card-title pe-3" style="color:#25d4e3;">التواصل الفوري</div>
            <p class="m-0 pe-3"> دعم واستجابة فورية عبر منصة الشركة</>
            <p class=" m-0 pe-3"></p>
          </div>
          
          <div class="col-lg card card2">
            <img src="assets/images/advantages/contact.svg" width="80px" height="80px" alt="contact">
            <div class="card-title pe-3"  style="color:#25d4e3;">متابعة العميل</div>
            <p class="m-0 pe-3">تفاصيل تفاصيل</p>
            <p class=" m-0 pe-3">تفاصيل تفاصيل</p>
          </div>
          
          <div class="col-lg card card3">
            <img src="assets/images/advantages/fast-time.svg" alt="fast-time" class="image3">
            <div class="card-title pe-3"  style="color:#25d4e3;">السرعة</div>
            <p class="m-0 pe-3">تفاصيل تفاصيل</p>
            <p class=" m-0 pe-3">تفاصيل تفاصيل</p>
          </div>

        </div>
      </div>
      <br><br><br>
    </div>
  </section>
  <!-- End Advantages -->
  <!-- start serveces -->

  <div class="container con2"><br>
    <center><h1> ما نقدمه </h1></center><br>
    <center><p> المجالات التي تشملها خدماتنا و باقاتنا</p></center><br>
    <div class="container row">

      <div class="col-lg-6  col1"> 
        <div class="i1" ><i class="fa-solid fa-mobile-screen fa-bounce"></i></div>
        <div>
          <h4> تصميم تطبيقات الموبايل</h4>
          <P> نص يمكن استبداله في نفس المساحة </P>
        </div>
      </div>

      <div class="col-lg-6 col2" > 
        <div class="i2 text-danger"><i class="fa-solid fa-cloud"></i>  </div>
        <div>
          <h4> تصميم تطبيقات الويب </h4>
          <P> نص يمكن استبداله في نفس المساحة </P>
        </div>
      </div>

      <div class="col-lg-6 col3"> 
        <div class="i3" ><i class="fa-solid fa-vr-cardboard"></i></div>
        <div>
          <h4> تصميم تطبيقات ال  VR </h4>
          <P> نص يمكن استبداله في نفس المساحة </P>
        </div>
      </div>

      <div class="col-lg-6 col-12" > 
        <div class="i4 text-info "><i class="fa-solid fa-rocket" style="transform:rotateZ(-110deg);"></i></div>
        <div>
          <h4> خدمات seo </h4>
          <P> نص يمكن استبداله في نفس المساحة </P>
        </div>
      </div>
    </div><br>
  </div>
  <!-- End serveces -->

@include("front.vendor.service-home")

@include("front.vendor.package-home")
  
  <!-- Start Contact Us -->
  <section class="contact-us" id="contact-us">
    <div class="container con3"><br>
      <div class="row align-items-center m-5">
        <h1 > تواصل معنا </h1>
        <p > هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة <br> لقد تم توليد هذا النص من مولد النص العربي  </p>
        <div class="col-md-5">
          <div class="mt-5">
            <form method="post" id="contact_form" action="{{ route('contactstore') }}" >
                @csrf
              <div class="mb-5">
                <input type="text" id="name" name="name" placeholder="الإسم" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                  <div id="invalid-feedback1" class="badge bg-danger"></div>
              </div>
              <div class="mb-5">
                <input type="email" id="email" name="email" placeholder="البريد الإلكتروني" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                  <div id="invalid-feedback3" class="badge bg-danger"></div>
              </div>
              <div class="mb-5">
                <input type="text" id="phone" name="phone" placeholder="رقم الهاتف" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                  <div id="invalid-feedback2" class="badge bg-danger"></div>
              </div>
              <textarea class="form-control" id="message" name="message" placeholder="محتوى الرسالة" id="floatingTextarea2"
                style="height: 100px"></textarea>
                <div id="invalid-feedback4" class="badge bg-danger"></div>
                <div class="spinner-border text-success mt-2 d-none" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              <button type="submit" class="btn w-100 mt-5 submit">إرسال</button>
            </form>
          </div>
        </div>
        <div class="col-md-7">
          <img src="assets\images\contact-us\contact-us.png" class="img-fluid" alt="contact-us">
        </div>
        <div id="i5"> 
          <strong> +965 254 542 987 </strong> <i class="fa-solid fa-phone"></i> 
        </div>
        <div id="i7">
          <strong> info@iquick.site </strong> <i class="fa-regular fa-envelope"></i> 
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Us -->
@endsection
@section('ajax_front')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
        $('#contact_form').on('submit', function(e) {
            alert('hi');
            e.preventDefault();
            $("#btnSubmit").attr("disabled", true);
            const name = $('#name').val();
            const email = $('#email').val();
            const phone = $('#phone').val();
            const message = $('#message').val();
            
            let url = $(this).attr('action');
            console.log(url)
            $.ajax({
               // url: `{{ url('contactstore') }}`,
                url: url ,
                type: "post",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
                },
                beforeSend: function () {
                $('.spinner-border').removeClass('d-none')
            },
                success: function(result) {
                    //console.log(result);
                    $("#btnSubmit").attr("disabled", false);
                    swal(result.success, {
                        icon: "success",
                    });
                    $("#contact_form")[0].reset();
                    $('#invalid-feedback1').text('');
                    $('#invalid-feedback2').text('');
                    $('#invalid-feedback3').text('');
                    $('#invalid-feedback4').text('');
                },
                error: function(errorsub) {
                    $("#btnSubmit").attr("disabled", false);
                    if (errorsub) {
                        if (errorsub.responseJSON.errors.name) {
                            $('#invalid-feedback1').text('');
                            $('#invalid-feedback1').append(errorsub.responseJSON.errors.name);
                        }else{
                            $('#invalid-feedback1').text('');
                        }
                        if (errorsub.responseJSON.errors.email) {
                            $('#invalid-feedback2').text('');
                            $('#invalid-feedback2').append(errorsub.responseJSON.errors.email);
                        }else{
                            $('#invalid-feedback2').text('');
                        }
                        if (errorsub.responseJSON.errors.phone) {
                            $('#invalid-feedback3').text('');
                            $('#invalid-feedback3').append(errorsub.responseJSON.errors.phone);
                        }else{
                            $('#invalid-feedback3').text('');
                        }
                        if (errorsub.responseJSON.errors.message) {
                            $('#invalid-feedback4').text('');
                            $('#invalid-feedback4').append(errorsub.responseJSON.errors.message);
                        }else{
                            $('#invalid-feedback4').text('');
                        }                              
                    }
                },
            complete: function () {
                $('.spinner-border').addClass('d-none')
            },
            });
        });
    </script>

    
@endsection


