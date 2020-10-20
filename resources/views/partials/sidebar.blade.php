  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{url('/admin')}}">
                <img src="{{asset('logo.png')}}" style="width:500px; height:500px" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                    data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin')}}" role="button" aria-expanded="true"
                            aria-controls="navbar-dashboards">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#data-master" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="data-master">
                            <i class="ni ni-collection text-red"></i>
                            <span class="nav-link-text">Data Master</span>
                        </a>
                        <div class="collapse" id="data-master" style="">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/ambulance')}}" role="button"
                                        aria-expanded="true" aria-controls="navbar-dashboards">
                                        <span class="nav-link-text">Ambulance</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/medical-equipment')}}" role="button"
                                        aria-expanded="true" aria-controls="navbar-dashboards">
                                        <span class="nav-link-text">Medical Equipment</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/company')}}" role="button"
                                        aria-expanded="true" aria-controls="navbar-dashboards">
                                        <span class="nav-link-text">Company</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/bank-account')}}" role="button"
                                        aria-expanded="true" aria-controls="navbar-dashboards">
                                        <span class="nav-link-text">Bank Account</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/customer')}}" role="button"
                                        aria-expanded="true" aria-controls="navbar-dashboards">
                                        <span class="nav-link-text">Customer</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#data-order" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="data-order">
                            <i class="ni ni-collection text-blue"></i>
                            <span class="nav-link-text">Data Order</span>
                        </a>
                        <div class="collapse" id="data-order" style="">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/order')}}" role="button"
                                        aria-expanded="true" aria-controls="navbar-dashboards">
                                        <span class="nav-link-text">Order</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>