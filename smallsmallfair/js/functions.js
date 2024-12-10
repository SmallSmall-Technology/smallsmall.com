$(window).on('load', function () {
    $('#adminLoginForm').submit(function (e) {

        $('.login-btn').val('Wait...');

        e.preventDefault();
            
        var username = $.trim($('.username').val());
        
        var password = $.trim($('.password').val());
        
        var data = {"username" : username, "password" : password, "action" : "login"};
        
        $.ajaxSetup ({ cache: false });

        $.ajax({

            url: "functions/functions.php",

            type: "POST",

            data: data,

            success: function(data) {

                if(data){

                    window.location = 'https://smallsmall.com/smallsmallfair/dashboard';

                }

                $('.login-btn').val('Login');

            }

        });
        
    });
});