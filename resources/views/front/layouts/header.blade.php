@include('front.layouts.head')
<!-- preloader start -->
<header>


    
    <div class="header1">
      <!-- image -->
      <img src="/assets/images/FINAL-2.png" alt="image" class="img_header">
      <button class="btn text-white btnv" type="button" data-bs-toggle="offcanvas"
       data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
        <i class="fa-solid fa-bars"></i>
      </button>
          
      <!-- Start Navbar lg -->
      <div class="ul">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route("home")}}" class="aa">@lang('messages.home')</a>
          </li><hr>
          <li class="nav-item">
            <a class="nav-link" href="{{route("home")}}#advantages">@lang('messages.advantages')</a>
          </li><hr>
          <li class="nav-item">
            <a class="nav-link" href="{{route("package")}}">@lang('messages.package')</a>
          </li><hr>
          <li class="nav-item">
            <a class="nav-link" href="{{route("service")}}">@lang('messages.service')</a>
          </li><hr>
          <li class="nav-item">
            <a class="nav-link" href="{{route("home")}}#contact-us">@lang('messages.contact')</a>
          </li><hr>
          <div class="bottons-container">
              <button class="btn register-now btnn1">سجل الان</button>
              <button class="btn login-button btnn2"> تسجيل الدخول</button>
          </div>
          <li class="nav-item">
            <div class="night_mood">
              <button onclick="b1()" class="b1"> 
              <i class="fa-solid fa-moon"></i><span>*</span>
              </button>
              <button onclick="b2()" class="b2"></button>
            </div>
          </li><hr>
        </ul>
      </div>
    </div>
    <!-- End Navbar lg -->

    
    <!-- Start Navbar sm -->

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="co1">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
    </button>
  </div>
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="{{route("home")}}">@lang('messages.home')</a>
    </li><hr>
    <li class="nav-item">
      <a class="nav-link" href="{{route("home")}}#advantages">@lang('messages.advantages')</a>
    </li><hr>
    <li class="nav-item">
      <a class="nav-link" href="{{route("package")}}">@lang('messages.package')</a>
    </li><hr>
    <li class="nav-item">
      <a class="nav-link" href="{{route("service")}}">@lang('messages.service')</a>
    </li><hr>
    <li class="nav-item">
      <a class="nav-link" href="{{route("home")}}#contact-us">@lang('messages.contact')</a>
    </li><hr>
    <li class="nav-item">
      <div class="night_mood">
        <button onclick="b11()" class="b11"> 
        <i class="fa-solid fa-moon"></i><span>*</span>
        </button>
        <button onclick="b22()" class="b22"></button>
        
      </div>
    </li><hr>
  </ul>
  
      @guest
      @if (Route::has('login'))
      <div class="d-flex justify-content-center">
          <a class="btn nav-btn_sign_now" href="{{ route('login') }}">@lang('messages.Login')</a>
      </div>
      @endif
    @else
      @if (Auth::user()->type == 'admin')
      <div class="d-flex justify-content-center">
          <a href="{{ route('admin.dash') }}" style="    color: white;
          font-size: 21px;" target="blank" class="search-button mx-3"> <i
                  class="fas fa-home"></i>
          </a>
      </div>
      @else
      <div class="d-flex justify-content-center">
          <a href="{{ route('user.profile') }}" style="    color: white;
          font-size: 21px;" target="blank" class="search-button mx-3"> <i
                  class="fas fa-user"></i>
          </a>
      </div>
      @endif
      <div class="d-flex justify-content-center">
        <a class="dropdown-item search-button" style="    color: white;
        font-size: 21px;" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out-alt"></i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </div>
    @endguest
    {{-- <div class="d-flex justify-content-center">
    <a href="{{route("login")}}" class="btn nav-btn_sign_now">سجل الآن</a>
    </div> --}}
        
</div>
<script>
  function b11() {
    window.location.reload(true);
  }
  function b22() {
    document.querySelector('.offcanvas .b22').style.background="white";
    document.querySelector('.offcanvas .b22').style.filter="drop-shadow(0px 0px 0px black)";
    document.querySelector('.offcanvas .b11').style.color="black";
    document.querySelector('.offcanvas .b11').style.background="black";
    document.querySelector('.offcanvas .night_mood').style.background="white";

    document.querySelector('.offcanvas').style.background="linear-gradient( -60deg , rgb(255, 230, 255) , rgb(255, 255, 255) ,rgb(255, 255, 255) ,  rgb(190, 255, 255) )";
    let fo = document.querySelector(".nav-link");
    for(var i=0 ; i<fo.length ; i++){
    fo[i].style.color="black";
    }
  }

  
</script>

    <!-- End Navbar sm -->

    <!-- Start  Carousel -->
    @yield('section-here')
    <!-- End Carousel -->
</header>