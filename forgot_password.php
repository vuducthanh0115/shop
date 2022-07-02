<div class="modal" id="modal_forgot">
    <div class="modal__overplay" onclick="document.getElementById('modal_forgot').style.display = 'none'"> </div>
    <div class="modal__body">
        <!-- Login form -->
        <form class="auth-form" action="process_forgot.php" method="POST">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">
                        Quên mật khẩu
                    </h3>
                    <!-- <span class="auth-form__switch-btn" onclick="document.getElementById('modal_signin').style.display = 'none',document.getElementById('modal_signup').style.display = 'flex'">
                        Đăng Ký
                    </span> -->
                </div>

                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Nhập email" name="email">
                    </div>
                </div>

                <div class="auth-form__controls">
                    <button type="button" class="btn btn--normal auth-form__controls-back" onclick="document.getElementById('modal_forgot').style.display = 'none'">
                        TRỞ LẠI
                    </button>
                    <button type="submit" class="btn btn--primary ">
                        GỬI
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>