<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dharan Kitchen | Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div  class="brand-link">
      <i class="fas fa-user-shield"></i>
      <span class="brand-text font-weight-light">Dharan Kitchen Admin</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              
              {{-- Venue Menu --}}
               <li class="nav-item has-treeview">
                <a href="{{ route('venue.index') }}" class="nav-link">
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
              <div  class="nav-item has-treeview">
                <a href="{{ route('category.index') }}" class="nav-link">
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
              <div  class="nav-item has-treeview">
                <a href="{{ route('menu.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-hamburger"></i>
                  <p>
                      Menu Item
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
                      <p>Item List</p>
                    </a>
                  </li>
                </ul>
              </div>
              {{-- End Food Menu --}}

              {{-- Room Type Menu --}}
              <div  class="nav-item has-treeview">
                <a href="{{ route('roomtype.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-person-booth"></i>
                  <p>
                      Room Category
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('roomtype.create') }}" class="nav-link">
                      <i class="fas fa-door-closed nav-icon"></i>
                      <p>Add Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('roomtype.index') }}" class="nav-link">
                      <i class="fas fa-door-open nav-icon"></i>
                      <p>Category List</p>
                    </a>
                  </li>
                </ul>
              </div>
              {{-- End Room Type Menu --}}
              
              {{-- Room Menu --}}
              <div  class="nav-item has-treeview">
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
              </div>
              {{-- End Room Menu --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-calendar-alt"></i>
              <p class="ml-2">
                  Events
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
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
    <strong>Copyright &copy; 2014-2021 <a href="https://codeit.com.np/" target="_blank">Code-IT</a>.</strong> All rights reserved.
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
</body>
</html>
