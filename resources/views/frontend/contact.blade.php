@extends('frontend.templates.app')

@section('main')
<main>
    <div class="row">
      <div class="container">
        <div class="col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.8753919024866!2d87.28645529253524!3d26.801881259588676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef41910d4acb5d%3A0x12a28ac5cb9d6b21!2sDharan%20Kitchens%20Sekuwa%20Corner%20and%20Thakali%20Kitchen!5e0!3m2!1sen!2snp!4v1611157766803!5m2!1sen!2snp"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="w-100" height="450"></iframe>
        </div>
      </div>
    </div>
      <!-- Welcome Section -->
      <div class="py-5">
          <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <div class="card shadow">
                         <div class="card-header">
                             <strong class="fs-3 fw-normal">Contact Info</strong>
                         </div>
                         <div class="card-body">
                            <p class="card-text fw-light">Have any Queries? Let us know. We will clear it for you at the best.</p>
                            <p class="card-text fw-light" style="color:#f58634;"><span class="fas fa-map-marker-alt"></span> Dharan, Bairgachhi, Sunsari Nepal</p>
                            <p class="card-text fw-light" style="color:#f58634;"><span class="fas fa-envelope"></span> <a href="mailto:info@dharankitchen.com" class="text-decoration-none" style="color:#f58634;">info@dharankitchen.com</a></p>
                            <p class="card-text fw-light" style="color:#f58634;"><span class="fas fa-phone-alt"></span> <a href="tel:+97725521810" class="text-decoration-none" style="color:#f58634;">977-25-521810</a></p>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-8 mt-5">
                   <p class="fw-light">We are being involved in below social media an excellent platform to enhance communication and understanding. Please do see our post, comment on it , like it and share it and more. It will help us to improve our services and extend customer satisfaction.</p>

                   <p>
                    <a href="#"><span class="fab fa-facebook-f fa-2x" title="Facebook"></span></a> &nbsp;
                    <a href="#"><span class="fab fa-youtube text-danger fa-2x" title="YouTube"></span></a> &nbsp;
                    <a href="#"><span class="fab fa-instagram text-danger fa-2x" title="Instagram"></span></a> &nbsp;
                   </p>
                   
                 </div>
             </div>
            </div>
      </div>
      <!-- End -->

      <div class="mt-5" style="background:#f8edeb;">
        <div class="container">
          <div class="row py-4 justify-content-center">
            <div class="col-md-8">
               <h1 class="text-center fw-light text-uppercase display-6 fs-3">Send Message</h1>
               <p class="text-center fw-light">Our team is happy to answer any enquiries. Please take a moment to fill up the below form. We will try our best to entertain your any inquiries, feedback or request of special services.</p>
            </div>
          </div>

          <div class="row py-4 justify-content-center">
            <div class="col-md-4">
              <form action="" method="post">
                <div class="form-group">
                  <label for="name" class="fw-light">Your Name</label>
                  <input id="name" class="form-control" type="text" name="name" required >
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="form-group">
                 <label for="email" class="fw-light">Your email</label>
                 <input id="email" class="form-control" type="email" name="email" >
               </div>

               <div class="form-group">
                 <label for="tel" class="fw-light">Mobile</label>
                 <input id="tel" class="form-control" type="tel" name="mobile" >
               </div>

               <div class="form-group">
                 <label for="message" class="fw-light">Message</label>
                 <textarea id="message" class="form-control" name="message" rows="3"></textarea>
               </div>

               <button type="submit" class="btn btn-danger btn-sm mt-2 w-100">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  </main>
@endsection