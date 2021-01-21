<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Fontawesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Dharan Kitchen</title>
  </head>
  <body>
  <!-- Navigation Bar -->
    @include('frontend.navbar.navbar')
  <!-- Navigation Bar End -->

   <!-- Carousel -->
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->

    @yield('carousel')
   
    <!-- #endregion Jssor Slider End -->

    @yield('main')

    <footer style="background: #e63946;">
      <div class="container">
        <div class="row pt-4">
          <div class="col-md-5 text-white">
            <h1 class="fs-5">About us</h1>
            <p style="font-size: .8rem;">Dharan Kitchen is prestigious name since 2062 BS (2005 AD) for serving healthy and tasty foods in reasonable price. Your fun destination for food and beverages. We care about your taste and health. We promise in intimate and relaxed dining experience that offers something different to local and foreign dishes and ensures you enjoy a memoriable food experiencene every time.</p>
          </div>
          <div class="col-md-3 text-white">
            <h1 class="fs-5">Address</h1>
            <address style="font-size: .8rem;">
              P.O. Box: 2141 <br>
              Street: Baircahhi <br>
              Ward Number: 8 <br>
              Municipality: Dharan <br>
              District: Sunsari <br>
              Country: Nepal <br>
              Tel: 977-25-5523900, Fax : 977-25-5523909 <br>
              Email : reservation@dharankitchen.com <br>
            </address>
          </div>

          <div class="col-md-2 text-white">
            <h1 class="fs-5">Menu</h1>
              <div class="d-flex flex-column" style="font-size: .8rem;">
                <a href="" class="text-decoration-none text-white">Terms & Condition</a>
                <a href="" class="text-decoration-none text-white">Privacy & Policy</a>
                <a href="" class="text-decoration-none text-white">Gallery</a>
                <a href="" class="text-decoration-none text-white">Contact</a>
              </div>
          </div>

          <div class="col-md-2 text-white">
            <h1 class="fs-5">Payment Option</h1>
            <img src="{{ asset('img/debitcard.png') }}" alt="" width="120">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col bg-danger text-center text-white">
            Powered by: <a href="http://www.codeitapps.com" class="text-white text-decoration-none">Code IT</a> | Dharan, Sunsari Nepal
        </div>
      </div>
  </footer>
  
  <!-- End -->
 

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="js/proper.js"></script> -->
  <script>
   var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })
  </script>
</body>
</html>