<?php
$responder_id = isset($_GET['responder_id']) ? $_GET['responder_id'] : "";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bayan911 - Reset Password</title>
    <link rel="SHORTCUT ICON" href="favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin">
        <form id="changepassword" method="post">
            <img class="mb-4" src="test/logo/bayan911-logo-highreswhite.png" alt="" width="200" height="70">
            <h4 class="h4 mb-4 fw-normal">Change password</h4>
            <input type="hidden" id="responderid" name="responderid" value="<?php echo $responderid = isset($_GET['responder_id']) ? $_GET['responder_id'] : ""; ?>" />
            <div id="alertmessage" class="alert alert-success" role="alert">
                Your password has been successfully updated. Please open the bayan911 app again.
            </div>
            <div class="form-floating">
                <input type="password" minlength="8" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
                <label for="password">New Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-enter your new password" required>
                <label for="confirm_password">Confirm your new password</label>
            </div>
            <div class="form-floating" style="text-align: left;">
                <input type="checkbox" onclick="showPassword()">&nbsp;Show Password
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Change Password</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021 Incident Management System</p>
        </form>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#alertmessage').css("display", "none");

        function showPassword() {
            var x = document.getElementById("password");
            x.type = x.type === "password" ? "text" : "password";

            var y = document.getElementById("confirm_password");
            y.type = y.type === "password" ? "text" : "password";
        }

        $("#changepassword").submit(function(event) {

            event.preventDefault();

            if ($('#password').val() == $('#confirm_password').val()) {
                $.ajax({
                    type: "POST",
                    url: "api/mobile/account/updatepassword.php",
                    data: $("#changepassword").serialize(),
                    success: function(data) {
                        $('#alertmessage').css("display", "block");
                        //setTimeout(function(){ window.top.close(); }, 5000);                        
                    }
                });
            }

        });

        $('#confirm_password').on('keyup', function() {
            if ($('#password').val() == $('#confirm_password').val()) {
                console.log("match");
                $('#confirm_password').removeClass("is-invalid");
                $('#confirm_password').addClass("border-success");
                $('#password').addClass("border-success");
            } else {
                console.log("not match");
                $('#confirm_password').removeClass("border-success");
                $('#confirm_password').addClass("is-invalid");
            }
        });
    </script>
</body>

</html>