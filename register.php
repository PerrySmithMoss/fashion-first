<?php 

    // connect to database
    $con = mysqli_connect('localhost', 'root', '', 'fashion-first');

    // check connection
    if(!$con) {
        echo 'Connection error:' . mysqli_connect_error();
    }
    
    $msg = "";

    if (isset($_POST['submit'])) {


        // check form feilds 
        $name = $con -> real_escape_string($_POST['name']);
        $email = $con -> real_escape_string($_POST['email']);
        $password = $con -> real_escape_string($_POST['password']);

        // hash the password
        $hash = password_hash($password, PASSWORD_BCRYPT);

        // add user to database
        $con -> query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hash')");

        // sccess message upon sign up
        $msg = '<h3>You have now been registered<h3>';
}

?>

<!DOCTYPE html>
<html lang="en">
<div class="container">
<?php include('templates/header.php') ?>

    <!-- Form Section -->
<form action="register.php" method="POST" class="login-form">
    <div class="card-panel z-depth-5">

        <!-- Form Logo Section  -->
        <div class="row margin">
            <div class="col s12 m12 l12 center">
                <p class="login-title">Sign up with your email</p>
                <?php if($msg != "") echo $msg; ?>
            </div>
        </div>

        <!-- Form Username Input Section -->
        <div class="col s12 m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input class="validate" type="text" name="name" id="name">
                <label for="name">Name</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
        </div>

        <!-- Form Email Input Section -->
        <div class="col s12 m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input class="validate" type="email" name="email" id="email">
                <label for="email">Email</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
        </div>

        <!-- Form Password Input Section -->
        <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input class="validate" type="password" name="password" id="password">
                <label for="password">Password</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
        </div>

            <!-- Form Chekbox (Remember Me) Input Section -->
        <div class="left">
            <input type="checkbox" id="checkbox">
            <label for="checkbox">Remember Me</label>
        </div>
        <br><br>

            <!-- Form Button Section  -->
        <div class="center">
            <input type="submit" value="Sign up" name="submit" 
            class="btn waves-effect waves-light submit-btn" 
            style="width:100%; background-color: #212121">
        </div>

            <!-- Form "Register Now" And "Forgot Password" Link Section. -->
        <div class="" style="font-size:14px;"><br>
            <a href="login.php" class="left">Login</a>
            <a href="" class="right ">Forgot Password?</a>
        </div><br>
    </div>
</form>


<?php include('templates/footer.php') ?>
</div>
    
</html>