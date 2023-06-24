var baseUrl = "https://smallsmall.com/";

function isEmail(email) {

	"use strict";

   var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

   return regex.test(email);

}

$('#ssRegisterForm').submit(function(e){

    e.preventDefault();

    $('#register-but').html('Wait...');

    var fname = $('#fname').val();

    var lname = $('#lname').val();

    var username = $('#email').val();

    var userType = $('#userType').val();

    var phone = $('#phone').val();

    var password = $('#password').val();

    if(!isEmail(username)){

        alert("Wrong email format!");

        $('#username').css('border', '1px solid #F00');

        $('#register-but').html('Register');

        return false;

    }


    var data = {"fname" : fname, "lname" : lname, "username" : username, "phone" : phone, "password" : password, "userType" : userType};

    $.ajaxSetup ({ cache: false });

    $.ajax({

        url: baseUrl+"smallsmall/register_user/",

        type: "POST",

        async: true,

        data: data,

        success: function(data) {

			if(data == 0){

                $('#register-but').html('Register');

			}else{

                alert(data);

                location.reload(true);

				$('#register-but').html('Register');
                
                return false;

			}

        },
        error: function() {

            alert("Error: Contact admin");

            $('#register-but').html('Register');

            return false;

        }

    });


});