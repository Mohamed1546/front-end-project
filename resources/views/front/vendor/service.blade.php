
@if (!empty($service))
     <!-- Start Packages -->
 <section class="services py-5">
  <div class="container">
    <div class="d-flex flex-column align-items-center justify-content-center">
      <h2>@lang('messages.service')</h2><br><br>
      <h6 class="w-50 text-center lh-base"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل
        تفاصيل تفاصيل تفاصيل تفاصيل</h6>
    </div><br><br>
    <form action="{{route("search/services")}}" method="post">
      @csrf
    <div class="search-bar">
      <div class="search-container">
        <button class="d"> <i class="fa-solid fa-magnifying-glass"></i> </button>
        <input type="search" name="name" name="search" class="serach-input" placeholder="  ابحث هنا ...." >
        <button class="search-btn"> <i class="fa-solid fa-filter"></i> </button>
      </div>
    </div>
    </form>

    <!-- popup window -->
    <div id="dar">
      <form class="pop"><br><br><br><br>
      
        <div class="card" id="card"><br> 
          <img src="assets\images\services\services.svg" class="img" alt="image">
          <div class="card-body">
            <h5 class="card-title"> خدمة مميزة </h5>
            <span> 
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i> 4.9</span> 
            <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
            <p> السعر <span> 100$ </span></p>
            <a href="#" class="buing"> شراء </a><br><br>
            <a href="#" class="canselling" onclick="can()"> الغاء </a>
          </div>
        </div>
      </form>
    </div>

    <!-- services --><br><br>
    <div class="container" style="display:flex">

        <div class="row ro">
          <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;"><br>
              <img src="assets\images\services\services.svg" class="img" alt="image">
              <div class="card-body">
                <h5 class="card-title"> خدمة مميزة </h5>
                <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
                <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn" onclick="btn()" id="btn"> عرض التفاصيل </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4  mb-3">
            <div class="card" style="width: 18rem;"><br>
              <img src="assets\images\services\services.svg" class="img" alt="image">
              <div class="card-body">
                <h5 class="card-title"> خدمة مميزة </h5>
                <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
                <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn" onclick="btn()" id="btn"> عرض التفاصيل </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4  mb-3">
            <div class="card" style="width: 18rem;"><br>
              <img src="assets\images\services\services.svg" class="img" alt="image">
              <div class="card-body">
                <h5 class="card-title"> خدمة مميزة </h5>
                <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
                <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn" onclick="btn()" id="btn"> عرض التفاصيل </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4  mb-3">
            <div class="card" style="width: 18rem;"><br>
              <img src="assets\images\services\services.svg" class="img" alt="image">
              <div class="card-body">
                <h5 class="card-title"> خدمة مميزة </h5>
                <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
                <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn" onclick="btn()" id="btn"> عرض التفاصيل </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4  mb-3">
            <div class="card" style="width: 18rem;"><br>
              <img src="assets\images\services\services.svg" class="img" alt="image">
              <div class="card-body">
                <h5 class="card-title"> خدمة مميزة </h5>
                <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
                <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn" onclick="btn()" id="btn"> عرض التفاصيل </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4  mb-3">
            <div class="card" style="width: 18rem;"><br>
              <img src="assets\images\services\services.svg" class="img" alt="image">
              <div class="card-body">
                <h5 class="card-title"> خدمة مميزة </h5>
                <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
                <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn" onclick="btn()" id="btn"> عرض التفاصيل </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4  mb-3">
            <div class="card" style="width: 18rem;"><br>
              <img src="assets\images\services\services.svg" class="img" alt="image">
              <div class="card-body">
                <h5 class="card-title"> خدمة مميزة </h5>
                <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
                <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn" onclick="btn()" id="btn"> عرض التفاصيل </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4  mb-3">
            <div class="card" style="width: 18rem;"><br>
              <img src="assets\images\services\services.svg" class="img" alt="image">
              <div class="card-body">
                <h5 class="card-title"> خدمة مميزة </h5>
                <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
                <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn" onclick="btn()" id="btn"> عرض التفاصيل </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4  mb-3">
            <div class="card" style="width: 18rem;"><br>
              <img src="assets\images\services\services.svg" class="img" alt="image">
              <div class="card-body">
                <h5 class="card-title"> خدمة مميزة </h5>
                <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
                <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn" onclick="btn()" id="btn"> عرض التفاصيل </a>
              </div>
            </div>
          </div>
        </div>

    </div>

    <!-- Start  Boxes -->
    <div class="row ">
      @foreach ($service as $servic)
      <div class="col-sm-12  col-md-6 col-lg-3 col-lg_custom-3 d-flex">
        <div class="box mt-3">
          <div class="card">
            <div class="d-flex justify-content-center py-3">
              <img src="{{asset('./assets/images/services/services.svg')}}" class="" alt="services">
            </div>
            <div class="card-title text-center mb-3">
              {{$servic->name}}          
                </div>
            <p class="card-text mx-2"><?php echo Str::limit($servic->small_description,600); ?>
              <a class="dropdown-item view_all_description" style="    text-decoration: revert;
              text-align: end;" href="#!"
              data-description="{{ $servic->description }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">@lang('admin.view_all')</a>
            </p>
            <div class="postion_customize">
                <div class="text-success">
                  <hr />
                </div>
                <div class="d-flex flex-wrap pb-2 justify-content-between mx-3">
                  <a href="{{route("user.services")}}" class="service-btn">@lang('admin.add_new_service')</a>
                  <h6 class="card-title text-center text-warning mb-0 fs-4 fw-500">{{ $servic->price }} $</h6>
                </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
  
    </div>
    <!-- End  Boxes -->
  </div>
</section>
<!-- End Packages -->
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="view_all_description_4">

      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>
@endif
<script>
  function btn() {
    document.querySelector('#dar').style.display="block";
  }
  function can() {
    document.querySelector('#dar').style.display="none";
  }

  function b1() {
  window.location.reload(true);
  }
  function b2() {
    

    document.querySelector('body').style.background="linear-gradient( rgb(87, 255, 255) ,rgb(255, 255, 255) , rgb(255, 255, 255) )";
    document.querySelector('body').style.color="black";

    document.querySelector('.b2').style.background="white";
    document.querySelector('.b2').style.filter="drop-shadow(0px 0px 0px black)";
    document.querySelector('.b1').style.color="black";
    document.querySelector('.b1').style.background="black";
    document.querySelector('.night_mood').style.background="white";
    var bsst = document.querySelector('.card');



    document.querySelector('.services h2').style.color="black";
    document.querySelector('h6').style.color="black";
    document.querySelector('.serach-input').style.background="white";
    document.querySelector('.search-btn').style.color="white";
    document.querySelector('.search-btn').style.background="black";
    
    //footer
    document.querySelector('footer').style.color="black";
    document.querySelector('.fo_ce').style.color="black";
    
    for(var i=0 ; i<bsst.length ; i++){
    bsst[i].style.background="white";
    }
    
    
  }
</script>
@section('ajax_front')
    <script>
      setInterval(function() {
          $('.view_all_description').on('click', function() {
              const view_all_description1 = $(this).attr("data-description");
              $("#view_all_description_4").text(view_all_description1);
          });
      }, 500);
    </script>
@endsection