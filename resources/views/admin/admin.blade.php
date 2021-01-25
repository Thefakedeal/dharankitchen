<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Dharan Kitchen</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
    <!--Datatable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            @yield('search')
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <div class="brand-link">
                <i class="fas fa-user-shield"></i>
                <span class="brand-text font-weight-light">Dharan Kitchen</span>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="/admin/" class="nav-link">
                                <i class="fas fa-chart-line"></i>
                                <p class="ml-2">
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('query.index') }}" class="nav-link">
                                <i class="fas fa-sticky-note"></i>
                                <p class="ml-2">
                                    Queries
                                </p>
                            </a>
                        </li>
                        {{-- User Menu --}}
                        <li class="nav-item has-treeview">
                            <a href="{{ route('venue.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>
                                    User
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('user.create') }}" class="nav-link">
                                        <i class="fas fa-user-plus nav-icon"></i>
                                        <p>Add User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('user.index') }}" class="nav-link">
                                        <i class="fas fa-suitcase-rolling nav-icon"></i>
                                        <p>User List </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- End User Menu --}}

                        {{-- Venue Menu --}}
                        <li class="nav-item has-treeview">
                            <a href="{{ route('venue.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-hotel"></i>
                                <p>
                                    Venues
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('venue.create') }}" class="nav-link">
                                        <i class="fas fa-key nav-icon"></i>
                                        <p>Add Venues</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('venue.index') }}" class="nav-link">
                                        <i class="fas fa-suitcase-rolling nav-icon"></i>
                                        <p>Venue List </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- End Venue Menu --}}

                        {{-- Category Menu --}}
                        <div class="nav-item has-treeview">
                            <a href="{{ route('category.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-utensils"></i>
                                <p>
                                    Menu Category
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('category.create') }}" class="nav-link">
                                        <i class="fas fa-drumstick-bite nav-icon"></i>
                                        <p>Add Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('category.index') }}" class="nav-link">
                                        <i class="fas fa-hotdog nav-icon"></i>
                                        <p>Category List</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- End Category Menu --}}

                        {{-- Food Menu --}}
                        <div class="nav-item has-treeview">
                            <a href="{{ route('menu.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-hamburger"></i>
                                <p>
                                    Menu Item(s)
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('menu.create') }}" class="nav-link">
                                        <i class="fas fa-cocktail nav-icon"></i>
                                        <p>Add Item</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('menu.index') }}" class="nav-link">
                                        <i class="fas fa-pizza-slice nav-icon"></i>
                                        <p>Item(s) List</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- End Food Menu --}}

                        {{-- Room Type Menu --}}
                        <div class="nav-item has-treeview">
                            <a href="{{ route('roomtype.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-person-booth"></i>
                                <p>
                                    Room(s)
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('roomtype.create') }}" class="nav-link">
                                        <i class="fas fa-door-closed nav-icon"></i>
                                        <p>Add Room</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('roomtype.index') }}" class="nav-link">
                                        <i class="fas fa-door-open nav-icon"></i>
                                        <p>Room(s) List</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- End Room Type Menu --}}

                        {{-- Room Menu --}}
                        {{-- <div class="nav-item has-treeview">
                            <a href="{{ route('room.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-bed"></i>
                                <p>
                                    Room
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('room.create') }}" class="nav-link">
                                        <i class="fas fa-hot-tub nav-icon"></i>
                                        <p>Add Room</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('room.index') }}" class="nav-link">
                                        <i class="fas fa-concierge-bell nav-icon"></i>
                                        <p>Room List</p>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                        {{-- End Room Menu --}}
                        {{-- Booking Menu --}}
                        <div class="nav-item has-treeview">
                            <a href="{{ route('admin.booking.new') }}" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Online Bookings
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.booking.new') }}" class="nav-link">
                                        <i class="fas fa-book-open nav-icon"></i>
                                        <p>New Bookings</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.booking.confirmed') }}" class="nav-link">
                                        <i class="fas fa-atlas nav-icon"></i>
                                        <p>Confirmed Bookings</p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{ route('admin.booking') . '?confirmed=' . '0' }}" class="nav-link">
                                        <i class="fas fa-atlas nav-icon"></i>
                                        <p>Not Confirmed</p>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                        {{-- End Booking Menu --}}

                        {{-- Check In Menu --}}
                        <div class="nav-item has-treeview">
                            <a href="{{ route('checkin.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-person-booth"></i>
                                <p>
                                    Hotel Checkin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('checkin.create') }}" class="nav-link">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>New Checkin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('checkin.index') }}?checkedout=1" class="nav-link">
                                        <i class="fas fa-sign-out-alt nav-icon"></i>
                                        <p>Checked Out</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('checkin.index') }}?checkedout=0" class="nav-link">
                                        <i class="far fa-bookmark nav-icon"></i>
                                        <p>Active Guests</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('checkin.index') }}" class="nav-link">
                                        <i class="fas fa-bookmark nav-icon"></i>
                                        <p>All Guests</p>
                                    </a>
                                </li>



                            </ul>
                        </div>
                        {{-- End Check In Menu --}}

                        {{-- Events Menu --}}
                        <div class="nav-item has-treeview">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-calendar-alt"></i>
                                <p>
                                    Events
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('events.create') }}" class="nav-link">
                                        <i class="far fa-calendar-plus nav-icon"></i>
                                        <p>Add Event</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('events.index') }}" class="nav-link">
                                        <i class="fas fa-calendar nav-icon"></i>
                                        <p>All Events</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                        @auth
                        {{-- End Events Menu --}}
                        {{-- Gallery Menu --}}
                        <div class="nav-item has-treeview">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-images"></i>
                                <p>
                                    Gallery
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('gallery.create') }}" class="nav-link">
                                        <i class="fas fa-camera-retro nav-icon"></i>
                                        <p>Add Gallery</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gallery.index') }}" class="nav-link">
                                        <i class="far fa-images nav-icon"></i>
                                        <p>Galleries</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                        {{-- End Gallery Menu --}}
                        {{-- Place Menu --}}

                        <div class="nav-item has-treeview">
                            <a href="{{ route('places.index') }}" class="nav-link active">
                                <i class="fas fa-map-marked"></i>
                                <p>
                                    Tourist Attraction
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('places.create') }}" class="nav-link">
                                        <i class="fas fa-map-pin nav-icon"></i>
                                        <p>Add Place</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('places.index') }}" class="nav-link">
                                        <i class="far fa-map nav-icon"></i>
                                        <p>Places List</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>

                        <div class="nav-item has-treeview">
                            <a href="{{ route('notice.index') }}" class="nav-link active">
                                <i class="fas fa-exclamation-circle"></i>
                                <p>
                                    Notice
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('notice.create') }}" class="nav-link">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>Add Notice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('notice.index') }}" class="nav-link">
                                        <i class="fas fa-exclamation-triangle nav-icon"></i>
                                        <p>Notice List</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                        
                         <li class="nav-item">
                            <a href="https://dashboard.tawk.to/login" target ="_blank" class="nav-link">
                                <i class="fas fa-comments"></i>
                                <p class="ml-2">
                                    Live Chat
                                </p>
                            </a>
                        </li>
                        
                        {{-- End Place Menu --}}
                            <form action="{{ route('logout') }}" onsubmit="return confirm('Do You Want To Logout?')"
                                method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-block mt-2">
                                    Logout
                                </button>
                            </form>
                        @endauth
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-calendar-alt"></i>
                                <p class="ml-2">
                                    Events

                                </p>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <div class="content">
                @if (session('success'))
                    <div class="alert alert-primary m-2">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('fail'))
                    <div class="alert alert-warning m-2">
                        {{ session('fail') }}
                    </div>
                @endif
                @yield('content')
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">

            </div>
            <!-- Default to the left -->
            <strong class="fw-light">Copyright &copy; 2014-{{ now()->year }} <a href="https://codeitapps.com/" target="_blank">Code-IT</a>.</strong>
            All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    
    <!--Datatable-->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').DataTable();
            $('.ckeditor').ckeditor();
        });
    </script>
</body>

</html>
