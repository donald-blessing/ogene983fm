 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
 <aside class="app-sidebar">
     <div class="app-sidebar__user">
         <img class="app-sidebar__user-avatar" src="{{ auth()->user()->avatar }}" alt="User Image">
         <div>
             <p class="app-sidebar__user-name">{{ explode(" ",auth()->user()->name)[0] }}</p>
             <p class="app-sidebar__user-designation">{{ ucwords(auth()->user()->getRoleNames()->first() ?? 'Member') }}</p>
         </div>
     </div>
     <ul class="app-menu">
         <li><a class="app-menu__item active" href="{{ url('/dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">User Dashboard</span></a></li>
         
         @if(auth()->user()->canAccessPanel(app(\Filament\Panel::class)))
         <li>
             <a class="app-menu__item" href="{{ url('/admin') }}"><i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Filament Admin</span></a>
         </li>
         @endif
     </ul>
 </aside>
