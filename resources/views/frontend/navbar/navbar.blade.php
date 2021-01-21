  <!-- Top Nav Bar -->
  <div class="bg-danger">
    <div class="container">
        <div class="d-flex flex-sm-column flex-md-row p-1 justify-content-md-between align-self-md-center text-white">
            <div>
               <span class="fas fa-map-marker-alt"></span> <span class="fw-light">Dharan,Sunsari Nepal</span> &nbsp;
               <a href="email:info@dharankitchen.com" class="text-white text-decoration-none"><span class="fa fa-envelope"></span></a> &nbsp;
               <a href="tel:+97725521810" class="text-white text-decoration-none"><span class="fa fa-phone-square"></span></a> &nbsp;
               
            </div>
            <div>
                <a href="#  "><span class="fab fa-facebook-f text-white"></span></a> &nbsp;
                <a href=""><span class="fab fa-youtube text-white"></span></a> &nbsp;
                <a href=""><span class="fab fa-instagram text-white"></span></a> &nbsp;
            </div>
        </div>
    </div>
</div>

<!-- Main Menu -->
<div class="container-sm sticky-top" style="background: #ffffff;">
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" class="w-25">
        <!-- <img src="https://cdn.freebiesupply.com/logos/large/2x/argos-3-logo-png-transparent.png" alt="" width="80"> -->
        <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="" width="160" >
      
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Rooms
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{ route('room.deluxe') }}">Deluxe</a></li>
              <li><a class="dropdown-item" href="{{ route('room.standard') }}">Standard</a></li>
              <li><a class="dropdown-item" href="{{ route('room.normal') }}">Normal</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dining.html">Dining</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('meeting') }}">Meeting & Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
       
        </ul>
      </div>
    </div>
</nav>
</div>
<!-- End -->