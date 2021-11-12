<?php
include 'connect2.php';
include 'header2.php';
//function section;
function up($errormsg, $seconds = 3){
    global $errormassages;
    global $themassge;
    $url= isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']!== '' ?$_SERVER['HTTP_REFERER'] :'index.php';
    if(isset($themassge)){
        echo "<div class='alert alert-success'>the website will change $themassge</div>";
        echo "<div class='alert alert-info'>after $seconds</div>";
        header("refresh:$seconds;url=$url");
    }
    if (isset($errormassages)){
        echo "<div class='alert alert-danger'>the website will change $errormassages</div>";
        echo "<div class='alert alert-info'>after $seconds seconds</div>";
        header("refresh:$seconds;url=$url");
    }
}
//end function section;
if(isset($_GET['do'])){
    $do= $_GET['do'];

}else{
    $do='Add';
}

if($do == 'Add'){?>
    <h1 class="text-center">Add new members</h1>
        <div class="container">
        <form class="form-horizontal" action="?do=Insert" method="POST">
            <div class="form-group">
                <label class="col-sm-2 control-label">username</label>
                <div class="col-sm-10">
                    <input type="text" name="Username"  class="form-control" placeholder=" min 4 char -> max 10 char" />
            </div>
                    </div>
                    <div class="form-group">
                <label class="col-sm-2 control-label">password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control"  autocomplete="new-password" placeholder="put your new password" />

            </div>
                    </div>
                    <div class="form-group">
                <label class="col-sm-2 control-label">email</label>
                <div class="col-sm-10">
                    <input type="text" name="email"  class="form-control" placeholder="put your new email"/>
            </div>
                    </div>
                    <div class="form-group">
                <label class="col-sm-2 control-label">fullname</label>
                <div class="col-sm-10">
                    <input type="text" name="fullname"  class="form-control" placeholder="put your fullname"/>
            </div>
                    </div>
                    <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Add member"  class="btn btn-outline-primary">
            </div>
                    </div>
                 </form>
                     </div>
<?php
}elseif ($do == 'Insert') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<h1 class="text-center">Insert members</h1>';
        echo "<div class='container'>";
        $username = $_POST['Username'];
        $pass = sha1($_POST['password']);
        $Email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $errors = array();
        if (strlen($username) < 4) {
            $errors[] = '<div class="alert alert-danger">you cant put the username less than 4 </div>';
        }
        if (strlen($username) > 7) {
            $errors[] = '<div class="alert alert-danger">you cant put the username bigger than 7 </div>';
        }
        if (empty($Email)) {
            $errors[] = '<div class="alert alert-danger">you must put your Email ! </div>';
        }
        if (empty($fullname)) {
            $errors[] = '<div class="alert alert-danger">you must put your Fullname ! </div>';
        }
        if (empty($pass)) {
            $errors[] = '<div class="alert alert-danger">you must put your Fullname ! </div>';
        }
        foreach ($errors as $error) {
            echo $error . '<br/>';
        }
        if (empty($errors)) {
            $stmt3 = $con->prepare('SELECT * FROM users WHERE username=? ');
            $stmt3->execute(array($username));
            $count3 = $stmt3->rowcount();
            if ($count3 > 0) {
                $errormassages = "this is exist";
                up($errormassages, 2);
            } else {
                $stmt = $con->prepare("INSERT INTO users(username , password, Email, Fullname, Date)VALUES(:zusername, :zpass, :zemail, :zfullname, now())");
                $stmt->execute(array(
                    'zusername' => $username,
                    'zpass' => $pass,
                    'zemail' => $Email,
                    'zfullname' => $fullname,
                ));
                $count = $stmt->rowcount();
                if ($count > 0) {
                    $themassge = "ADD your information is Done";
                    up($themassge, 2);
                }

            }

        }
    }
}

