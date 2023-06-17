<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid-19 Slot Booking System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>
<style>
.form-control {
    width: 50%;
}

.nav-link:hover {
    color: #ffc107;
}

.construction {
    font-family: Serif;
}

.darkbg {
    background: rgb(221, 213, 213);

}

.darkbg2 {
    background: rgb(229, 224, 224);
}

.nav-link {
    color: black;
}

.textz {
    color: aliceblue;
}

#btn-back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: none;
}

#grading {
    background: linear-gradient(1deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('img/2.jpg');
    width: 100%;
}

#grading1 {
    background: linear-gradient(1deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('img/2.jpg');
    width: 100%;
}

.button1 {
    background-color: #ffc107;
    border: none;
    color: #000;
    text-align: center;
    transition: all 0.5s;
    cursor: pointer;
}

.button1 span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
}

.button1 span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
}

.button1:hover span {
    padding-right: 25px;
}


.button1:hover span:after {
    opacity: 1;
    right: 0;
}

.navbtn1 {
    width: 110px;
}

.shadow-drop-2-bottom {
    -webkit-animation: shadow-drop-2-bottom 3s cubic-bezier(0.250, 0.460, 0.450, 0.940) 2s both;
    animation: shadow-drop-2-bottom 3s cubic-bezier(0.250, 0.460, 0.450, 0.940) 2s both;
}

@-webkit-keyframes shadow-drop-2-bottom {
    0% {
        -webkit-transform: translateZ(0) translateY(0);
        transform: translateZ(0) translateY(0);
        -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
        box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    }

    100% {
        -webkit-transform: translateZ(50px) translateY(-12px);
        transform: translateZ(50px) translateY(-12px);
        -webkit-box-shadow: 0 12px 20px -12px rgba(0, 0, 0, 0.35);
        box-shadow: 0 12px 20px -12px rgba(0, 0, 0, 0.35);
    }
}

@keyframes shadow-drop-2-bottom {
    0% {
        -webkit-transform: translateZ(0) translateY(0);
        transform: translateZ(0) translateY(0);
        -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
        box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    }

    100% {
        -webkit-transform: translateZ(50px) translateY(-12px);
        transform: translateZ(50px) translateY(-12px);
        -webkit-box-shadow: 0 12px 20px -12px rgba(0, 0, 0, 0.35);
        box-shadow: 0 12px 20px -12px rgba(0, 0, 0, 0.35);
    }
}
</style>

<body id="page-top">
    <div class="fixed-top shadow-drop-2-bottom">
        <nav class="navbar navbar-expand-lg navbar-light bg-info" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <nav class="navbar navbar-light bg-info">
                        <div class="container align-left">
                            <a class="navbar-brand" href="#">
                                <img src="img/covid.jpg" alt="" width="40" class="d-inline-block">
                                <b> <strong>Covid-19 VBS</strong><b>
                            </a>
                        </div>
                    </nav>
                </a>
                <!--  <a class="navbar-brand" href="#page-top">Covid19-TMS</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ">
                        <li class="nav-item active row-align-center">
                            <a class="nav-link" href="#about">About COVID-19</a>
                        </li>
                        <li class="nav-item active row-align-center">
                            <a class="nav-link" href="#services">Symptoms</a>
                        </li>
                        <li class="nav-item active row-align-center">
                            <a class="nav-link" href="#contact">Prevention</a>
                        </li>
                        <li class="nav-item active row-align-center">
                            <a class="nav-link" href="live-test-updates.php">Live Updates</a>
                        </li>
                        <li class="nav-item active row-align-center">
                            <a class="nav-link" href="new-user-testing.php"><strong><button type="button"
                                        class="btn button1"><span>User Slot</span></button></strong></a>
                        </li>
                        <li class="nav-item active row-align-center">
                            <a class="nav-link" href="login.php"><strong>
                                    <button type="button" class="btn button1"><span>Admin Login</span></button>
                                </strong></a>
                        </li>


                    </ul>
                </div>
            </div>
    </div>
    </nav>
    </div>
    <!--First slide-->
    <main>
        <section id="1stslide" class="">
            <div class="container pb-5">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <img src="img/1.jpg" alt="mobile-engineers" width=100%>
                    </div>
                    <div class=" col-12 col-sm-12 col-md-12 col-lg-6 ">
                        <p class="construction fs-1 fw-bold">
                            COVID-19 : Global pandemic caused by SARS-CoV-2 virus
                        </p>
                        <i>
                            COVID-19 is a highly contagious respiratory illness caused by the novel coronavirus
                            SARS-CoV-2.
                            The virus primarily spreads through respiratory droplets when an infected person coughs,
                            sneezes, talks, or breathes.
                            In severe cases, COVID-19 can lead to pneumonia, acute respiratory distress syndrome (ARDS),
                            organ failure, and even death.
                            <!--column within another row -->
                        </i>
                        <div class="row align-items-center">
                            <div class="pt-3">
                                <button type="button" class="btn button1">
                                <a href="https://www.mygov.in/covid-19/" class="button" target="_blank"><span>Know More</span></a></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="grading">
            <div class="container p-3" style="font-family:Serif">
                <div class="row pt-5">
                    <div class="col-6  text-warning pt-5">
                        <strong>: : COVID TALKS </strong>

                        <p class="class fs-3 text-white"><strong> Cookie will help you get things in complete
                                reality.</strong>
                        </p>
                        <p class="class text-white "> Cookie will help you get things in complete reality. </p>
                        <button type="button" class="btn button1"><a href="https://www.linkedin.com/in/shubham-singh-59a95b230/" class="button" target="_blank"><span>Contact Now</span></a></button>
                    </div>
                    <div class="col-6">
                        <div class="row row-cols-md-2 row-cols-sm-1 rol-cols-xs-1 row-cols-lg-2 g-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title fs-2 text-warning"> <strong>180+</strong></h5>
                                        <p class="card-text"><strong>Completed Operations</strong> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title fs-2 text-warning"> <strong>16+</strong></h5>
                                        <p class="card-text"><strong>Happy Patients</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title fs-2 text-warning"> <strong>18+</strong></h5>
                                        <p class="card-text"><strong>Qualified Doctors</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title fs-2 text-warning"> <strong>2+</strong> </h5>
                                        <p class="card-text"><strong>Years Experience</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about-->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>About Covid-19 </h2>
                        <hr>
                        <p class="lead"><b>Coronavirus disease (COVID-19) is an infectious disease caused by a newly
                                discovered
                                coronavirus. Most people infected with the COVID-19, virus will experience mild to
                                moderate,
                                respiratory illness & recover without requiring special treatment. Older people and
                                those
                                with
                                underlying medical problem like cardiovascular disease.</b></p>
                        <p class="lead"><b>The COVID-19 virus spread primarily through droplet of saliva or discharge
                                from
                                the
                                nose when an infected person coughs or sneezes so it’s important that you also practice
                                respiratory etiquette.</b></p>

                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>Covid-19 Symptoms</h2>
                        <hr />
                        <p class="lead"><b>Hight Fever 2-14 days!<br />
                                Reported illnesses have ranged from mild symptoms to severe illness and death</b></p>
                        <hr />
                        <p class="lead"><b>Dry Cough 2-14 days!<br />
                                Reported illnesses have ranged from mild symptoms to severe illness and death</b></p>
                        <hr />
                        <p class="lead"><b>Shortness of breath!<br />
                                Reported illnesses have ranged from mild symptoms to severe illness and death</b></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>Prevention</h2>
                        <hr />
                        <p class="lead"><b>Wear masks: Wear a mask that covers your nose and mouth when you are in
                                public settings, particularly in crowded places or where physical distancing is
                                challenging.
                                </b></p></hr>
                        <p class="lead">Maintain physical distance: Keep a distance of at least 1 meter (3 feet) from
                            people who are coughing, sneezing, or not wearing masks. Avoid crowded places and
                            gatherings, especially in enclosed spaces.</b></p>
                        </hr>
                        <p class="lead">Clean and disinfect frequently touched surfaces: Regularly clean and disinfect
                            surfaces such as doorknobs, light switches, phones, keyboards, and countertops.</b></p>
                        </hr>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer>
        <div class="text-center p-4" style="background-color: rgb(0, 0, 0);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="#">CovidVBS.com</a>
        </div>
        <button type="button" class="btn btn-secondary btn-floating btn-lg" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script>
    jQuery(function() {
        // This will select everything with the class smoothScroll
        // This should prevent problems with carousel, scrollspy, etc...
        jQuery('.navbar-nav li a').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
                .hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html,body').animate({
                        scrollTop: target.offset().top
                    }, 100); // The number here represents the speed of the scroll in milliseconds
                    return false;
                }
            }
        });
    });
    // Change the speed to whatever you want
    // Personally i think 1000 is too much
    // Try 800 or below, it seems not too much but it will make a difference
    </script>
    <script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
</body>

</html>