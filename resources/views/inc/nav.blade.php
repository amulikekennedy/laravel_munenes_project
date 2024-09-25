<div class="right-part">
   <nav class="main-nav">
      <div class="toggle-mobile-but">
         <a href="#" class="mobile-but" >
            <div class="lines"></div>
         </a>
      </div>
      <ul class="main-menu list-inline">
         <li><a class="scroll list-inline-item" href="/">Home</a></li>
         <li><a class="scroll list-inline-item" href="/about">About</a></li>
         {{-- <li><a class="scroll list-inline-item" href="/discography">Projects</a></li> --}}
         <li><a class="scroll list-inline-item" href="/events">Events</a></li>
         <li><a class="scroll list-inline-item" href="/posts">Blog</a></li>
         <li><a class="scroll list-inline-item" href="/#contact">Contact</a></li>
         @guest
         <li class="block-helper"></li>
         @else
         <li class="block-helper">
            <a class="nav-link dropdown-toggle" onclick="toggleMenu()" data-bs-toggle="dropdown" role="button" aria-expanded="false">
               <span class="user-ico">
                  <i class="icon-user" ></i>
               </span>
            </a>
            <div class="sub-menu-wrap" id="subMenu">
               <div class="sub-menu"> 
                  <div class="user-info">
                     <img src="/img/user.png">
                     <h5>{{ Auth::user()->name }}</h5>
                  </div>
                  <hr>
                  <a href="/dashboard" class="sub-menu-link" >
                     <img src="/img/setting.png">
                     <p>Dashbord</p>
                  </a>
  
                  <a href="{{ route('logout') }}" class="sub-menu-link" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                     <img src="/img/logout.png">
                     <p>{{ __('Logout') }}</p>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </a>
                  
               </div>
            </div>
            @endguest
         </li>
        <li class="block-helper">
           <a target="_blank" href="https://tinypesa.com/themuneneslive" class="scroll"><span ><i class="icon-heart-1"></i></span></a>
        </li>
      </ul>
      
   </nav>
</div>


