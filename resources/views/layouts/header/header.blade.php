  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top bg-danger" style="direction:rtl;height:66px">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/') }}" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" >
          الرئيسية
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">

        <ul class="navbar-nav" style="margin-top: 22px;">

            <div class="btn-group">
                <a  type='button' class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;font-family: 'Cairo', sans-serif;">
                    المراجعين
                </a>
                <div class="dropdown-menu">
                    @if (isset($muslims) && $muslims->count()>0)
                        @foreach ($muslims as $muslim)
                            <a class="dropdown-item" href="{{ route('website.muslims',$muslim->id) }}">{{ $muslim->name }}</a>
                        @endforeach

                    @endif

                </div>
            </div>

            <div class="btn-group">
                <a  type='button' class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;font-family: 'Cairo', sans-serif;">
                الاقسام
                </a>
                <div class="dropdown-menu">
                    @if (isset($categories) && $categories->count()>0)
                        @foreach ($categories as $category)
                            <a class="dropdown-item" href="{{ route('website.category',$category->id) }}">{{ $category->name }}</a>
                        @endforeach

                    @endif

                </div>
            </div>

            @guest
            @if (Route::has('register'))
            <div class="btn-group">
                <a href="{{ route('register') }}" type='button' style="color: white;font-family: 'Cairo', sans-serif;">
                    مستخدم جديد
                </a>
            </div>
            @endif
            <div class="btn-group">
                <a href="{{ route('login') }}" type='button' style="color: white;font-family: 'Cairo', sans-serif;">
                التسجيل
                </a>
            </div>
            @else

            <div class="btn-group">
                <a  type='button' class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" style="color: white;font-family: 'Cairo', sans-serif;">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('home') }}">الرئيسية</a>
                        <a class="dropdown-item" href="{{ route('website.setting', ['id'=>Auth::user()->id,'name'=>trim(str_replace(' ','_',Auth::user()->name))]) }}">الاعدادت</a>

                        <a class="dropdown-item"  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">الخروج</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                </div>
            </div>

        @endauth
        <div class="btn-group" style="width: 75px;
        height: -9px;
        padding-bottom: 16px;
        margin-top: -9px;">

            <form class="form-inline ml-auto" action="{{ route('videosearch') }}" method="GET">

                <div class="form-group has-white">
                  <input type="text" class="form-control" placeholder="بحث" name="search" id="search" style="padding-right: 11px !important;">
                </div>
            </form>
        </div>

        </ul>

      </div>
    </div>
  </nav>
  <!-- End Navbar -->
