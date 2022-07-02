<div class="modal" id="modal_signin">
    <div class="modal__overplay" onclick="document.getElementById('modal_signin').style.display = 'none'"> </div>
    <div class="modal__body">
        <!-- Login form -->
        <form class="auth-form" action="../process_login.php" method="POST">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">
                        Đăng Nhập

                    </h3>
                    <span class="auth-form__switch-btn" onclick="document.getElementById('modal_signin').style.display = 'none',document.getElementById('modal_signup').style.display = 'flex'">
                        Đăng Ký
                    </span>
                </div>

                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Nhập email" name="email">
                    </div>
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Mật khẩu" name="psw">
                    </div>
                    <br>
                    <div class="auth-form__group">
                        <input type="checkbox" name="remember">
                        <span>Nhớ mật khẩu</span>
                    </div>
                </div>

                <div class="auth-form__aside">
                    <div class="auth-form__help">
                        <a href="" class="auth-form__help-link auth-form__help-forgot">
                            Quên mật khẩu
                        </a>
                        <span class="auth-form__help-separate"></span>
                        <a href="" class="auth-form__help-link auth-form__help-forgot">
                            Cần trợ giúp?

                        </a>
                    </div>

                </div>

                <div class="auth-form__controls">
                    <button type="button" class="btn btn--normal auth-form__controls-back" onclick="document.getElementById('modal_signin').style.display = 'none'">
                        TRỞ LẠI
                    </button>
                    <button type="submit" class="btn btn--primary ">
                        ĐĂNG NHẬP
                    </button>
                </div>
            </div>
            <div class="auth-form__socials">
                <a href="" class="auth-form__socials-facebook btn btn--size-s btn--with-icon">
                    <i class="auth-form__socials-icon fab fa-facebook-square fa-2x"></i>
                    <span class="auth-form__socials-title">
                        Kết nối với Facebook
                    </span>
                </a>
                <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                    <i class="auth-form__socials-icon fab fa-google fa-2x"></i>
                    <span class="auth-form__socials-title">
                        Kết nối với Google
                    </span>

                </a>
            </div>
        </form>
    </div>
</div>