 <!-- ========== App Menu ========== -->
 <div class="app-menu navbar-menu">
     <!-- LOGO -->
     <div class="navbar-brand-box">
         <a href="{{ route('front.home') }}" target="_blank" class="logo logo-dark">
             <span class="logo-sm">
                 <img src="{{ asset('backend') }}/assets/images/pixcafe.png" alt="" height="22">
             </span>
             <span class="logo-lg text-white">
                 <img src="{{ asset('backend') }}/assets/images/pixcafe.png" alt="" height="45">
                 <span class="ms-1">{{ config('starter.LOGO_TEXT') }}</span>
             </span>
         </a>
         <a href="{{ route('front.home') }}" target="_blank" class="logo logo-light">
             <span class="logo-sm">
                 <img src="{{ asset('backend') }}/assets/images/pixcafe.png" alt="" height="22">
             </span>
             <span class="logo-lg text-white">
                 <img src="{{ asset('backend') }}/assets/images/pixcafe.png" alt="" height="45">
                 <span class="ms-1">{{ config('starter.LOGO_TEXT') }}</span>
             </span>
         </a>
         <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover shadow-none"
             id="vertical-hover">
             <i class="ri-record-circle-line"></i>
         </button>
     </div>

     <div id="scrollbar">
         <div class="container-fluid">

             <div id="two-column-menu">
             </div>
             <ul class="navbar-nav" id="navbar-nav">

                 <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                 <li class="nav-item">
                     <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse"
                         role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                         <i class="ti ti-brand-google-home"></i> <span data-key="t-dashboards">Dashboard</span>
                     </a>
                     <div class="collapse menu-dropdown {{ request()->routeIs('dashboard.*') ? 'show' : '' }}"
                         id="sidebarDashboards">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="{{ route('dashboard.index') }}"
                                     class="nav-link menu-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                                     <span data-key="t-calendar">Home</span> </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('dashboard.elements') }}"
                                     class="nav-link menu-link {{ request()->routeIs('dashboard.elements') ? 'active' : '' }}">
                                     <span data-key="t-calendar">Elements</span> </a>
                             </li>
                         </ul>
                     </div>
                 </li>






             </ul>
         </div>
         <!-- Sidebar -->
     </div>

     <div class="sidebar-background"></div>
 </div>
 <!-- Left Sidebar End -->
