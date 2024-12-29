<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('components/icon.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light-ml-20px" style="margin-left: 10px"> </span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                @auth('admin')
                    <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
                @endauth
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Service
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('showservices') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('showservicesdetails') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Services Details</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Transaction
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('showorders') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Orders</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('showhistory') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>History</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
    </div>
</aside>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
