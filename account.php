<!DOCTYPE html>
<html lang="en">
<?php require_once './head.php' ?>
<body>
    <div class="wrapper">
        <?php require_once './header.php' ?>
        <div class="account-container">  
            <div class="account-wrapper">
                <form action="./index.html" method="post" 
                class="login-form form" onsubmit="return false">
                    <div class="login-header">
                        <div class="form-title">Log in</div>
                        <div class="form-mode-title">Sign up</div>
                       <div class="switch-btn">
                        <ion-icon name="swap-horizontal-outline"></ion-icon>
                    </div> 
                    </div>  
                    <div class="login-content-wrapper">
                        <div class="info-content">
                            <div class="left-info-content"> 
                                <label>Username</label>
                                <label>Password</label>                      
                            </div>
                            <div class="right-info-content">
                                 <input type="text" class="user-name input" name="user-name" placeholder="Username..">
                                <input type="password" class="password input" name="password" placeholder="Password..">                     
                            </div>
                        </div>
                    </div>  
                    <div class="login-footer-wrapper">
                        <div class="login-footer">
                            <div class="remember-passwd">
                                <div class="remember-check">
                                 <span>Remember me</span>
                                <input class="remember-input" type="checkbox" name="" id="">    
                                </div>                               
                                <a class="forgot-passwd" href="#">Forgot password ?</a>
                            </div>
                            <div class="login-confirm-btn">
                                <input type="submit" class="login-btn" value="Log in" name="" id="">
                            </div>
                        </div>
                    </div>
                </form>
                <form action="./account.html" method="post" class="sign-up-form form" onsubmit="return false">
                    <div class="sign-up-header">
                      <div class="form-title">Sign up</div>
                      <div class="form-mode-title">Log in</div>
                      <div class="switch-btn">
                        <ion-icon name="swap-horizontal-outline"></ion-icon>
                    </div>  
                    </div>  
                    <div class="sign-up-content-wrapper">
                        <div class="info-content">
                            <div class="left-info-content">
                                <label>Username</label>
                                <label>Phone num</label>
                                <label>Email</label>
                                <label>Password</label>
                                <label>Retype password</label>
                            </div>
                            <div class="right-info-content">
                                <input type="text" class="user-name input" name="user-name" placeholder="Username..">
                                <input type="text" class="phone-num input" name="phone-num" placeholder="Phone number..">
                                <input type="text" class="email input" name="email" placeholder="Email..">
                                <input type="password" class="password input" name="password" placeholder="Password..">
                                <input type="password" class="retypePassword input" name="retypePassword" placeholder="Retype password..">
                            </div>
                        </div>
                    </div>
                    <div class="sign-up-footer-wrapper">
                        <div class="sign-up-footer">
                            <div class="agree-check">
                                <input type="checkbox" name="" id="">
                                <span>Tôi đồng ý với các điều khoản và điều kiện, chính sách bảo mật và chính sách cookie</span>
                            </div>
                            <div class="sign-up-confirm-btn">
                                <input type="submit" value="Sign up" name="signUp" class="sign-up-btn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php require_once './footer.php' ?>
</body>
<script src="./assets/js/header/search-bar.js"></script>
<script src="./assets/js/header/sticky-header.js"></script>
<script src="./assets/js/header/body-cart.js"></script>
<script src="./assets/js/account/switch.js"></script>
<script src="./assets/js/account/validate.js"></script>
<script src="./assets/js/account/sign-up.js"></script>
<script src="./assets/js/account/log-in.js"></script>
</html>