var baseUrl = "https://smallsmall.com/";

function isEmail(email) {

	"use strict";

   var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

   return regex.test(email);

}

$('#ssRegisterForm').submit(function(e){

    e.preventDefault();
    
    $('.report-box').css('display', 'none');

    $('.report-box').removeClass('error');

    $('#register-but').html('Wait...');

    var fname = $('#fname').val();

    var lname = $('#lname').val();

    var username = $('#email').val();

    var userType = $('#userType').val();

    var phone = $('#phone').val();

    var password = $('#password').val();

    if(!isEmail(username)){

        $('.report-box').css('display', 'inline-block');

        $('.report-box').addClass('error');

        $('.report-box').html("Wrong email format!");

        $('#username').css('border', '1px solid #F00');

        $('#register-but').val('Register');

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

			if(data == 1){

                window.location.href = baseUrl+'registration-success';

            }else if(data == 0){

                $('#register-but').val('Register');

			}else{

                alert(data);

                location.reload(true);

				$('#register-but').val('Register');
                
                return false;

			}

        },
        error: function() {

            alert("Error: Contact admin");

            $('#register-but').val('Register');

            return false;

        }

    });


});