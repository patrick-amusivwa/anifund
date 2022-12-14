<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="animal crowd funding ">
    <meta name="keywords" content="pets, shelter, dog, cat">
    <meta name="author" content="student_name">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>animal crowdfund || Home</title>
    <script src="https://kit.fontawesome.com/4dd090434a.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- NAVBAR -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top" id="search-id">
            <a class="navbar-brand" href="index.html">AniFUND <i class="fas fa-paw" aria-hidden="true"></i></a>

            <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                        <g>
                            <path
                                d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                            </path>
                        </g>
                    </svg>
                    <input onkeyup="search_elements()" placeholder="Search" type="text" class="search-input"
                        id="search">
                </div>

                <button id="search-id" class="navbar-toggler navbar-light" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html" aria-label="link to home page">Home<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html" aria-label="link to about page">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html" aria-label="link to contact page">contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbarDropdown" id="navbarDropdownSuccessStories"
                                href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Success Stories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownSuccessStories">
                                <a class="dropdown-item" href="marley.html"
                                    aria-label="link to Marley's story">Marley</a>
                                <a class="dropdown-item" href="lassie.html"
                                    aria-label="link to Lassie's story">Lassie</a>
                                <a class="dropdown-item" href="felix.html" aria-label="link to Felix's story">Felix</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbarDropdown" id="navbarDropdownSupportUs" href="#"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Support Us
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownSupportUs">
                                <a class="dropdown-item" href="https://paypal.me/graperavies?locale.x=en_GB"
                                    target="_blank" rel="noopener" aria-label="link to paypal for donations">Donate</a>
                                <a class="dropdown-item" href="contact.html"
                                    aria-label="link to volunteer/contact us form">Volunteer</a>
                            </div>
                        </li>
                    </ul>
                    <a class="navbar-brand" class="login" href="Account/account.php"><img
                            src="Account/uploads/avatar.jpg">
                        <h6 class="username" style="color:orange;">Login</h6></i>
                    </a>
                </div>
            </nav>
    </header>
    <div id="page-container">
        <div id="content-wrap">
            <!-- HERO IMAGE -->
            <section>
                <div class="jumbotron jumbotron-fluid helpus">
                    <span role="img" aria-label="a dog and a cat cuddling peacefully on grass">
                    </span>
                    <div class="container">
                        <div class="helpus-text">
                            <h1 class="display-4">Help us to help them...</h1>
                            <p class="lead">Over 300 pets are put up for adoption everyday in South Wales.<br> Can you
                                help find their forever homes?</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary btn-lg helpus-btn "
                                    href="https://paypal.me/graperavies?locale.x=en_GB" target="_blank" rel="noopener"
                                    aria-label="link to paypal for donations" role="button">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our Goals
            <section id="our-goals">
                <div class="section-title">
                    
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div id="left-about">
                            <div class="left-heading">
                                <h3><b>Loving Care</b></h3>
                                <br>
                                <p>Our <b>state of the art rehabilitation facility</b> gives every pet that comes to us
                                    a fighting chance.
                                    With proper medical attention and training, we believe every pet can be transformed
                                    into the perfect addition
                                    to any family</p>
                            </div>
                            <div class="left-heading">
                                <h3><b>Second Chances</b></h3>
                                <br>
                                <p>Here at <b>Paws and Claws</b>, we believe in second chances.
                                    That is why we will never put a healthy pet down.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block ">
                        <div id="center-about">
                            <span role="img" aria-label="golden retreiver with tulip in its mouth">
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div id="right-about">
                            <div class="right-heading">
                                <h3><b>Education for All</b></h3>
                                <br>
                                <p>We understand how hard it can be adjusting to your new life as a pet owner, which is
                                    why we are always available for <b>advice, support and encouragement</b>.
                                    Just give us a ring, or an email!
                                </p>
                            </div>
                            <div class="right-heading">
                                <h3><b>Forever Homes</b></h3>
                                <br>
                                <p>Pets can make a house a home. After being through so much, we believe every pet that
                                    we treat deserves a <b>home to call their own.</b>
                                    We spend as much time and effort as possible placing our animals with loving
                                    families, who will cherish them forever.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!- CARDS -->
            <!-- <section class="header_cards">
                <h2>more about what we do </h2>
            </section>
            <section class="cards">
               
                <article id="profile1" class="card">
                    <figure>
                        <img src="assets/images/one.jpg" alt="marley-img" width="300" height="300" title="marleys-image">
                        <figcaption>every pet that comes to us a fighting chance.With proper medical attention and training, we believe every pet can be transformed
                            into the perfect addition</figcaption>
                    </figure>
                    
                </article>
                <article id="profile2" class="card">
                    <figure>
                        <img src="assets/images/twojpg.jpg" alt="tina amusivwa" width="300" height="300" title="tinas image">
                        <figcaption>we believe in second chances.That is why we will never put an unhealthy pet down.</figcaption>
                    </figure>
                  
                </article>
                <article id="profile3" class="card">
                    <figure>
                        <img src="assets/images/three.jpg" alt="simmy amusivwa" width="300" height="300" title="simmys image">
                        <figcaption>we understand how hard it can be adjusting to your new life as a pet owner, which is
                            why we are always available for advice, support and encouragement
                            Just give us a ring, or an email! </figcaption>
                    </figure> -->
            </article>

            </section>
            </section>
            <!-- TRIAL -->
            <section class="header_cards">
                <h2>more about what we do </h2>
            </section>
            <section class="cards">

                <div class="card">
                    <div class="content">
                        <div class="front">
                            <h3 class="title"><img src="assets/images/one.jpg" alt=""></h3>
                            <p class="subtitle">proper medical attention</p>
                        </div>

                        <div class="back">
                            <p class="description">
                                every pet that comes to us a fighting chance.With proper medical attention and training,
                                we believe every pet can be transformed
                                into the perfect addition
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="content">
                        <div class="front">
                            <h3 class="title"><img src="assets/images/twojpg.jpg" alt=""></h3>
                            <p class="subtitle">second-chances</p>
                        </div>

                        <div class="back">
                            <p class="description">
                                we believe in second chances.That is why we will never put an unhealthy pet down.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="content">
                        <div class="front">
                            <h3 class="title"><img src="assets/images/three.jpg" alt=""></h3>
                            <p class="subtitle">help new owners</p>
                        </div>

                        <div class="back">
                            <p class="description">
                                we understand how hard it can be adjusting to your new life as a pet owner, which is
                                why we are always available for advice, support and encouragement
                                Just give us a ring, or an email!
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SUCESS NARATION -->

            <!-- FOOTER -->
            <footer>
                <a class="navbar-brand" href="index.html">animal crowdfund <i class="fas fa-paw"
                        aria-hidden="true"></i></a>
                <div class="container-fluid footer-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="smedia-links">
                                <a href="https://www.facebook.com" target="_blank" rel="noopener"
                                    aria-label="link to facebook page"><i class="fab fa-facebook-square grow"></i></a>
                                <a href="https://www.twitter.com" target="_blank" rel="noopener"
                                    aria-label="link to twitter page"><i class="fab fa-twitter-square grow"></i></a>
                                <a href="https://www.instagram.com" target="_blank" rel="noopener"
                                    aria-label="link to instagram page"><i class="fab fa-instagram grow"></i> </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 ">
                            <div class="contact">
                                <p>Contact us<br>
                                    Tel:123 456 789<br>
                                    Email: studentemail@school.ac.country
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>