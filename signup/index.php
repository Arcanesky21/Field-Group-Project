<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../signup/css/style.css">
    <?php require_once "register.php"; ?>
</head>

<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="index.php">
                        <h2>student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name :</label>
                                <input type="text" name="first_name" id="fname" placeholder="Enter first name" required />
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name :</label>
                                <input type="text" name="last_name" id="lname" placeholder="Enter last name" required />
                            </div>
                            <div class="form-group">
                                <label for="name">ID Number :</label>
                                <input type="number" name="identification" id="ID" placeholder="Enter ID #" required />
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password_1" id="pass1" placeholder="Enter Password 10 character max" maxlength="10" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password_2" id="pass2" placeholder="Confirm Password" maxlength="10" required />
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="date" name="birth_date" id="birth_date" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" required />
                        </div>

                        <div class="form-submit">

                            <button class="submit"><a href="../index.html">Home</a></button>
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="reg_user" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>