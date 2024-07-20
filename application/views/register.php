        <section class="login">
            <div class="login-container">
                <div class="report-box"></div>
                <div class="login-box">
                    <div class="login-box-head">Create your account </div>
                    <form id="ssRegisterForm">
                        <fieldset class="reg-1 fieldsets">
                            <div class="login-element-container double-fields">
                                <div class="elem-container">
                                    <input type="text" id="fname" class="text-field" placeholder="First name" />
                                </div>
                                <div class="elem-container">
                                    <input type="text" id="lname" class="text-field" placeholder="Last Name" />
                                </div> 
                            </div>
                            <div class="login-element-container">
                                <input type="text" id="email" class="text-field" placeholder="Email" />
                                <i class="fas fa-envelope"></i>
                            </div>                        
                            <div class="login-element-container">
                                <input type="text" id="phone" class="text-field" placeholder="Phone" />
                            </div>
                            <div class="login-element-container">
                                <input type="password" id="password" class="text-field pass" placeholder="Password" />
                                <i id="show-password" class="fas fa-eye"></i>
                            </div>
                            <div class="login-element-container">
                                <input type="password" id="password-2" class="text-field pass" placeholder="Confirm password" />
                            </div>
                            <div class="login-element-container">
                                <a id="next-btn" class="login-btn next-btn" href="">Next</a><i class="fa fa-chevron-right"></i>
                            </div>
                        </fieldset>
                        <fieldset class="reg-2 fieldsets hidden">
                            <div class="login-element-container">
                                <label class="select">
                                    <select id="gender">
                                        <option>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </label> 
                            </div>
                            <div class="login-element-container">
                                <label class="select">
                                    <select id="refferer">
                                        <option>How did you hear about us?</option>
                                        <option value="Radio">Radio</option>
                                        <option value="Female">Instagram</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="WOM">Word Of Mouth</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </label> 
                            </div>
                            <div class="login-element-container">
                                <input type="text" id="refferal-code" class="text-field" placeholder="Referral Code (Optional)" />
                            </div> 
                            <div class="login-element-container">
                                <input type="submit" class="reg-btn" value="Sign up" />
                            </div>
                        </fieldset>
                    </form>
                </div>
                <ul class="form-paginator">
                    <li class="form-page active first-page"></li>
                    <li class="form-page second-page"></li>
                    <li></li>
                </ul>
                <div class="forgot-password-box">
                By signing up for an account you agree to our <a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a> and <a href="<?php echo base_url('terms-and-conditions'); ?>">Terms of use</a>.
                </div>
            </div>
        </section> 
        <script src="<?php echo base_url('assets/front/assets/js/register.js'); ?>"></script>