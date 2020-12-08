<?php
	include("src/config.php");
	include("src/classes/Account.php");
	$account = new Account($con);
	include("src/handlers/register-handler.php");
    include("src/handlers/login-handler.php");
    include("src/handlers/switchBtn.php");
?>

<html lang="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Pspsps Mail</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
		<link rel="icon" type="image/png" href="\148\assets\images\icons\pspspsps.png"/>
</head>
<body>

<?php
switchButton('registerButton');
?>

    <div id="background">

        <div id="loginContainer" style="margin: 0px auto;">

                    <div class="screen">

                            <div id="inputContainer" >
                                    <form id="loginForm" style="width: 350px; background-color: rgba(117, 110, 103, 0.75); padding: 30px; padding-bottom: 10%; border-radius: 40px" action="register.php" method="POST" >
                                        <h2>Login to your account</h2>
                                        <p>
                                            <?php echo $account->getError("Your username or password was incorrect"); ?>
                                            <label for="loginUsername">Username</label>
                                            <input id="loginUsername" style="color: white; background-color: transparent" name="loginUsername" type="text" placeholder="Your Username" value="<?php getInputValue('loginUsername') ?>" required>
                                        </p>
                                        <p>
                                            <label for="loginPassword">Password</label>
                                            <input id="loginPassword" style="color: white; background-color: transparent" name="loginPassword" type="password" placeholder="Your Password" required>
                                        </p>

                                        <button type="submit" style="background-color: #F7AA52" name="loginButton">LOG IN</button>

                                        <div class="hasAccountText">
                                            <span id="hideLogin" style="color: #F7AA52">If you don't have an account, please sign up!</span>
                                        </div>

                                    </form>

                                    <form id="registerForm" style="width: 350px; background-color: rgba(117, 110, 103, 0.75); padding: 30px; padding-bottom: 10%; border-radius: 40px" action="register.php" method="POST">
                                        <h2>Create your free account</h2>
                                        <p>
                                            <?php echo $account->getError("Your username must be between 3 and 25 characters"); ?>
                                            <?php echo $account->getError("Your username already exists"); ?>
                                            <label for="username">Username</label>
                                            <input id="username" name="username" type="text" placeholder="username" value="<?php getInputValue('username') ?>" required>
                                        </p>

                                        <p>
                                            <?php echo $account->getError("Your first name must be between 2 and 25 characters"); ?>
                                            <label for="firstName">First name</label>
                                            <input id="firstName" name="firstName" type="text" placeholder="first name" value="<?php getInputValue('firstName') ?>" required>
                                        </p>

                                        <p>
                                            <?php echo $account->getError("Your last name must be between 2 and 25 characters"); ?>
                                            <label for="lastName">Last name</label>
                                            <input id="lastName" name="lastName" type="text" placeholder="last name" value="<?php getInputValue('lastName') ?>" required>
                                        </p>

                                        <p>
                                            <?php echo $account->getError("Your email is invalid"); ?>
                                            <?php echo $account->getError("This email is already in use"); ?>
                                            <label for="email">Email</label>
                                            <input id="email" name="email" type="email" placeholder="name@gmail.com" value="<?php getInputValue('email') ?>" required>
                                        </p>

                                        <p>
                                            <?php echo $account->getError("Your passwords don't match"); ?>
                                            <?php echo $account->getError("Your password can only contain numbers and letters"); ?>
                                            <?php echo $account->getError("Your password must be between 5 and 30 characters"); ?>
                                            <label for="password">Password</label>
                                            <input id="password" name="password" type="password" placeholder="Your password" required>
                                        </p>

                                        <p>
                                            <label for="password2">Confirm password</label>
                                            <input id="password2" name="password2" type="password" placeholder="Your password" required>
                                        </p>

                                        <button type="submit" style="background-color: #F7AA52" name="registerButton">SIGN UP</button>

                                        <div class="hasAccountText">
                                            <span id="hideRegister" style="color: #F7AA52">Please log in</span>
                                        </div>
                                    </form>
                            </div>

                    </div>
                    <div class="home"></div>

                <div id="loginText" style="width: 480px; background-color: rgba(117, 110, 103, 0.75); padding: 0px 30px 18% 30px; margin-top: 45px; margin-left: 8%; display: inline-block; border-radius: 40px">
                    <h1>Pspsps Mail </h1>
                    <h2>Message your friends with ease!</h2>
                    <ul>
                        <li>Message your friends</li>
                        <li>Messages stay in inbox for 1 week</li>
                        <li>All your info is encrypted in the backend</li>
                    </ul>
                </div>

        </div>
    </div>
</body>
</html>
