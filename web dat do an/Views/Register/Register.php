<script>
    $(document).ready(function(){
            $('header').css('display', 'none');
    });
</script>
<section class="section" id="style">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="IMG">
              </div>
                <form class="login100-form validate-form" action="?act=register&xuli=join" method="POST">
                    <span class="login100-form-title">
                        <b>ĐĂNG KÝ TÀI KHOẢN</b>
                    </span>
                    <form method="POST" action="?act=register&xuli=join" >
                    <?php
                    if (isset($error)) {
                        echo $error;
                    }
                    ?>
                        <div class="wrap-input100 validate-input">
                            <input required class="input100" type="text" placeholder="Tên tài khoản" name="username"
                                id="username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-user'></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input"
                            data-validate="Bạn cần nhập đúng thông tin như: ex@abc.xyz">
                            <input required class="input100" type="text" placeholder="Nhập email" name="emailInput"
                                id="emailInput" value="" />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-mail-send' ></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input required autocomplete="off" class="input100" type="password" placeholder="Mật khẩu"
                                name="password" id="password-field">
                            <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-key'></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input required autocomplete="off" class="input100" type="password" placeholder=" Nhập lại mật khẩu"
                                name="rpassword" id="password-field">
                            <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-key'></i>
                            </span>
                        </div>
                        <div class="container-login100-form-btn">
                            <input required type="submit" class="login-btn" value="Đăng ký" name="submit" />
                        </div>

                        <div class="text-center p-t-12">
                            <a class="txt2" href="?act=login">
                                Trở về đăng nhập
                            </a>
                        </div>
                    </form>
                   
                </form>
            </div>
        </div>
    </div>
</section>