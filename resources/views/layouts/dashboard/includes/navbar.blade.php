 <!-- Navbar-->
 <header class="app-header shadow-lg">
     <a class="app-header__logo font-display flex items-center justify-center py-2" href="{{ route('home') }}">
         <img src="{{ asset('images/logo.png') }}" alt="Ogene 98.3 FM" class="h-10 w-auto">
     </a>
     <!-- Sidebar toggle button-->
     <a class="app-sidebar__toggle hover:!bg-primary/20 transition-colors" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
     
     <!-- Navbar Right Menu-->
     <ul class="app-nav">
         <!-- Notification Menu -->
         <li class="dropdown">
             <a class="app-nav__item hover:!bg-primary/20 transition-colors" href="#" data-toggle="dropdown" aria-label="Show notifications">
                 <i class="fa fa-bell-o fa-lg"></i>
             </a>
             <ul class="app-notification dropdown-menu dropdown-menu-right liquid-glass border-white/10 !bg-bg-dark/95">
                 <li class="app-notification__title text-white/50 text-[10px] uppercase font-bold tracking-widest px-4 py-3">Notifications</li>
                 <div class="app-notification__content">
                     <li>
                         <a class="app-notification__item hover:!bg-white/5 transition-colors border-b border-white/5" href="javascript:;">
                             <span class="app-notification__icon"><i class="fa fa-info-circle fa-lg text-primary"></i></span>
                             <div>
                                 <p class="app-notification__message text-white/80">Welcome to the new Fusion Dashboard!</p>
                                 <p class="app-notification__meta text-[9px] uppercase text-white/30">Just Now</p>
                             </div>
                         </a>
                     </li>
                 </div>
                 <li class="app-notification__footer px-4 py-2"><a href="#" class="text-secondary text-[10px] uppercase font-black">View All</a></li>
             </ul>
         </li>
         
         <!-- User Menu -->
         <li class="dropdown">
             <a class="app-nav__item hover:!bg-primary/20 transition-colors" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                 <i class="fa fa-user-circle-o fa-lg"></i>
             </a>
             <ul class="dropdown-menu settings-menu dropdown-menu-right liquid-glass border-white/10 !bg-bg-dark/95">
                 <li><a class="dropdown-item hover:!bg-primary/10 text-white/80" href="{{ route('user.myProfile', ['user' => auth()->user()->slug]) }}"><i class="fa fa-user fa-lg mr-2"></i> My Profile</a></li>
                 <li>
                     <a href="{{ route('logout') }}" class="dropdown-item hover:!bg-red-500/10 text-red-400" onclick="event.preventDefault(); document.getElementById('logout-form-nav').submit();">
                         <i class="fa fa-sign-out fa-lg mr-2"></i> {{ __('Logout') }}
                     </a>
                     <form id="logout-form-nav" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </li>
             </ul>
         </li>
     </ul>
 </header>
