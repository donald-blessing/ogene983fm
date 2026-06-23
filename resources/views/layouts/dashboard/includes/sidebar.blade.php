 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
 <aside class="app-sidebar shadow-2xl">
     <div class="app-sidebar__user p-8 border-b border-white/5">
         <div class="relative group">
             <div class="absolute inset-0 bg-primary/20 blur-xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
             <img class="app-sidebar__user-avatar relative z-10 ring-2 ring-primary/20" src="{{ auth()->user()->avatar }}" alt="User Image">
         </div>
         <div class="ml-4">
             <p class="app-sidebar__user-name font-display text-white">{{ explode(" ",auth()->user()->name)[0] }}</p>
             <p class="app-sidebar__user-designation text-secondary text-[10px] font-black uppercase tracking-widest">{{ ucwords(auth()->user()->getRoleNames()->first() ?? 'Member') }}</p>
         </div>
     </div>
     <ul class="app-menu pt-8">
         <li><a class="app-menu__item {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">User Dashboard</span></a></li>
         
         @if(auth()->user()->hasRole(['super admin', 'admin']))
         <li><a class="app-menu__item" href="{{ url('/admin/manage-general-settings') }}"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Global Settings</span></a></li>
         <li><a class="app-menu__item" href="{{ url('/admin/activity-logs') }}"><i class="app-menu__icon fa fa-history"></i><span class="app-menu__label">Audit Logs</span></a></li>
         @endif

         @if(auth()->user()->canAccessPanel(app(\Filament\Panel::class)))
         <li>
             <a class="app-menu__item" href="{{ url('/admin') }}"><i class="app-menu__icon fa fa-rocket"></i><span class="app-menu__label">Advanced Admin</span></a>
         </li>
         @endif

         <li>
             <a class="app-menu__item text-red-400 hover:!text-red-300" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();">
                 <i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Sign Out</span>
             </a>
             <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
         </li>
     </ul>
 </aside>
