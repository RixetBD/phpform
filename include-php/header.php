<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - CIT IAWD 2103</title>

    <link rel="shortcut icon" href="img/icons/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/fancystyle.css">

    <link rel="stylesheet" href="css/form.style.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Start OF Navbar Area -->
    <section id="nav_contain">
        <div class="container" id="nav_aria">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/website-wlogo.png" alt="Logo" class="site_logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service.php">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="portfolio.php">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item nav-modal">
                                <a class="nav-link site_nav_img" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="img/3.png" alt="">
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Muhammad Rabiul</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img src="img/3.png" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="col-6">
                                                        <h5>Muhammad Rabiul</h5>
                                                        <h6>Full Stack Web Developer</h6>
                                                        <a href="tel:+8801773800869">+8801773800869</a>
                                                        <a href="mailto:rixetbd@gmail.com">rixetbd@gmail.com</a>
                                                        <ul class="modal_smedia">
                                                            <li><a href="https://www.facebook.com/rixet.rabiul/"><i
                                                                        class="fab fa-facebook"></i></a></li>
                                                            <li><a href="https://www.instagram.com/rixetbd/"><i
                                                                        class="fab fa-instagram"></i></a></li>
                                                            <li><a href="https://twitter.com/rixetbd"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                            <li><a href="https://wa.link/b0dyi1"><i
                                                                        class="fab fa-whatsapp"></i></a></li>
                                                            <li><a href="https://www.linkedin.com/in/rixetbd/"><i
                                                                        class="fab fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- End OF Navbar Area -->