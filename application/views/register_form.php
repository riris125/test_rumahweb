<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>


    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">

    <style>
        body {
            background: #ffffff;
        }
    </style>



</head>

<body>
    <div class="container">
        <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: 150px;">
            <div class="card-body py-5 px-md-5" style="background-color:#d4eff7;">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5 text-center">Sign up now</h2>
                        <form method="POST" action="<?= base_url('auth/save'); ?>" onsubmit="return validate();">
                            <div class="mb-3 mt-3">
                                <label for="uname" class="form-label">Email address:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>

                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Birth date:</label>
                                <input type="date" class="form-control" id="birth" name="birth" required>

                            </div>
                            <div class="mb-3 text-center">
                                <input type="submit" name="submit_form" class="btn btn-primary" value="Sign up">
                            </div>
                        </form>
                        <br>
                        <p style="color:red;" id="error_para"></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<!-- js -->
<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

<script type="text/javascript">
    function validate() {
        var error = "";
        var email = document.getElementById("email");
        if (email.value == "" || email.value.indexOf("@") == -1) {
            error = " You have entered an invalid email address! ";
            document.getElementById("error_para").innerHTML = error;
            return false;
        }
        if (email.value.indexOf('@rumahweb.co.id') === -1) {
            error = " Email must be at @rumahweb.co.id ";
            document.getElementById("error_para").innerHTML = error;
            return false;
        }
        var password = document.getElementById("password");
        if (password.value.length < 12) {
            error = " Password must be at least 12 character ";
            document.getElementById("error_para").innerHTML = error;
            return false;
        }
        if (!password.value.match(/\d+/)) {
            error = " Password must contain number ";
            document.getElementById("error_para").innerHTML = error;
            return false;
        }
        if (!password.value.match(/[a-z]/)) {
            error = " Password must contain lowercase letter ";
            document.getElementById("error_para").innerHTML = error;
            return false;
        }
        if (!password.value.match(/[A-Z]/)) {
            error = " Password must contain uppercase letter ";
            document.getElementById("error_para").innerHTML = error;
            return false;
        }
        if (!password.value.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]{2}/)) {
            error = " Password must contain at least 2 special characters ";
            document.getElementById("error_para").innerHTML = error;
            return false;
        }
        var birth = document.getElementById("birth").value;
        var today = new Date();
        var birthday = new Date(birth);
        var year = 0;

        if (today.getMonth() < birthday.getMonth()) {
            year = 1;
        } else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
            year = 1;
        }
        var age = today.getFullYear() - birthday.getFullYear() - year;

        if (age < 0) {
            age = 0;
        }

        if (age < 17) {
            error = " Age must be at least 17 years old ";
            document.getElementById("error_para").innerHTML = error;
            return false;
        } else {
            return true;
        }
    }
</script>


</html>