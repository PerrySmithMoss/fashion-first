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
        $email = $con -> real_escape_string($_POST['email']);
        $password = $con -> real_escape_string($_POST['password']);

        // check if the user exists 
        $sql = $con->query("SELECT id, password FROM users WHERE email='$email'");

        if ($sql->num_rows > 0) {
            $data = $sql-> fetch_array();
            if (password_verify($password, $data['password'])) {
                $msg = "<h4>You're now logged in.</h4>";
            } else
            $msg = "User not found, please check inputs.";
        } else 
        $msg = "User not found, please check inputs.";
}

?>

<!DOCTYPE html>
<html lang="en">
<div class="container">
<?php include('templates/header.php') ?>

    <!-- Form Section -->
<form action="login.php" method="POST" class="login-form">
    <div class="card-panel z-depth-5">

        <!-- Form Logo Section  -->
        <div class="row margin">
            <div class="col s12 m12 l12 center">
                <p class="login-title">Sign in with email</p>
                <?php if($msg != "") echo $msg; ?>
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
            <input type="submit" value="Login" name="submit" 
            class="btn waves-effect waves-light submit-btn" 
            style="width:100%; background-color: #212121">
        </div>

            <!-- Form "Register Now" And "Forgot Password" Link Section. -->
        <div class="" style="font-size:14px;"><br>
            <a href="register.php" class="left">Register Now!</a>
            <a href="" class="right ">Forgot Password?</a>
        </div><br>
    </div>
</form>


<?php include('templates/footer.php') ?>
</div>
    
</html>