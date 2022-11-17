<?php
$con = mysqli_connect("mysql.eduskillsfoundation.org", "demo", "EduskillsDemo@1234", "demo");
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name                    = $_POST['name'];
    $phone                   = $_POST['phone'];
    $email                   = $_POST['email'];
    $message                 = $_POST['message'];

    $isql = "INSERT INTO `contact_us` (`sno`, `name`, `number`, `mail`, `message`, `time`) 
   VALUES (NULL, '$name', '$phone', '$email', '$message', current_timestamp());";
    $result = mysqli_query($con, $isql);
    if ($isql) {
        echo "<div class='alert alert-success alert-dismissible'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  Your Querry has been recieved we will get in touch with you soon....
              </div>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eduskills Connect'22</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        #mu-schedule {
            background-color: #f8f8f8;
            display: inline;
            float: left;
            width: 100%;
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .mu-schedule-area {
            display: inline;
            float: left;
            padding: 100px 0;
            width: 100%;
        }

        .mu-title-area {
            display: inline;
            float: left;
            text-align: center;
            padding: 0 120px;
            width: 100%;
        }

        h2 {
            font-size: 32px;
            line-height: 1.13;
        }

        p {
            margin: 0 0 10px;
        }

        #mu-schedule {
            background-color: #f8f8f8;
            display: inline;
            float: left;
            width: 100%;
        }

        .mu-schedule-area {
            display: inline;
            float: left;
            padding: 100px 0;
            width: 100%;
        }

        .mu-schedule-content-area {
            display: inline;
            float: left;
            margin-top: 50px;
            width: 100%;
        }

        .mu-schedule-menu {
            text-align: center;
            border: none;
            justify-content: center;
            align-items: center;
        }

        .mu-schedule-menu li {
            float: none;
            display: inline-block;
        }

        .mu-schedule-menu li a {
            border-radius: 0;
            margin: 0 10px;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .mu-schedule-content {
            margin-top: 50px;
        }

        .mu-event-timeline ul li {
            list-style-type: none;
            position: relative;
            width: 2px;
            margin: 0 auto;
            padding-top: 50px;
            background-color: #ddd;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .mu-event-timeline ul li::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 70px;
            transform: translateX(-50%);
            height: 24px;
            width: 24px;
            border-radius: 50%;
            background: inherit;
        }

        .mu-schedule-menu li a:hover,
        .mu-schedule-menu li a:focus,
        .mu-schedule-menu li.active a,
        .mu-schedule-menu li.active a:hover,
        .mu-schedule-menu li.active a:focus {
            color: #fff;
        }


        .mu-event-timeline ul li .mu-single-event {
            background-color: #fff;
            -webkit-box-shadow: 0 0 16px 0 rgba(32, 32, 47, 0.16);
            -moz-box-shadow: 0 0 16px 0 rgba(32, 32, 47, 0.16);
            box-shadow: 0 0 16px 0 rgba(32, 32, 47, 0.16);
            position: relative;
            top: 0;
            width: 400px;
            padding: 15px;
            text-align: left;
        }

        .mu-event-timeline ul li:nth-child(2n) .mu-single-event {
            left: 50px;
        }

        .mu-event-timeline ul li:nth-child(2n+1) .mu-single-event {
            left: -450px;
            text-align: right;
        }

        .mu-event-timeline ul li .mu-single-event img {
            height: 80px;
            width: 80px;
            float: left;
            border-radius: 50%;
            margin-right: 15px;
        }

        .mu-event-timeline ul li:nth-child(2n+1) .mu-single-event img {
            float: right;
            margin-right: 0;
            margin-left: 15px;
        }

        .mu-event-timeline ul li .mu-single-event::before {
            content: '';
            position: absolute;
            top: 23px;
            width: 0;
            height: 0;
            border-style: solid;
        }

        .mu-event-timeline ul li:nth-child(2n+1) .mu-single-event::before {
            right: -15px;
            border-width: 8px 0 8px 16px;
            border-color: transparent transparent transparent #fff;
        }

        .mu-event-timeline ul li:nth-child(2n) .mu-single-event::before {
            left: -16px;
            border-width: 8px 16px 8px 0;
            border-color: transparent #fff transparent transparent;
        }

        .mu-event-timeline ul li .mu-single-event h3 {
            margin-bottom: 5px;
            font-size: 16px;
        }

        .mu-event-timeline ul li .mu-single-event p {
            margin-bottom: 5px;
        }

        .mu-event-timeline ul li .mu-single-event span {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <script>
        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            //I'm adding this section so I don't have to keep updating this pen every year :-)
            //remove this if you don't need it
            let today = new Date(),
                dd = String(today.getDate()).padStart(2, "0"),
                mm = String(today.getMonth() + 1).padStart(2, "0"),
                yyyy = today.getFullYear(),
                nextYear = yyyy + 1,
                dayMonth = "12/10/",
                event = dayMonth + yyyy;

            today = mm + "/" + dd + "/" + yyyy;
            if (today > event) {
                event = dayMonth + nextYear;
            }
            //end

            const countDown = new Date(event).getTime(),
                x = setInterval(function() {

                    const now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        document.getElementById("headline").innerText = "It's Event Day!";
                        document.getElementById("countdown").style.display = "none";
                        document.getElementById("content").style.display = "block";
                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
    </script>

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <img class="img-fluid me-2" src="img/connectlogo.jpg" alt="">
            <!-- <img class="img-fluid me-2" src="https://www.aicte-india.org/sites/default/files/logo_new.png" alt=""> -->
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a class="nav-item nav-link " href="index.php">Home</a>
                <a class="nav-item nav-link " href="#about">About</a>
                <a class="nav-item nav-link " href="#speakers">Speakers</a>
                <a class="nav-item nav-link " href="#achievement_section">Achivements</a>
                <a class="nav-item nav-link " href="#agenda">Agenda</a>
                <a class="nav-item nav-link " href="#contact">Contact Us</a>
                <a href="register.php"><button type="button" style="margin-top:20px;" class="btn btn-danger">Register</button></a>
            </div>
        </div>
    </nav>

    <div class="header_section ">
        <div class=" header_main ">
            <div id="countdown" style="position:absoulte; z-index: 1;">
                <ul>
                    <li class="count"><span id="days"></span>&#8203 Days</li>
                    <li class="count"><span id="hours"></span>&#8203 Hrs</li>
                    <li class="count"><span id="minutes"></span>&#8203 Min</li>
                    <li class="count"><span id="seconds"></span>&#8203 Sec</li>
                </ul>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image:url() ;">
                        <h1 style="position:absolute;font-size:80px; z-index:1; margin-top:50px;color:white;margin-left:600px;">Welcome</h1>
                        <h4 style="position:absolute;font-size:40px; z-index:1; margin-top:150px;color:white;margin-left:650px;">To Connect'22</h4>
                        <a href="register.php"><button type="button" style="position:absolute; z-index:1; margin-top:550px;margin-left:600px;" class="inner_bt btn btn-danger">Register Now</button></a>
                        <img src="img/pixel.jpg" class="d-block w-100" style="height: 650px;" alt="...">
                    </div>
                    <div class="carousel-item" style="background-image: url();">
                        <h1 style="position:absolute;font-size:80px; z-index:1; margin-top:50px;color:white;margin-left:600px;">Welcome</h1>
                        <h4 style="position:absolute;font-size:40px; z-index:1; margin-top:150px;color:white;margin-left:650px;">To Connect'22</h4>
                        <a href="register.php"><button type="button" class="inner_bt btn btn-danger">Register Now</button></a>
                        <img src="img/events-bg.jpg" class="d-block w-100" style="height: 650px;" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container-xxl  py-5 my-5" id="about">
        <div class="container">
            <div class="row g-7 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/eduskillevent.jpg" style="height:400px;margin-top:190px;" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;"><br><br><br><br>
                            <h2 class="most_text text-center" id="achievement">About the Event</h2><br>
                        </div>
                        <p class="about_text" style="padding-bottom:10px; line-height:25px;margin-right: 40px; color:black;">EduSkills is an Ed-Tech social enterprise
                            that enables and empowers Industry 4.0 ready digital workforce in India. Our vision is to
                            fill the gap between academia and industry by ensuring world-class and equitable access to
                            the curriculum for our faculties and students. We empower people with career possibilities
                            by transforming the lives of learners and educators through the power of technology and
                            education.
                        </p>
                        <p class="about_text" style="padding-bottom:10px;margin-right: 40px;line-height:25px;color:black;">
                            We work closely with all the important stakeholders in the higher education ecosystem;
                            Central & State Government Organisations, AICTE, APSCHE, ESSCI, ISTE, various Technical and
                            Affiliating Universities, Global Academic Partners, more than 250 technical
                            institutions/colleges, their faculty members and students by bringing them together through
                            our skilling interventions.
                        </p>
                        <p class="about_text" style="color:black;">We are<b> the Digital Workforce of Tomorrow.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl  py-5 my-5" id="speakers">
        <div class="container py-5">
            <h2 class="most_text text-center" id="speakers">Speakers </h2><br><br><br><br>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img src="img/img-5.png" class="speakers">
                    <h5 class="wrd_bk">XXXXXXXXXXXX</h5>
                    <h6 class="professional">XXXXXXXXXXXXXXXXXXXXXXXXX</h6>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img src="img/img-5.png" class="speakers">
                    <h5 class="wrd_bk">XXXXXXXXXXXX</h5>
                    <h6 class="professional">XXXXXXXXXXXXXXXXXXXXXXXXX</h6>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img src="img/img-5.png" class="speakers">
                    <h5 class="wrd_bk">XXXXXXXXXXXX</h5>
                    <h6 class="professional">XXXXXXXXXXXXXXXXXXXXXXXXX</h6>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img src="img/img-5.png" class="speakers">
                    <h5 class="wrd_bk">XXXXXXXXXXXX</h5>
                    <h6 class="professional">XXXXXXXXXXXXXXXXXXXXXXXXX</h6>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img src="img/img-5.png" class="speakers">
                    <h5 class="wrd_bk">XXXXXXXXXXXX</h5>
                    <h6 class="professional">XXXXXXXXXXXXXXXXXXXXXXXXX</h6>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img src="img/img-5.png" class="speakers">
                    <h5 class="wrd_bk">XXXXXXXXXXXX</h5>
                    <h6 class="professional">XXXXXXXXXXXXXXXXXXXXXXXXX</h6>
                </div>

            </div>
        </div>
    </div>
    <section id="mu-schedule">
        <div class="container">
            <div class="row">
                <div class="colo-md-12">
                    <div class="mu-schedule-area">

                        <div class="mu-title-area">
                            <h2 class="mu-title">Schedule Detail</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.</p>
                        </div>

                        <div class="mu-schedule-content-area">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs mu-schedule-menu " role="tablist">
                                <li role="presentation" class="active"><a href="#first-day" aria-controls="first-day" role="tab" data-toggle="tab">1 Day / 19 Feb</a></li>
                                <li role="presentation"><a href="#second-day" aria-controls="second-day" role="tab" data-toggle="tab">2 Day / 20 Feb</a></li>
                                <li role="presentation"><a href="#third-day" aria-controls="third-day" role="tab" data-toggle="tab">3 Day / 21 Feb</a></li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content mu-schedule-content">
                                <div role="tabpanel" class="tab-pane fade mu-event-timeline in active" id="first-day">
                                    <ul>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">9.00 AM</p>
                                                <h3>Breakfast</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/speaker-1.jpg" alt="event speaker">
                                                <p class="mu-event-time">10.00 AM</p>
                                                <h3>Advanced SVG Animations</h3>
                                                <span>By Karl Groves</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/speaker-2.jpg" alt="event speaker">
                                                <p class="mu-event-time">11.00 AM</p>
                                                <h3>Presenting Work with Confidence</h3>
                                                <span>By Sarah Dransner</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/speaker-3.jpg" alt="event speaker">
                                                <p class="mu-event-time">12.00 AM</p>
                                                <h3>Keynote on UX & UI Design</h3>
                                                <span>By Ned Stark</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">1.00 PM</p>
                                                <h3>The End</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade mu-event-timeline" id="second-day">
                                    <ul>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">9.00 AM</p>
                                                <h3>Breakfast</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/speaker-1.jpg" alt="event speaker">
                                                <p class="mu-event-time">10.00 AM</p>
                                                <h3>Advanced SVG Animations</h3>
                                                <span>By Karl Groves</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/speaker-2.jpg" alt="event speaker">
                                                <p class="mu-event-time">11.00 AM</p>
                                                <h3>Presenting Work with Confidence</h3>
                                                <span>By Sarah Dransner</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/speaker-3.jpg" alt="event speaker">
                                                <p class="mu-event-time">12.00 AM</p>
                                                <h3>Keynote on UX & UI Design</h3>
                                                <span>By Ned Stark</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">1.00 PM</p>
                                                <h3>The End</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade mu-event-timeline" id="third-day">
                                    <ul>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">9.00 AM</p>
                                                <h3>Breakfast</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/speaker-1.jpg" alt="event speaker">
                                                <p class="mu-event-time">10.00 AM</p>
                                                <h3>Advanced SVG Animations</h3>
                                                <span>By Karl Groves</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/speaker-2.jpg" alt="event speaker">
                                                <p class="mu-event-time">11.00 AM</p>
                                                <h3>Presenting Work with Confidence</h3>
                                                <span>By Sarah Dransner</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/speaker-3.jpg" alt="event speaker">
                                                <p class="mu-event-time">12.00 AM</p>
                                                <h3>Keynote on UX & UI Design</h3>
                                                <span>By Ned Stark</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">1.00 PM</p>
                                                <h3>The End</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agenda End -->

    <!-- Enquiry Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <form name="form" action="index.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="mail_section">
                    <h2 class="most_text text-center">Enquiry </h2><br><br><br><br>
                    <input type="text" class="form-control" style="margin-bottom: 10px;" placeholder="Name" name="name" id="name">
                    <input type="number" class="form-control" style="margin-bottom: 10px;" placeholder="Phone" name="phone" id="phone">
                    <input type="email" class="form-control" style="margin-bottom: 10px;" placeholder="Email" name="email" id="email">
                    <textarea required class="form-control" style="margin-bottom: 10px;" placeholder="Message" id="Message" name="message" id="message"></textarea>
                    <div class="send_bt"><input type="submit" value="submit" onclick="return validation()" class="btn btn-success btn-lg"></div>
                </div>
            </form>
        </div>
    </div>
    <!-- Enquiry End -->

    <!-- Footer Start -->
    <div id="contact" class="container-fluid footer mt-5 pt-5 wow fadeIn" style="background-color:skyblue" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <legend class="display-6 text-center">Contact Us</legend>
                <div class="col-lg-5 col-md-6">
                    <h5 class="mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Corp. Office: 2nd Floor, ISTE Annex Building, IIT Delhi Campus, Shaheed Jeet Singh Marg, New Delhi - 110016
                    </p>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Head Office: #806, DLF Cyber City, Info Park, Technology Corridor, Bhubaneswar - 751024, Odisha, India.
                    </p>
                    <!-- <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p> -->
                    <p><i class="fa fa-envelope me-5"></i>support@eduskillsfoundation.org</p>
                </div>

                <div class="col-lg-5 col-md-6">
                    <h5 class="mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="#about">About Us</a>
                    <a class="btn btn-link" href="#speakers">Speakers</a>
                    <a class="btn btn-link" href="#agenda">Agenda</a>
                    <a class="btn btn-link" href="#Contact">Contact Us</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="mb-4">Follow us on</h5>
                    <div class="d-flex">
                        <a class="btn btn-square rounded-circle me-1" style="color:black ;" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square rounded-circle me-1" style="color:black ;" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square rounded-circle me-1" style="color:black ;" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square rounded-circle me-1" style="color:black ;" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark copyright" style="height:50px ;">
        <div class="container">
            <div class="row">
                <div class=" text-center ">
                    &copy; <a href="#">Eduskills Foundation</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">

                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>