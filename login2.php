<?php
session_start();
$pagetitle='login';
if(isset($_SESSION['username'])){
    header("Location:index2.php");
}
include 'connect2.php';
include 'header2.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=sha1($_POST['password']);
    $stmt = $con->prepare('SELECT userID, username, password FROM users WHERE username = ? AND password = ? ');
    $stmt->execute(array($username, $password));
    $count = $stmt->rowcount();
    $row = $stmt->fetch();
    if ($count > 0) {
        $_SESSION['username']='username';
        $_SESSION['ID'] = $row['userID'];
        header("Location:index2.php");
    }else{
        header("Location:login2.php");
    }
}
?>
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Register Today</h3>
                    <p>Fill in the data below.</p>
                    <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="col-md-12">
                            <input class="form-control" type="username" name="username" placeholder="username" required>
                            <div class="valid-feedback">username field is valid!</div>

                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="valid-feedback">Password field is valid!</div>
                            <div class="invalid-feedback">Password field cannot be blank!</div>
                        </div>



                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include 'footer2.php';
?>
