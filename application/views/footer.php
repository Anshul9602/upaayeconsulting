<style>
    @media (max-width: 767px) {
        .mt-2 {
            text-align: center;
        }

        .tc {
            text-align: center;
        }
    }

    .social_icon {
        font-size: 25px;
        color: #f26522 !important;
        display: none;
    }

    hr {
        border-top: 2px solid;
        opacity: 1;
    }

    .formPopup {
        background: rgba(0, 0, 0, 0.7);
        width: 100%;
        height: 100vh;
        display: none;
        position: fixed;
        left: 50%;
        top: 0%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 4;
    }

    .formContainer {
        max-width: 700px;
        padding: 20px;
        background-color: #f26522;
    }

    .formContainer input[type=text]:focus,
    .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .formContainer .btn {
        padding: 12px 20px;
        border: none;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
    }

    .formContainer .cancel {
        width: 50px;
    }

    .formContainer .btn:hover,
    .openButton:hover {
        opacity: 1;
    }
</style>


<footer class="footer-no-negative wf-section">
    <div>
        <div class="container">
            <div class=" row ">
                <div class="tc  col-md-4 col-sm-12 mt-3 mb-3">
                    <div class="footer-title" style="font-size: 22px;">Subscribe to our newsletter</div>
                    <div class="subs-subtitle">Stay up to date with the latest ADLedger news</div>
                </div>
                <div class="tc  col-md-8
                 col-sm-12 mt-3 mb-3">
                    <div class="form-block w-form" style="width:100%;">
                        <form action="Sub_mail" method="post" class="footer-form d-flex" style="align-items: center;">

                            <input type="email" style="width:60%; border-radius: 3px;" class="text-field w-input"
                                maxlength="256" name="email" placeholder="Enter your email address" required="">

                            <input type="submit" value="Subscribe" class="sub-send sub-send-btn-trigger"
                                style="width:30%">
                        </form>

                        <div class="success-message-2 w-form-done" tabindex="-1" role="region"
                            aria-label="Newsletter-footer success">
                            <div>Thank you!</div>
                        </div>

                        <div class="w-form-fail" tabindex="-1" role="region" aria-label="Newsletter-footer failure">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>

            </div>

            <hr>
            <div class="  footer-row-1 row tc m-0" style="    justify-content: space-around;">
                <div class="col-md-3  mb-3 mt-3"><a href="/" aria-current="page" class="w-inline-block w--current">
                        <img src="assets/img/logof.png" alt="" style="width:150px;">
                    </a>
                </div>
                <div class=" row col-md-9 mt-md-3 mb-md-3 mb-0 mt-0">
                    <div class="col-lg-4 col-md-6 col-6  mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Useful Links </div>
                        </div>
                        <div class="col-footer">
                           
                            <a href="<?php echo base_url('Services'); ?>" class="footer-links mt-16">Services</a>
                            <a href="<?php echo base_url('Articles_and_News'); ?>" class="footer-links mt-16">Articles & News</a>
                           


                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6  mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Company</div>
                        </div>
                        <div class="col-footer">
                            <a href="<?php echo base_url('About_Us'); ?>" class="footer-links mt-25">About Us</a>
                            <a href="<?php echo base_url('Career'); ?>" class="footer-links mt-16">Career</a>
                           
                            <a href="<?php echo base_url('Contact'); ?>" class="footer-links mt-16">Contact Us</a>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-12 mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Other</div>
                        </div>
                        <div class="col-footer">
                    
                                <div class="info mt-4 col-md-12 text-white row">
                                    <div class="address row col-md-12 m-0">

                                        <h6 class="col-md-2 col-12" style="font-weight: 700;"><span><i
                                                    class="bi bi-geo-alt"></i>
                                                </span></h6>
                                        <p class="col-md-10 col-12 p-0">C-87, Ribhu Path, Bhagirath Marg, Shyam
                                            Nagar, Jaipur, (Raj.) - 302019</p>
                                    </div>

                                    <div class="email row col-md-12 m-0 pt-md-0 pt-2">

                                        <h6 class="col-md-2 col-12" style="font-weight: 700;"><span><i
                                                    class="bi bi-envelope"></i>
                                                &nbsp;</span></h6>
                                        <p class="col-md-10 col-12 p-0"> adledgerservices@gmail.com
                                        </p>
                                    </div>
                                    <div class="phone row col-md-12 col-12 m-0 pt-md-0 pt-2">
                                        <h6 class="col-md-2 col-12" style="font-weight: 700;"><span><i
                                                    class="bi bi-phone"></i> &nbsp;</span>
                                        </h6>
                                        <p class="col-md-10 col-12 p-0" style="color:#fff !important;">
                                            <a href=""style="color:#fff !important;">+91 141 401 5544,</a><br> <a href=""style="color:#fff !important;">+91 95877 90340</a></p>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-row-3 tc" style="    text-align: center;">
                <div class="footer-copyw tc">
                    
                    <p class="text-center container mob-size" style=" font-size:14px; color:#f1f1f1; padding:5px;font-weight: 300;">
                    Copyright © 2024 ADLedger . All Rights Reserved. Developed By
                    <a href="https://theodin.in/" style="color:#fff;    text-decoration: underline;">
                        The Odin</a> .
                </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script>
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll <= 500) {
            $(".addclass").removeClass("addclass").addClass("stick");
        }
    })
</script>

<script>
    function openForm() {
        document.getElementById("popupForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
    }

    function openForm1() {
        document.getElementById("popupForm1").style.display = "block";
    }

    function closeForm1() {
        document.getElementById("popupForm1").style.display = "none";
    }
</script>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>