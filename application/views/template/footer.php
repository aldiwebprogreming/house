
<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Medan, Sumatera Utara</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6281264646575</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
           <!--  <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link text-white-50" href="">About Us</a>
                <a class="btn btn-link text-white-50" href="">Contact Us</a>
                <a class="btn btn-link text-white-50" href="">Our Services</a>
                <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
            </div> -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Photo Gallery</h5>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="<?= base_url('assets/') ?>img/property-1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="<?= base_url('assets/') ?>img/property-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="<?= base_url('assets/') ?>img/property-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="<?= base_url('assets/') ?>img/property-4.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="<?= base_url('assets/') ?>img/property-5.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="<?= base_url('assets/') ?>img/property-6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">HomeStay</h5>
                <p>Jasa pembelian property di seluruh indonesia.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">PTSINARANEKANIAGA</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                       <!--  <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>lib/wow/wow.min.js"></script>
<script src="<?= base_url('assets/') ?>lib/easing/easing.min.js"></script>
<script src="<?= base_url('assets/') ?>lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url('assets/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Template Javascript -->
<script src="<?= base_url('assets/') ?>js/main.js"></script>
<script src="<?php echo base_url() ?>assets/alert.js"></script>
<?php echo "<script>".$this->session->flashdata('message')."</script>"?> 

<script>
    $(document).ready(function(){
        $('.kategori').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1.5
                },
                600:{
                    items:3
                },
                1000:{
                    items:5.5
                }
            }
        })
    });
</script>

<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1.5
                },
                600:{
                    items:3
                },
                1000:{
                    items:3.5
                }
            }
        })
    });
</script>
</body>



</html>