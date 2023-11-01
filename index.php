<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/education-styles.css">
    <link rel="stylesheet" href="dist/output.css">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <title>LOGIN</title>
</head>

<body>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form">
                    <h2 class="title">LOGIN</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="pass" />
                    </div>
                    <div class="flex mb-3 showpass">
                        <input type="checkbox" name="" id="show" class="mt-1">
                        <p class="ml-2" id="show-hide">Show password</span>
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                </form>

                <!-- form for create user -->
                <form action="#" class="sign-up-form">
                    <h2 class="title">Register</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="USE YOUR LRN no. AS USER" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="reg-pass" />
                    </div>

                    <div class="flex mb-3 showpass">
                        <input type="checkbox" id="show-reg" class="mt-1">
                        <p class="ml-2" id="reg-show-hide">Show password</span>
                    </div>

                    <input type="submit" class="btn" value="Sign up" />
                    <div class="social-media">
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3></h3>
                    <!--<p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p> -->
                    <button class="btn transparent" id="sign-up-btn">
                        REGISTER
                    </button>
                </div>
                <img src="img/education-animate.svg" class="image" alt="" />
            </div>

            <!-- this code for registration -->
            <div class="panel right-panel">
                <div class="content">
                    <h3>Create Account</h3>
                    <p>
                        Please use your LRN no. To create account
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        LOGIN
                    </button>
                </div>
                <img src="img/sign-up-animate" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="js/sb-admin-2.js"></script>
    <script>

        var shows = document.getElementById('show');

        shows.addEventListener('click', function () {

            var pass = document.getElementById('pass');
            var showText = document.getElementById('show-hide');

            if (pass.type === 'password') {
                pass.type = 'text';
                showText.innerHTML = 'Hide password';
            } else {
                pass.type = 'password';
                showText.innerHTML = 'Show password ';

            }

        });

        var shows = document.getElementById('show-reg');

        shows.addEventListener('click', function () {

            var pass = document.getElementById('reg-pass');
            var showText = document.getElementById('reg-show-hide');

            if (pass.type === 'password') {
                pass.type = 'text';
                showText.innerHTML = 'Hide password';
            } else {
                pass.type = 'password';
                showText.innerHTML = 'Show password ';

            }

        })
    </script>

</body>

</html>