@if (!empty($service))
<!-- Start Services -->
<section class="services py-5" >
  <div class="container">
    <!-- Start Main Title -->
    <div class="d-flex flex-column align-items-center justify-content-center">
    <h2 >@lang('messages.service')</h2><br><br>
    <h6 class="lh-base se_h"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل
      تفاصيل تفاصيل تفاصيل تفاصيل</h6>
  </div>
  <div class="d-flex align-items-center  justify-content-end se" >
    <a href="{{route('service')}}" style="color:gold;">
      <h6>   عرض جميع الخدمات <i class="fa-solid fa-chevron-left fa-xs"></i></h6>
    </a>
  </div><br><br>
  <!-- End Main Title -->
  <!-- Start  Boxes -->
  <div class="row ">
  @foreach ($service as $servic)
  <div class="col-sm-12  col-md-6 col-lg-3 col-lg_custom-3 d-flex">
    <div class="box mt-3">
        <div class="card">
          <div class="d-flex justify-content-center py-3">
            <img src="./assets/images/services/services.svg" alt="services">
          </div>
          <div class="card-title text-center mb-3">
            {{$servic->name}} 
          </div>
          <p class="card-text mx-2"><?php echo Str::limit($servic->small_description,600); ?>
            <a class="dropdown-item view_all_description" style="    text-decoration: revert;
            text-align: end;" href="#!"
            data-description="{{ $servic->description }}" data-bs-toggle="modal" data-bs-target="#exampleModal1">@lang('admin.view_all')</a>
          </p>
          <div class="postion_customize">
            <div class="text-success">
              <hr />
            </div>
            <div class="d-flex flex-wrap pb-2 justify-content-between mx-3">
              {{-- <div class="rate">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span>4.9</span>
              </div> --}}
              <a href="{{route("service")}}" class="service-btn">@lang('admin.services')</a>
              <h6 class="card-title text-center text-warning mb-0 fs-4 fw-500">{{ $servic->price }} $</h6>
            </div>
          </div>
        </div>
      </div>
  </div>
  @endforeach
  </div>
  <!-- End  Boxes -->
  <!-- Start All offer -->
  

<div class="container ser">
  <div class="owl-carousel owl-theme">
    
    <div class="item">
      <div class="card" style="width: 18rem;"><br>
        <img src="assets\images\services\services.svg" class="img" alt="image">
        <div class="card-body">
          <h5 class="card-title"> خدمة مميزة </h5>
          <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
          <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn"> عرض التفاصيل </a>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="card" style="width: 18rem;"><br>
        <img src="assets\images\services\services.svg" class="img" alt="image">
        <div class="card-body">
          <h5 class="card-title"> خدمة مميزة </h5>
          <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
          <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn"> عرض التفاصيل </a>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="card" style="width: 18rem;"><br>
        <img src="assets\images\services\services.svg" class="img" alt="image">
        <div class="card-body">
          <h5 class="card-title"> خدمة مميزة </h5>
          <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
          <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn"> عرض التفاصيل </a>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="card" style="width: 18rem;"><br>
        <img src="assets\images\services\services.svg" class="img" alt="image">
        <div class="card-body">
          <h5 class="card-title"> خدمة مميزة </h5>
          <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
          <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn"> عرض التفاصيل </a>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="card" style="width: 18rem;"><br>
        <img src="assets\images\services\services.svg" class="img" alt="image">
        <div class="card-body">
          <h5 class="card-title"> خدمة مميزة </h5>
          <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
          <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn"> عرض التفاصيل </a>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="card" style="width: 18rem;"><br>
        <img src="assets\images\services\services.svg" class="img" alt="image">
        <div class="card-body">
          <h5 class="card-title"> خدمة مميزة </h5>
          <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
          <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn"> عرض التفاصيل </a>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="card" style="width: 18rem;"><br>
        <img src="assets\images\services\services.svg" class="img" alt="image">
        <div class="card-body">
          <h5 class="card-title"> خدمة مميزة </h5>
          <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
          <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn"> عرض التفاصيل </a>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="card" style="width: 18rem;"><br>
        <img src="assets\images\services\services.svg" class="img" alt="image">
        <div class="card-body">
          <h5 class="card-title"> خدمة مميزة </h5>
          <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
          <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn"> عرض التفاصيل </a>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="card" style="width: 18rem;"><br>
        <img src="assets\images\services\services.svg" class="img" alt="image">
        <div class="card-body">
          <h5 class="card-title"> خدمة مميزة </h5>
          <p class="card-text p"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل .....</p>
          <span> <i class="fa-solid fa-star"></i> 4.9</span>  <a href="#" class="btn"> عرض التفاصيل </a>
        </div>
      </div>
    </div>

  </div>
</div>

  
  <!-- End All offer -->
</section>
<!-- End Services -->
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
