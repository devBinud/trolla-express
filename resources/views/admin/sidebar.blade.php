 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
     <div class="app-brand demo">
         <a href="{{ url('admin/dashboard') }}" class="app-brand-link">
             <img src="{{ asset('assets/logo/logo1.jpg') }}" alt="logo" style="width:150px;height:50px;">
             {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2 text-capitalize">Trolla Express</span> --}}
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1 ps ps--active-y">
         <!-- Dashboard -->
         <li class="menu-item @if ($page == 'dashboard') active @endif">
             <a href="{{ url('admin/dashboard') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-home-circle"></i>
                 <div data-i18n="Analytics">Dashboard</div>
             </a>
         </li>


         <li class="menu-header small text-uppercase">
             <span class="menu-header-text">Blog</span>
         </li>
         <li class="menu-item @if (in_array($page, ['blog', 'add-category', 'all-category', 'add-blog', 'all-blog'])) active open @endif">
             <a class="menu-link menu-toggle nav-link" data-bs-target="#blognav" data-bs-toggle="collapse">
                 <i class="menu-icon tf-icons bx bx-detail"></i>
                 <div data-i18n="Layouts">Blog</div>
             </a>

             <ul id="blognav" class="menu-sub nav-content collapse">

                 <li class="menu-item @if ($page == 'add-category') active @endif">
                     <a href="{{ url('blog?action=add-blog-cattegory') }}" class="menu-link">
                         <div data-i18n="Without menu">Add New Category</div>
                     </a>
                 </li>

                 <li class="menu-item @if ($page == 'all-category') active @endif">
                     <a href="{{ url('blog?action=all-blog-category') }}" class="menu-link">
                         <div data-i18n="Without menu">View All Category</div>
                     </a>
                 </li>

                 <li class="menu-item @if ($page == 'blog') active @endif">
                     <a href="{{ url('blog?action=add-blog') }}" class="menu-link">
                         <div data-i18n="Without menu">Add New Blog</div>
                     </a>
                 </li>

                 <li class="menu-item @if ($page == 'all-blog') active @endif">
                     <a href="{{ url('blog?action=all-blog') }}" class="menu-link">
                         <div data-i18n="Without menu">View All Blogs</div>
                     </a>
                 </li>

             </ul>
         </li>
         <li class="menu-item mt-5">
             <a href="{{ url('logout') }}" class="menu-link text-danger text-bold">
                 <i class="bx bx-power-off me-2"></i>
                 <div>Logout</div>
             </a>
         </li>

         <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
             <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
         </div>
         <div class="ps__rail-y" style="top: 0px; height: 326px; right: 4px;">
             <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 119px;"></div>
         </div>
     </ul>
 </aside>
