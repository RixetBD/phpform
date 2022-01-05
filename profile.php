<?php 
// Collect all variable from user.
session_start();
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_pass = $_POST['user_pass'];
$user_con_pass = $_POST['user_con_pass'];
$upperPass = preg_match('@[A-Z]@', $user_pass);
$lowerPass = preg_match('@[a-z]@', $user_pass);
$numberPass = preg_match('@[0-9]@', $user_pass);
$splcharPass = preg_match('@[!,#,$,%,^,&,+,*,/,=,<,>]@', $user_pass);

// Feadback user as a alert.
if (empty($user_name)) {
    $_SESSION ['name_err']= 'Please enter your name';
    header('location:index.php');
}else if (empty($user_email)) {
    $_SESSION ['email_err']= 'Please enter your email';
    header('location:index.php');
}else if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION ['email_err']= 'Please enter valid email';
    header('location:index.php');
}else if (empty($user_pass)) {
    $_SESSION ['pass_err']= 'Please enter your password';
    header('location:index.php');
}else if (!$upperPass || !$lowerPass || !$numberPass) {
    $_SESSION ['pass_err']= 'Must contain uppercase, lowercase, numbers';
    header('location:index.php');
}else if (!$splcharPass) {
    $_SESSION ['pass_err']= 'Must use a special character symbol';
    header('location:index.php');
}
else if (strlen($user_pass) < 8) {
    $_SESSION ['pass_err']= 'Passwords must be at least 8 characters';
    header('location:index.php');
}else if (empty($user_con_pass)) {
    $_SESSION ['pass_con_err']= 'Please enter confirm password';
    header('location:index.php');
}else if ($user_pass != $user_con_pass) {
    $_SESSION ['pass_con_err']= 'Passwords does not match!';
    header('location:index.php');
}

// Page Title
$pageTitle = 'Post Page';
include 'include-php/header.php';
?>

<section class="profile_area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="profile_img mb-5">
                    <div class="img1">
                        <img src="img/form-content/pro-bg.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="img2">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/form-content/avatar.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <h5 class="text-left">Welcome</h5>
                                <h4 class="text-danger"><?php echo $user_name;?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p>Thanks for signing up/ joining us</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="profile_info">
                    <h5>Hello, <?php echo $user_name;?></h5>
                    <p>You have successfully signed up.</p>
                    <img src="img/form-content/sign-in.jpg" alt="" class="img-fluid">
                    <p>Save your information to sign in later</p>

                    <table class="user_data">
                        <tr>
                            <td>Your Name</td>
                            <td><?php echo $user_name;?></td>
                        </tr>
                        <tr>
                            <td>Your Email</td>
                            <td><?php echo $user_email;?></td>
                        </tr>
                        <tr>
                            <td>Your Password</td>
                            <td><?php echo $user_pass;?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include-php/footer.php';?>