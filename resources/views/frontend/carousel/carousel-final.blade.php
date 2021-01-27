<!-- Carousel -->
<div class="row">
    <div class="col">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="6500">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="max-height: 90vh;">
              <div class="carousel-item active" style="max-height: 90vh;">
                <img src="{{ asset('img/slide1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Namastee</h5>
                  <p>Welcome to Dharan Kitchen</p>
                </div>
              </div>
              <div class="carousel-item" style="max-height: 90vh;">
                 <img src="{{ asset('img/slide2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Dharan Kitchen</h5>
                  <p>A Complete Falily Restaurant</p>
                </div>
              </div>
              <div class="carousel-item" style="max-height: 90vh;">
                 <img src="{{ asset('img/slide3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Open Kitchen</h5>
                  <p>An open kitchen concept has to have the combination of all details in a restaurant operation that lead to a certain image with our customers</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- End -->