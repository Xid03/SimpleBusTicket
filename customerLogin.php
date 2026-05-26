
<?php


 if(isset($_POST["submit"]))
 {
     /*
         ADDING Customers
      Check if the $_POST key 'submit' exists
     */
     // Should be validated client-side
     $cname = $_POST["cfirstname"] . " " . $_POST["clastname"];
     $cphone = $_POST["cphone"];
     $email = $_POST["email"];
     $password = $_POST["password"];

     $customer_added = false;

     if(!$customer_exists)
     {
         // Route is unique, proceed
         $sql = "INSERT INTO `customers` (`customer_name`, `customer_phone`, `email`, `password`, `customer_created`) VALUES ('$cname', '$cphone', '$email', '$password', current_timestamp());";
         $result = mysqli_query($conn, $sql);
         // Gives back the Auto Increment id
         $autoInc_id = mysqli_insert_id($conn);
         // If the id exists then, 
         if($autoInc_id)
         {
             $code = rand(1,99999);
             // Generates the unique userid
             $customer_id = "CUST-".$code.$autoInc_id;
             
             $query = "UPDATE `customers` SET `customer_id` = '$customer_id' WHERE `customers`.`id` = $autoInc_id;";
             $queryResult = mysqli_query($conn, $query);

             if(!$queryResult)
                 echo "Not Working";
         }

         if($result)
             $customer_added = true;
     }

     if($customer_added)
     {
         // Show success alert
         echo '<div class="my-0 alert alert-success alert-dismissible fade show" role="alert">
         <strong>Successful!</strong> Customer Added
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
     }
     else{
         // Show error alert
         echo '<div class="my-0 alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Error!</strong> Customer already exists
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
     }
 }

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- CSS -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        a {
            text-decoration: none;
        }

        .header {
            position: fixed;
            height: 80px;
            width: 100%;
            z-index: 100;
            padding: 0 20px;
        }

        .nav {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            background-color: #A652FA;
        }

        .nav,
        .nav_item {
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: space-between;
        }

        .nav_logo,
        .nav_link,
        .button {
            color: #fff;
        }

        .nav_logo {
            font-size: 25px;
        }

        .nav_item {
            column-gap: 25px;
        }

        .nav_link:hover {
            color: #d9d9d9;
        }

        .button {
            padding: 6px 24px;
            border: 2px solid #fff;
            background: transparent;
            border-radius: 6px;
            cursor: pointer;
        }

        .button:active {
            transform: scale(0.98);
        }

        /* Home */
        .home {
            position: relative;
            height: 100vh;
            width: 100%;
            background-image: url(images/backgroundbus2.jpg);
            background-size: cover;
            background-position: center;
        }

        .home::before {
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 100;
            opacity: 0;
            pointer-events: none;
            transition: all 0.5s ease-out;
        }

        .home.show::before {
            opacity: 1;
            pointer-events: auto;
        }

        /* From */
        .form_container {
            position: fixed;
            max-width: 320px;
            width: 100%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(1.2);
            z-index: 101;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: all 0.4s ease-out;
        }

        .home.show .form_container {
            opacity: 1;
            pointer-events: auto;
            transform: translate(-50%, -50%) scale(1);
        }

        .signup_form {
            display: none;
        }

        .form_container.active .signup_form {
            display: block;
        }

        .form_container.active .login_form {
            display: none;
        }

        .form_close {
            position: absolute;
            top: 10px;
            right: 20px;
            color: #0b0217;
            font-size: 22px;
            opacity: 0.7;
            cursor: pointer;
        }

        .form_container h2 {
            font-size: 22px;
            color: #0b0217;
            text-align: center;
        }

        .input_box {
            position: relative;
            margin-top: 30px;
            width: 100%;
            height: 40px;
        }

        .input_box input {
            height: 100%;
            width: 100%;
            border: none;
            outline: none;
            padding: 0 30px;
            color: #333;
            transition: all 0.2s ease;
            border-bottom: 1.5px solid #aaaaaa;
        }

        .input_box input:focus {
            border-color: #7d2ae8;
        }

        .input_box i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color: #707070;
        }

        .input_box i.email,
        .input_box i.password {
            left: 0;
        }

        .input_box input:focus~i.email,
        .input_box input:focus~i.password {
            color: #7d2ae8;
        }

        .input_box i.pw_hide {
            right: 0;
            font-size: 18px;
            cursor: pointer;
        }

        .option_field {
            margin-top: 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form_container a {
            color: #7d2ae8;
            font-size: 12px;
        }

        .form_container a:hover {
            text-decoration: underline;
        }

        .checkbox {
            display: flex;
            column-gap: 8px;
            white-space: nowrap;
        }

        .checkbox input {
            accent-color: #7d2ae8;
        }

        .checkbox label {
            font-size: 12px;
            cursor: pointer;
            user-select: none;
            color: #0b0217;
        }

        .form_container .button {
            background: #7d2ae8;
            margin-top: 30px;
            width: 100%;
            padding: 10px 0;
            border-radius: 10px;
        }

        .login_signup {
            font-size: 12px;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <a href="#" class="nav_logo" style="margin-left: 10px;">Interpure</a>

            <ul class="nav_items">
                <li class="nav_item">
                    <a href="index.html" class="nav_link">Home</a>
                    <a href="#" class="nav_link">About us</a>
                    <a href="#" class="nav_link">Contact us</a>
                </li>
            </ul>

            <button class="button" id="form-open" style="margin-right: 10px;">Login</button>
        </nav>
    </header>

    <!-- Home -->
    <section class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            <!-- Login From -->
            <div class="form login_form">
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                    <h2>Customer Login</h2>

                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" placeholder="Enter your password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="check" />
                            <label for="check">Remember me</label>
                        </span>
                        <a href="#" class="forgot_pw">Forgot password?</a>
                    </div>

                    <button class="button">Login Now</button>

                    <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
                </form>
            </div>

            <!-- Signup From -->
            <div class="form signup_form">
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                    <h2>Customer Signup</h2>

                    <div class="input_box">
                        <input type="email" id="email" name="email" placeholder="Enter your email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" id="password" name="password" placeholder="Create password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="input_box">
                        <input type="text" id="cfirstname" name="cfirstname" placeholder="Firstname" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="input_box">
                        <input type="text" id="clastname" name="clastname" placeholder="Lastname" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="input_box">
                        <input type="text" id="cphone" name="cphone" placeholder="Contact Numbers" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <button name="submit" id="submit" class="button">Signup Now</button>

                    <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
                </form>
            </div>
        </div>
    </section>

    <script src="script.js"></script>

</body>

</html>