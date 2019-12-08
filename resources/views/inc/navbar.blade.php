<div class="header-outs" id="header">
    <!--banner -->
    <div class="header-w3layouts">
       <!--//navigation section -->
       <nav class="navbar navbar-expand-lg navbar-light">
          <div class="hedder-up">
             <h1><a class="navbar-brand" href="index.html">Counselling System</a></h1>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
             <ul class="navbar-nav ">
                <li class="nav-item {{ ($active == 'home') ? 'active' : '' }} ">
                   <a class="nav-link" href="{{ url('/') }}">Home
                    <span  class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item {{ ($active == 'info') ? 'active' : '' }} ">
                   <a href="{{ url('pages/info') }}" class="nav-link ">Info</a>
                </li>
                <li class="nav-item {{ ($active == 'faq') ? 'active' : '' }} ">
                    <a href="{{ url('pages/faq') }}" class="nav-link ">FAQ</a>
                 </li>
                 @if (auth()->check())
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   My Account
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="nav-link " href="{{url('dashboard')}}">Dashboard</a>
                   </div>
                </li>


                <li class="nav-button">
                        <button type="button" class="btn login-hedder"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        >
                        Logout
                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                     </li>
                @else
                <li class="nav-button">
                   <button type="button" class="btn login-hedder" data-toggle="modal" data-target="#exampleModalCenter">
                   Login
                   </button>
                </li>
                @endif
             </ul>
             @if (!auth()->check())
             <div class="both-butns">
                <ul>
                   <li>
                      <button type="button" class="register-hedder"  data-toggle="modal" data-target="#exampleModalCenter2">
                      Register
                      </button>
                   </li>
                </ul>
             </div>
             @endif
          </div>
       </nav>
       <!--//navigation section -->
       <div class="clearfix"> </div>
    </div>
 </div>
