var baseUrl = "https://smallsmall.com/";

function isEmail(email) {

	"use strict";

   var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

   return regex.test(email);

}

$('#ssLoginForm').submit(function(e){

    e.preventDefault();

    $('#login-but').html('Wait...');

    var username = $.trim($('#username').val());

    var password = $('#password').val();

    if(!username){

        alert("Empty username field");

        $('#username').css('border', '1px solid #F00');

        $('#login-but').html('Login');

        return false;

    }

    if(!isEmail(username)){

        alert("Wrong email format!");

        $('#username').css('border', '1px solid #F00');

        $('#login-but').html('Login');

        return false;

    }

    if(!password){

        alert("Empty password field");

        $('#username').css('border', '1px solid #0A0808');

        $('#password').css('border', '1px solid #F00');

        $('#login-but').html('Login');

        return false;

    }

    var data = {"username" : username, "password" : password};

    $.ajaxSetup ({ cache: false });

    $.ajax({

        url: baseUrl+"smallsmall/login/",

        type: "POST",

        async: true,

        data: data,

        success: function(data) {

			if(data == 1){
                //$('.signup-btn').val('Wait...');
                location.reload(true);

			}else{

                alert("Username/Password incorrect");

				$('#login-but').html('Login');
                
                return false;

			}

        },
        error: function() {

            alert("Error: Contact admin");

            $('#login-but').html('Login');

            return false;

        }

    });
    
});