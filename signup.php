<!-- Register form Đăng Ký Form -->
<div class="modal" id="modal_signup">
    <div class="modal__overplay" onclick="document.getElementById('modal_signup').style.display = 'none'"> </div>
    <div class="modal__body">
        <form class="auth-form" action="process_signup.php" method="POST">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">
                        Đăng ký
                    </h3>
                    <span class="auth-form__switch-btn" onclick="document.getElementById('modal_signup').style.display = 'none',document.getElementById('modal_signin').style.display = 'flex'">
                        Đăng nhập
                    </span>
                </div>

                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Nhập tên" name="name" id="name">
                        <i id="error_name"></i>
                    </div>
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Nhập email" name="email" id="email">
                        <i id="error_email"></i>
                    </div>
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Địa chỉ" name="address" id="address">
                        <i id="error_address"></i>
                    </div>
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Số điện thoại" name="phone_number" id="phone_number">
                        <i id="error_phone"></i>
                    </div>
                    <div class="auth-form__group gender">
                        <span class="gender_text">
                            Giới tính :
                        </span>
                        <input type="radio" id="gender" name="gender" value="1">
                        <label for="male" class="gender_text_in">Nam</label>
                        <input type="radio" id="gender" name="gender" value="0">
                        <label for="female">Nữ</label>
                        <br>
                        <i id="error_gender"></i>
                    </div>
                    <div class="auth-form__group date">
                        <span class="date_text">
                            Ngày sinh :
                        </span>
                        <input type="date" id="date" name="date">
                        <i id="error_date"></i>
                    </div>
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Mật khẩu" name="psw" id="psw">
                        <i id="error_psw"></i>
                    </div>

                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Nhập lại mật khẩu" name="re_psw" id="re_psw">
                        <i id="error_re_psw"></i>
                    </div>
                </div>

                <div class="auth-form__aside">
                    <p class="auth-form__policy-text">
                        Bằng việc đăng kí, bạn đã đồng ý với Shopee về
                        <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                        <a href="" class="auth-form__text-link">Chính sách bảo mật </a>
                    </p>

                </div>

                <div class="auth-form__controls">
                    <button type="button" class="btn btn--normal auth-form__controls-back" onclick="document.getElementById('modal_signup').style.display = 'none'">
                        TRỞ LẠI
                    </button>
                    <button type="submit" class="btn btn--primary " onclick="document.getElementById('modal_signup').style.display = 'flex'; return validate()">
                        ĐĂNG KÝ
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
                <a href="" class="auth-form__socials-google btn btn--size-s btn--with-icon">
                    <i class="auth-form__socials-icon fab fa-google fa-2x"></i>
                    <span class="auth-form__socials-title">
                        Kết nối với Google
                    </span>
                </a>
            </div>
        </form>
    </div>
</div>