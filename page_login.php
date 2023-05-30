<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="fonts/font.css">
    <style>
        body {
            overflow-x: hidden;
        }

        .login {
            border: 2px solid #F7F5F5;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
        }

        input {
            border: 1.8px solid #DCDBDB !important;
            border-radius: 12px;
        }


        .form-header h2 {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 30px;
            background: linear-gradient(97.1deg, #73A76A 3.07%, #8C89B4 102.16%, rgba(151, 130, 130, 0) 102.17%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            --text-fill-color: transparent;
        }

        .form-header p {
            font-weight: 400;
            font-size: 14px;
            color: #8E958D;
            margin-top: -10px;
        }

        .sign-in h5 {
            font-weight: 600;
            font-size: 26px;
            color: #1F1E1E;
        }

        .sign-in p {
            margin-top: -5px;
            font-weight: 400;
            font-size: 16px;
            color: #C8C5C5;
        }

        .btn-sign {
            background: #1A96FC !important;
            border-radius: 12px;
            text-transform: capitalize !important;
        }
    </style>
</head>

<body class="pt-5" >

 
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-md-3 login">
            <div class="form-header mb-5">
                <h2 class="ff-logo">ODTcorp</h2>
                <p class="ff-sfRegular">Finance Management Program</p>
            </div>
            <div class="sign-in mb-4">
                <h5 class="ff-sfBold">Sign In</h5>
                <p class="ff-sfRegular">Please sign to access admin dashboard</p>
            </div>
            <form action="php/login.php" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input name="name" id="form2Example1" class="form-control ff-sfRegular text-black" />
                    <label class="form-label ff-sfRegular" for="form2Example1">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="password"  id="form2Example2" class="form-control ff-sfBold text-black" />
                    <label class="form-label ff-sfRegular" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->

           
                <!-- Submit button -->
                <button type="submit" value="Sign In" name="submit" class="btn btn-sign btn-block mb-4 text-white ff-sfBold fs-6">Sign In</button>

                <!-- Register buttons -->

            </form>
        </div>
    </div>

</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>

</html>