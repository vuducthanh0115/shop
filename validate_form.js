function validate(){
    let error_check = true;

    // Kiem tra ten
    let name = document.getElementById('name').value;
    if(name.length === 0){
        document.getElementById('error_name').innerHTML = 'Vui lòng nhập tên ';
        error_check = false;
    }
    else{
        document.getElementById('error_name').innerHTML = '';
    }

    // Kiem sdt
    let phone = document.getElementById('phone_number').value;
    if(phone.length === 0){
        document.getElementById('error_phone').innerHTML = 'Vui lòng nhập số điện thoại ';
        error_check = false;
    }
    else{
        document.getElementById('error_phone').innerHTML = '';
    }

    //Kiem tra dia chi
    let address = document.getElementById('address').value;
    if(address.length === 0){
        document.getElementById('error_address').innerHTML = 'Vui lòng nhập địa chỉ';
        error_check = false;
    }
    else{
        document.getElementById('error_address').innerHTML = '';
    }
    // Kiem tra gioi tinh
    let arr_gender = document.getElementsByName('gender');
    let gender_check = false;
    for(let i = 0; i < arr_gender.length; i++){
        if(arr_gender[i].checked){
            gender_check = true;
        }
    }
    if(gender_check == false){
        document.getElementById('error_gender').innerHTML = 'Vui lòng chọn giới tính';
        error_check = false;
    }
    else{
        document.getElementById('error_gender').innerHTML = '';
    }

    // Kiem email
    let email = document.getElementById('email').value;
    if(email.length === 0){
        document.getElementById('error_email').innerHTML = 'Vui lòng nhập email';
        error_check = false;
    }
    else{
        let regax_email = /^\S+@\S+\.\S+$/;
        if(regax_email.test(email) == false){
            document.getElementById('error_email').innerHTML = 'Email không hợp lệ';
            error_check = false;
        }
        else{
            document.getElementById('error_email').innerHTML = '';
        }
    }

    //kiem tra mat khau
    
    let psw = document.getElementById('psw').value;
    if(psw.length === 0){
        document.getElementById('error_psw').innerHTML = 'Vui lòng nhập mật khẩu ...';
        error_check = false;
    }
    else{
        let regax_psw = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
        if(regax_psw.test(psw) == false){
            document.getElementById('error_psw').innerHTML = 'Mật khẩu không hợp lệ';
            error_check = false;
        }
        else{
            document.getElementById('error_psw').innerHTML = '';
            let repeat_psw = document.getElementById('re_psw').value;
            if(repeat_psw !== psw || repeat_psw.length === 0){
                document.getElementById('error_re_psw').innerHTML = 'Mật khẩu không trùng khớp. Vui lòng nhập lại.';
                error_check = false;
            }
            else{
                document.getElementById('error_re_psw').innerHTML = 'Mật khẩu đã trùng khớp';
                document.getElementById('error_re_psw').style.color = 'green';
            }
        }
    }

    if(error_check == false){
        return false;
    }
}