/*
    Авторизация
 */

$('.login-btn').click(function (e) {

    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();
    
    $.ajax({
        url: '/auth/vendor/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success (data) {
            if(login === 'admin') {
                if (data.status) {
                    document.location.href = '../user/index-admin.php';
                }
            } else {
                if (data.status) {
                    document.location.href = '../user/index.php';
                } else {
        
                    if (data.type === 1) {
                        data.fields.forEach(function (field) {
                            $(`input[name="${field}"]`).addClass('error');
                       });
                    }
        
                    $('.msg').removeClass('none').text(data.message);
                }
            }
        }
    });
});

/*
    Регистрация
*/

$('.register-btn').click(function (e) {

    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val(),
        full_name = $('input[name="full_name"]').val(),
        email = $('input[name="email"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();
   
    
    $.ajax({
        url: '/auth/vendor/signup.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password,
            full_name: full_name,
            email: email,
            password_confirm: password_confirm
        },
        success (data) {

            if (data.status) {
             document.location.href = '../auth/auth.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                   });
                }
    
                $('.msg').removeClass('none').text(data.message);
            }
        }
    });
});