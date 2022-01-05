<?php
session_start();
$pageTitle = 'Form Design';
include 'include-php/header.php';
?>
<section class="form_con_fluid">
    <div class="container">

    </div>
    <div class="form_container col-lg-8">
        <div class="card" style="width: 920px;">
            <div class="row">
                <div class="col-md-6 col-lg-6 card_left">
                    <img src="img/form-content/clogo.png" alt="Creative" class="img-fluid" width="200">
                    <h3>Student Login Form</h3>
                    <p>Please use your credentials to login.</p>

                </div>
                <div class="col-md-6 col-lg-6 card_right">
                    <form action="profile.php" method="POST">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="user_name" placeholder="Type your name">
                            <div class="input_alert">
                                <?php 
                            if (isset($_SESSION ['name_err'])) { 
                                echo $_SESSION ['name_err'];
                            }unset ($_SESSION ['name_err']);
                            ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="user_email" placeholder="Type your email">
                            <div class="input_alert">
                                <?php 
                            if (isset($_SESSION ['email_err'])) { 
                                echo $_SESSION ['email_err'];
                            }unset ($_SESSION ['email_err']);
                            ?>
                            </div>
                        </div>
                        <div class="form-group pass_eye_input">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="user_pass" id="pass_put"
                                placeholder="Type your password">
                            <i class="fas fa-eye pass_eye_icon" id="pass_put_eye"></i>
                            <div class="input_alert">
                                <?php 
                            if (isset($_SESSION ['pass_err'])) { 
                                echo $_SESSION ['pass_err'];
                            }unset ($_SESSION ['pass_err']);
                            ?>
                            </div>
                        </div>
                        <div class="form-group pass_eye_input">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" id="pass_con_put" name="user_con_pass"
                                placeholder="Confirm your password">
                            <i class="fas fa-eye pass_eye_icon eye_icon2" id="pass_con_eye"></i>
                            <div class="input_alert">
                                <?php 
                            if (isset($_SESSION ['pass_con_err'])) { 
                                echo $_SESSION ['pass_con_err'];
                            }unset ($_SESSION ['pass_con_err']);
                            ?>
                            </div>
                        </div>
                        <div class="form-group card_submit">
                            <a href="#"><i class="fas fa-user-alt-slash"></i> I have no account.</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-sign-in-alt pe-1"></i>
                                Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 
<section>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque maiores deleniti quas aliquam optio ea dolorum! Accusantium hic tenetur labore debitis eveniet ea placeat veritatis omnis ad, molestias, repellendus ut. Velit facere officiis exercitationem voluptatum adipisci neque, itaque impedit laboriosam repellat, libero, esse animi quaerat possimus placeat deserunt vero odit?</p>
    </div>
</section>
 -->



<?php include 'include-php/footer.php';?>