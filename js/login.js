$(document).ready(function() {
	'use strict';
	
    $('#loginform').submit(function() {

        $.ajax({
            type: "POST",
            url: 'server.php',
            data: {
                username: $("#username").val(),
                password: $("#password").val()
            },
            success: function(data)
            {
                if (data === 'Correct') {
                    window.location.replace('admin/admin.php');
                }
                else {
                    document.getElementById("login-error").innerHTML = "Failed";

                }
            }
        });
        //this is mandatory other wise your from will be submitted.
        return false; 
    });

});