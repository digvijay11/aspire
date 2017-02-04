    <aside id="sidebar_left" class="affix container1">
        <!-- Sidebar Left Wrapper  -->
        <div class="sidebar-left-content nano-content col-md-12">
            <!-- Sidebar Menu  -->
            <ul class="nav sidebar-menu ">
                <li class="logo">
                    <a class="navbar-logo-img" href="/">
                        <img src="{{ URL::asset('public/img/logo_small.png')}}" alt="">
                    </a>
                </li>
                <li class="">
                    <a class="accordion-toggle" href="#">
                        <span class="sb-menu-icon fa fa-dashboard"></span>
                        <span class="sidebar-title">Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a class="accordion-toggle" href="#">
                        <span class="sb-menu-icon fa fa-bar-chart-o"></span>
                        <span class="sidebar-title">Manage Leads </span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="index2.html">
                                Overview 
                            </a>
                        </li>
                        <li class="">
                            <a href="sales-stats-products.html">
                                Products 
                            </a>
                        </li>
                        <li class="">
                            <a href="sales-stats-purchases.html">
                                Purchases 
                            </a>
                        </li>
                        <li class="">
                            <a href="sales-stats-clients.html">
                                Clients 
                            </a>
                        </li>
                        <li class="">
                            <a href="sales-stats-general-settings.html">
                                General Settings 
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="@if( Request::is('admin/property-sale/*')) active @endif">
                    <a class="accordion-toggle" href="#">
                        <span class="sb-menu-icon fa fa-building"></span>
                        <span class="sidebar-title">Property</span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ url('admin/property-sale/info') }}"> Property For  Sale</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/property-let/info') }}"> Property To Let</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/property-managed/info') }}"> Property Managed</a>
                        </li>
                     </ul>
               </li>         
               <li class="@if( Request::is('admin/customers/*')) active @endif" >
                    <a class="accordion-toggle" href="#">
                        <span class="sb-menu-icon fa fa-users"></span>
                        <span class="sidebar-title">Customers</span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ url('admin/customers/list/seller') }}">Seller's</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/customers/list/landlord') }}">Landlord's</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/customers/list/buyer') }}">Buyer's</a>
                        </li>
                         <li>
                            <a href="{{ url('admin/customers/list/tenant') }}">Tenant's</a>
                        </li>
                     </ul>
                </li>
                <li class="">
                    <a class="accordion-toggle" href="#">
                        <span class="sb-menu-icon fa fa-trash"></span>
                        <span class="sidebar-title">Archives</span>
                    </a>
                </li>
                <li class="">
                    <a class="accordion-toggle" href="#">
                        <span class="sb-menu-icon fa fa-book"></span>
                        <span class="sidebar-title">PRAS</span>
                    </a>
                </li>
                <li class="">
                    <a class="accordion-toggle" href="#">
                        <span class="sb-menu-icon fa fa-user"></span>
                        <span class="sidebar-title">Users</span>
                    </a>
                </li>
                <li class="">
                    <a class="accordion-toggle" href="#">
                        <span class="sb-menu-icon fa fa-cog"></span>
                        <span class="sidebar-title">Settings</span>
                    </a>
                </li>
               
               <li class="dropdown dropdown-fuse navbar-user pull-right">
                <a href="#" class="dropdown-toggle mln" data-toggle="dropdown">
                    <img src="{{ URL::asset('public/img/avatars/profile_avatar.jpg')}}" alt="avatar">
                    <span class="hidden-xs">
                        <span class="name">Doug Adams</span>
                    </span>
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w230" role="menu">
                    <li class="list-group-item">
                        <a href="#" class="">
                            Account Settings 
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/logout') }}">
                            Logout 
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        </div>

        <!-- /Sidebar Left Wrapper  -->

    </aside>
    <!-- /Sidebar -->

