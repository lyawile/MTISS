$(document).ready(function () {
    $(':submit').click(function () {
//        event.preventDefault();
        var errors = false;
        var fullName = $('#fullname').val();
        var email = $('#email').val();
        var message = $('#message').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        $('.error').remove();
        if (fullName === '') {
            $('#fullname').after('<span class = "error" style =" color: red;margin-left: 5px;">fill in your full name</span>');
            errors = true;
        }
        if (!filter.test(email) && email !== '') {
            $('#email').after('<span class = "error" style =" color: red;margin-left: 5px; font-style: italic;">Invalid email</span>');
            errors = true;
        }
        if (email === '') {
            $('#email').after('<span class = "error" style =" color: red;margin-left: 5px;">fill in email</span>');
            errors = true;
        }
        if (message === '') {
            $('#message').after('<span class = "error" style =" color: red;margin-left: 5px;">fill in message</span>');
            errors = true;
        }
        if (errors === false) {
            return true;

//            $.ajax({
//                url: 'email.php',
//                type: 'POST',
//                data: {fullName: fullName, email: email, message: message},
//                success: function (data) {
//                    $('#throw').html(data);
//                },
//                error: function () {
//                    $('#throw').html("no data was sent");
//                }
//            });
        }
        else
            return false;
    });
    $('#success_fail').fadeOut(5000); 
});