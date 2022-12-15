<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Flowers</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <div class="login-wrap">
        <div class="login-html">
            <h1>Burger Shop</h1>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            
            <div class="login-form">
                <!-- Log in -->
                <form action="loginconn.php" method="POST">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input" name="username">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password" name="password">
                        </div>
                        <!-- <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div> -->
                        <div class="group">
                            <input type="submit" class="button" value="Sign In" name="login">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a class="nav-link" href="./resetpassword.php">Forgot Password?</a>
                        </div>
                    </div>
                </form>
                

                <!-- sign up -->
                <form action="register.php" method="POST">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input" name="username">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password" name="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Repeat Password</label>
                            <input id="pass" type="password" class="input" data-type="password" name="repassword">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign Up" name="register">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">
                                Already registered?
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>