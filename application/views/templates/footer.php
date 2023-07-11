    <!--=========================-->
    <!--=        Footer         =-->
    <!--=========================-->
    <footer class="footer footer-all">
        <div class="container">
            <div class="row">
                <div class="col-sm footer-logo-png">
                    <img src="<?php echo base_url(); ?>assets/front/assets/img/smallsmall-svglogo.svg" alt="">
                </div>
            </div>
            <div class="row">
                
                <div class="col-sm product-footer">
                <h3>Products</h3>
                <ul>
                    <a href="https://rent.smallsmall.com" target="_blank"><li>Rent</li></a>
                    <a href="https://stay.smallsmall.com"><li>Stay Nightly</li></a>
                    <a href="https://buy.smallsmall.com" target="_blank"><li>Buy</li></a>
                </ul>
                </div>
                <div class="col-sm company-footer">
                <h3>Company</h3>
                <ul>
                    <a href="<?php echo base_url(); ?>about"><li>About us</li></a>
                    <a href="#"><li>Blog</li></a>
                    <a href="#"><li>Careers</li></a>
                </ul>
                </div>
                <div class="col-sm legal-footer">
                <h3>Legal</h3>
                <ul>
                    <a href="<?php echo base_url(); ?>privacy-policy"><li>Privacy policy</li></a>
                    <a href="<?php echo base_url(); ?>terms-and-conditions"><li>Terms & Conditions</li></a>
                    <a href="<?php echo base_url(); ?>faq"><li>Subscription terms</li></a>
                    <a href="<?php echo base_url(); ?>faq"><li>FAQ</li></a>
                </ul>
                </div>

                <div class="col-sm contact-footer">
                    <h3>Contact us</h3>
                    <ul>
                        <li>Talk to us</li>
                        <li>hello@smallsmall.com</li>
                        <li class="social-media-icons"><a href="#"><img src="<?php echo base_url(); ?>assets/front/assets/img/twitter.svg" alt=""></a><a href="#"><img src="<?php echo base_url(); ?>assets/front/assets/img/instagram.svg" alt=""></a><a href="#"><img src="<?php echo base_url(); ?>assets/front/assets/img/linkedin.svg" alt=""></a><a href="#"><img src="<?php echo base_url(); ?>assets/front/assets/img/facebook.svg" alt=""></a><a href="#"><img src="<?php echo base_url(); ?>assets/front/assets/img/youtube.svg" alt=""></a></li>
                    </ul>
                    
                    
                </div>
            </div>

            <div class="row">  
                <div class="col-sm app-store-footer">
                        <ul>
                            <li><a target="_blank" href="https://apps.apple.com/us/app/smallsmall/id1643608622"><img class="applestorelogo" src="<?php echo base_url(); ?>assets/front/assets/img/appstore-footer.png" alt=""></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.smallsmall.mobile"><img src="<?php echo base_url(); ?>assets/front/assets/img/googleplay-footer.png" alt=""></a></li>
                        </ul>
                </div>
            </div>
            <div class="row">  
                <div class="col-sm copy-2022-footer">
                        <p> &copy; 2023 Smallsmall Technology</p>
                </div>
            </div>

            
        </div>



    </footer>


    <!-- Button trigger modal -->

  
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">  
                    <div class="modal-header-description">Login</div>              
                    <button type="button" class="close shiftclose" data-dismiss="modal" onclick="visibleMenu();" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-form">
                        <form id="ssLoginForm" autocomplete="off">
                            <div class="form-group">
                                <!---<label for="username" class="col-form-label">Email</label>--->
                                <input placeholder="Email address" autocomplete="off" type="text" class="form-input form-controls" id="username" name="username" />
                            </div>
                            <div class="form-group">
                                <!---<label for="password" class="col-form-label">Password</label>--->
                                <input placeholder="Password" autocomplete="off" type="password" class="form-input form-controls" id="password" name="password" />
                            </div>                            
                            <div class="form-group">
                                <button type="submit" class="ss-login-btn" id="login-but">Login</button>
                            </div>
                        </form>
                    </div>                    
                </div>
                <div class="modal-footer">
                
                </div>
            </div>
        </div>
    </div>

    <!-- Modal2 -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-header-description">Register</div>
                    <button type="button" class="close shiftclose" data-dismiss="modal" onclick="visibleMenu();" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-form">
                        <form id="ssRegisterForm" autocomplete="off">
                            <div class="form-group">
                                <!---<label for="username" class="col-form-label">Email</label>--->
                                <input placeholder="Firstname" type="text" class="form-input form-controls" id="fname" name="fname" />
                            </div>
                            <div class="form-group">
                                <!---<label for="username" class="col-form-label">Email</label>--->
                                <input placeholder="Lastname" type="text" class="form-input form-controls" id="lname" name="lname" />
                            </div>
                            <div class="form-group">
                                <!---<label for="username" class="col-form-label">Email</label>--->
                                <input placeholder="Email address" type="text" class="form-input form-controls" id="email" name="email" />
                            </div>
                            <div class="form-group">
                                <!---<label for="username" class="col-form-label">Email</label>--->
                                <input placeholder="Phone" type="text" class="form-input form-controls" id="phone" name="phone" />
                            </div>
                            <div class="form-group">
                                <!---<label for="password" class="col-form-label">Password</label>--->
                                <input placeholder="Password" autocomplete="off" type="password" class="form-input form-controls" id="password" name="password" />
                            </div>   
                            <div class="form-group">
                                <label for="userType" class="col-form-label">Register As</label>
                                <select name="select" name="userType" id="userType" class="form-control verify-txt">
                                    <option value="tenant">Tenant</option>
                                    <option value="landlord">Landlord</option>
                                </select>
                            </div>                         
                            <div class="form-group">
                                <button type="submit" class="ss-login-btn" id="register-but">Register</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <div class="modal-footer">
                
                </div>
            </div>
        </div>
    </div>

</div><!-- /#site -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            type: "progressbar",
        },

        // autoplay: {
        //     delay: 2500,
        //     disableOnInteraction: false,
        //   },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <!-- Dependency Scripts -->
    <script src="<?php echo base_url(); ?>assets/front/dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/dependencies/swiper/js/swiper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/dependencies/jquery.appear/jquery.appear.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/dependencies/wow/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/dependencies/countUp.js/countUp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/dependencies/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/dependencies/gmap3/js/gmap3.min.js"></script>
    <script type='text/javascript'
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6'></script>


    <!-- Site Scripts -->
    <script src="<?php echo base_url(); ?>assets/front/assets/js/header.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/assets/js/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/assets/js/login.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/assets/js/register.js"></script>
    

    </body>

</html>