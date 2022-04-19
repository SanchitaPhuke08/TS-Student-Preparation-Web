<html>

<head>
    <title>
        StudPrep | Home
    </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" type="image/jpg" href="Images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Latest FA icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FA kit link -->
    <script src="https://kit.fontawesome.com/274287ca05.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- <div class="topNav"> -->
    <nav class="navbar navbar-expand-lg navbar-dark customize-bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" title="Home page" href="#"><i class="fa fa-home"></i></a> -->
            <a class="navbar-brand" title="StudPrep" href="#"><img src="Images/logo-demo.png" width="50px"></a>
            <!-- <a class="navbar-brand" title="StudPrep" href="#"><img src="Images/demo.jpeg"
                        width="100px"></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">

                            <br>
                            <!-- <small class="tagline"> section for mention tagline</small> -->
                        </a>

                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                </ul>
                <!-- <form class="d-flex mb-0">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
                </form> -->
                <ul class="navbar-nav mb-2 mb-lg-0 mr-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- display this if user is logged in -->
                            <!--  
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#!">Settings</a></li>

                            <li><a class="dropdown-item" href="#">Reset Password</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li> 
                            <li><a class="dropdown-item" href="#!">Logout</a></li>
                        -->
                            <li><a class="dropdown-item" href="../StudPrep/Landing-pages/profile.php">Log In Now</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="info-wrapper jumbotron jumbotron-fluid alert-primary">
        <div class="container">
            <h3>About StudPrep</h3>
            <div class="info-content">In today's era students are losing their focus. Sometimes, they are not able to
                gather and organize all things at a time and consistency is decreasing day by day. So, to reduce these
                problems, we are designing a website where students can get the subject-wise material in one place.
                Users can also monitor the growth of their own study pace.
                Users can prioritize tasks and work efficiently through the portal which will help to increase
                productivity by tracking the tasks in progress record.
            </div>
        </div>
    </div>
    <div class="main-wrapper">
        <div class="cards-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 px-4">
                    <div class="card customize-card">
                        <a class="remove-anchor-style" href="../StudPrep/Focus-Time/focus-mode.html">
                            <div class="mt-2 text-center">
                                <img src="Images/focus-img.png" height="200px" class="card-img-top p-1" alt="focus-img">
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center fw-bold">Focus Mode</p>
                                <p class="justify-content-center">Focus mode will help you to become more productive and
                                    efficient by tracking time.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 px-4">
                    <div class="card customize-card">
                        <a class="remove-anchor-style" href="../StudPrep/All-Resources/all-resources.html">
                            <div class="mt-2 text-center">
                                <img src="Images/resources-icon.png" height="200px" class="card-img-top p-1"
                                    alt="resources-img">
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center fw-bold">All Resources</p>
                                <p class="justify-content-center">Every material is stored inside one platform to avoid
                                    scattering and save your time.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 px-4">
                    <div class="card customize-card">
                        <!-- <a class="remove-anchor-style" href="../StudPrep/Relax-Zone/relax-zone.html"> -->
                        <a class="remove-anchor-style" href="../StudPrep/Relax-Zone/Songs.html">
                            <div class="mt-2 text-center">
                                <img src="Images/relax-zone.png" height="200px" class="card-img-top p-1"
                                    alt="relax-zone-img">
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center fw-bold">Relax Zone</p>
                                <p class="justify-content-center">Relax zone will help at break time to become
                                    re-energize
                                    your mind.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer id="sticky-footer fixed-bottom" class="flex-shrink-0 py-2 customize-bg-dark text-white-50">
        <div class="container text-center">
            <!-- <div class="mb-2">
                <a href="about-us.html" class="remove-underline footer-links">About Us</a>
            </div> -->
            <div class="social mb-3">
                <div class="mb-1">Stay in touch on</div>
                <a href="" title="Instagram" target="blank" class="mx-2"><i class="fa fa-instagram"></i></a>
                <a href="" target="blank" class="mx-2" title="Facebook"><i class="fa fa-facebook-square"></i></a>
                <a href=" https://wa.me/9075441304" target="blank" class="mx-2" title="Send WhatsApp Message"><i
                        class="fa fa-whatsapp"></i></a>
                <a href="tel:5558920234" target="blank"
                    onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"
                    class="mx-2 text-white-50 remove-underline" title="Phone Call"><i class="fa fa-phone"></i>
                    +91-9075441304</a>
            </div>
            <div class="text-center">
                <small> Copyright &copy; StudPrep <i class="fas fa-book-reader"
                        style="color:rgb(255 255 255 / 50%)"></i>
                </small>
            </div>
        </div>
    </footer>

    <iframe src='https://webchat.botframework.com/embed/qnabot1618-bot1?s=u5F2ntgadHU.XPqVv51ybXlvHCQ2Vm66ZKlmuDIyXfSgH2yyM_19RQc'  style='min-width: 400px; width: 100%; min-height: 500px;'></iframe>
</body>

</html>