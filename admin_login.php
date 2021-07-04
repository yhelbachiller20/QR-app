<?php
$pageTitle = "Assumption Antipolo";
include "common/header.php";
include "common/connect.php";
include "script/admin_login_model.php";
?>
<p style="text-align: center; color: red; margin-top: 10px;"><?php echo $user_password_empty . $login_error; ?>&nbsp;</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . $id; ?>" method="post">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control"/>

    </div>    
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control"/>

    </div>
    <div class="form-group">
        <input type="submit" name="btn_submit" class="btn btn-primary" value="Login">
    </div>
    <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
</form>
<?php include "common/footer.php"; ?>