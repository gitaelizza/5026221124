<!--Gita Elizza Larasati-->
<!--5026221124-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laras' Website</title>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,500;9..40,600;9..40,700&family=Inter:wght@300;500;600;700&family=Young+Serif&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,500;9..40,600;9..40,700&family=Inter:wght@300;500;600;700&family=Playpen+Sans:wght@300;400;500&family=Young+Serif&display=swap');

        .navbar-main {
            font-family: "Sofia", sans-serif;
            font-size: 30px;
            font-weight: 600;
            color: #f0ebe5;
            margin-top: 2px;
            text-decoration: none;
            padding-right: 430px;
        }

        .nav-button {
            text-transform: capitalize;
            text-align: left;
            margin-right: 10px;
            border-radius: 10px;
        }

        body {
            background-color: #f0ebe5;
            display: flex auto;
        }

        .btn {
            background-color: #263a99;
            color: #f0ebe5;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-left: 450px;
        }

        .btn:hover {
            background-color: #97b4de;
        }

        .jumbotron {
            background-size: cover;
            height: 600px;
        }

        .jumbotron .display-4 {
            color: #263a99;
            padding-top: 200px;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
        }

        .jumbotron .deskripsi {
            color: #2f4156;
            text-align: center;
            font-size: 22;
            margin-top: auto;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .jumbotron .deskripsi span {
            font-weight: bold;
        }

        .sub-judul1 {
            font-size: 500;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 600;
            text-align: center;
        }

        .titlepage {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 17;
            line-height: 30px;
            width: 600px;
        }

        .fotodiri {
            border-radius: 5%;
        }

        .sub-judul2 {


            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 600;
            text-align: center;
            margin-top: 80px;
        }


        .service-box {
            background-color: #fff;
            padding: 2.5rem 1.3rem;
            border-radius: 1rem;
            margin-bottom: 3rem;
            text-align: center;
            max-height: 300px;
            transition: all 500ms ease;

        }

        .service-box:hover {
            transition: all 500ms ease;
            color: #fff;
            background-color: #0078ff;
            box-shadow: 0 0 0 10px #cde1f8;
        }

        .service-box .s-title {
            font-size: 1.4rem;
        }

        .service-box .s-description {
            color: #434242;
        }

        .jumbo-home {
            padding: 3rem;
            margin-bottom: 0;
        }

        .judul-town {
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #263a99;
            text-align: center;
        }

        .deskripsi-town {
            color: #263a99;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 10;

        }

        .activities {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .capt {
            color: #000000;
            font-weight: 600;
        }

        .skill-mf span {
            color: #4e4e4e;
        }

        .skill-mf .progress {
            background-color: #cde1f8;
            margin: 0.5rem 0 1.2rem 0;
            border-radius: 0;
            height: 0.7rem;
        }

        .skill-mf .progress .progress-bar {
            height: 0.7rem;
            background-color: #0078ff;
        }

        .Contact {
            background-color: black;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20;

        }

        @media (min-width: 992px) {

            .aboutme {
                margin-top: 70px;
                width: 700px;
                height: 500px;
                margin-left: 200px;
                ;

            }


            .nav-link {
                text-transform: capitalize;
                text-align: left;
                margin-right: 10px;
                font-weight: 500;
                position: relative;
            }


            .nav-link::after {
                content: '';
                position: absolute;
                width: 60%;
                height: 4px;
                border-radius: 4px;
                background-color: #f5efeb;
                bottom: 0;
                left: 0;
                transform-origin: right;
                transform: scaleX(0);
                transition: transform .3s ease-in-out;
                margin-left: 20%;
            }

            .nav-link:hover::after {
                transform-origin: left;
                transform: scaleX(1);
            }

            .nav-logo:hover {}

            .cv-tombol {
                display: inline-block;
                background: rgb(255, 247, 23);
                color: #000000;
                font-size: 20px;
                font-weight: 500;
                padding: 10px 30px;
                margin-top: 20px;
                border-radius: 6px;
                border: 2px solid rgb(45, 33, 2);
                transition: all 0.3s ease;
            }
        }
    </style>
</head>

<body>
    <script>
        function formValidation() {
            let name = document.getElementById("name");
            let email = document.getElementById("email");
            let number = document.getElementById("number");
            let message = document.getElementById("message");
            let letters = /^[A-Za-z\s]+$/;

            // Validasi form
            if (name.value == "") {
                showAlert("name-alert");
                name.focus();
                return false;
            }

            if (name.value.length < 3) {
                showAlert("name-length-alert");
                name.focus();
                return false;
            }

            if (!name.value.match(letters)) {
                showAlert("name-character-alert");
                name.focus();
                return false;
            }

            if (email.value == "") {
                showAlert("email-alert");
                email.focus();
                return false;
            }

            if (number.value == "") {
                showAlert("number-alert");
                number.focus();
                return false;
            }

            if (isNaN(number.value)) {
                showAlert("number-character-alert");
                number.focus();
                return false;
            }

            if (number.value.length < 10) {
                showAlert("number-length-alert");
                number.focus();
                return false;
            }

            if (message.value == "") {
                showAlert("message-alert");
                message.focus();
                return false;
            }

            // Reset form
            name.value = "";
            email.value = "";
            number.value = "";
            message.value = "";

            // Tampilkan alert sukses
            showSuccessPopup();
            return true;
        }

        function showAlert(alertId) {
            let alert = document.getElementById(alertId);
            alert.style.display = "block";
            setTimeout(function () {
                alert.style.display = "none";
            }, 2000);
        }

        function showSuccessPopup() {
            var success = document.getElementById("success-alert");
            success.style.display = "block";
        }

        function closeAlert() {
            var success = document.getElementById("success-alert");
            success.style.display = "none";
        }

    </script>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #263a99;">
        <div class="container">
            <a class="navbar-main">
                Laras' Website
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="#about" style="color: #f5efeb">About Me</a>
                    <a class="nav-item nav-link" href="#Education" style="color: #f5efeb">Education</a>
                    <a class="nav-item nav-link" href="#homeTown" style="color: #f5efeb">Home town</a>
                    <a class="nav-item nav-link" href="#Activities" style="color: #f5efeb">Activities</a>
                    <a class="nav-item nav-link" href="#contact" style="color: #f5efeb">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!--Jumbotron-->
    <section class="jumbo" id="jumbo">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid container">
                <h1 class="display-4">Hello!</h1>
                <p class="deskripsi">I'm <span>Laras</span> - <span>Welcome </span> to my first website!<br>
                    Here, you'll find a bit about my life, what keeps me busy, and where I call home.<br>
                    Take a look around!</p>
                <a class="btn nav-button" href="#about">Get to Know Me!</a>
            </div>
        </div>
    </section>

    <!--About me-->
    <section class="about" id="about">

        <h2 class="judul-town">ABOUT ME</h2>
        <div class="row aboutme">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <img src="foto/fotodiri.jpeg" class="img-fluid fotodiri">
                    </div>
                    <div class="col-md-6 ">
                        <div class="titlepage text_align_right delayed-text">
                            I’m Gita Elizza Larasati, a 20-year-old student in my 5th semester at the Information
                            Systems program at ITS. I’m passionate about learning and exploring new things—whether it's
                            diving into a good book, discovering new music, or tackling the next challenge that comes my
                            way.
                            <br><br>I absolutely love sharing ideas and stories with my friends. Whether we’re hanging
                            out over coffee or discussing our latest adventures, I find a lot of joy in meaningful
                            conversations. Speaking of adventures, I’m also a big fan of traveling and exploring new
                            places, whether it’s for sightseeing, shopping, or hunting for good food. Culinary
                            adventures are always at the top of my list!
                            <br><br>In my free time, I love attending concerts, soaking up live music, and enjoying the
                            energy of the crowd. It's one of my favorite ways to unwind and have fun.
                            <br><br>As a person, I consider myself responsible and adaptable—I like to make sure
                            everything is in order, but I’m also quick to adjust when things change. I’m a bit of a
                            perfectionist, always striving to do my best in everything I take on, whether it’s academics
                            or personal projects.
                            <br><br>So, that’s a little bit about me!
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Education-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section id="Education">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <br>
                        <h2 class="judul-town">EDUCATION</h2><br><br>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="logo-skolah">
                            <img src="foto/logosmp1.png" width="100px">
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">SMP Negeri 1 Bangkalan</h2>
                            <p class="s-description text-center">
                                I began my academic journey at SMP 1 Bangkalan, where I built a strong foundation in
                                various subjects and developed a curiosity for learning.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="logo-skolah">
                            <img src="foto/logosma.png" width="80px">
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">SMA Negeri 1 Bangkalan</h2>
                            <p class="s-description text-center">
                                At SMA 1 Bangkalan, I discovered my passion for technology and problem-solving, which
                                inspired me to pursue a future in the tech field.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="logo-its">
                            <img src="foto/logoitss.png" width="70px">
                        </div>
                        <div class="service-content">
                            <h2 class="s-title" style="margin-top: 10px;">ITS</h2>
                            <p class="s-description text-center">
                                Now, as a 5th-semester student in Information Systems at ITS, I’m diving deeper into the
                                world of technology and continuously learning from new challenges and experiences.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <!--Home Town-->
    <section class="homeTown" id="homeTown">
        <div class="jumbo-home jumbotron-fluid  text-white jumbotron-colour">
            <div class="container">
                <h2 class="judul-town">HOME TOWN</h2>
                <div class="row">
                    <div class="col transition titlepage text_align_left delayed-text"
                        style="color: #000000; padding-left: 60px;">
                        I was born and raised in Bangkalan, a town rich in history and culture on the western tip of
                        Madura Island. Bangkalan holds a special place in my heart, with its vibrant local traditions,
                        friendly people, and beautiful landscapes. From the serene coastline to the bustling traditional
                        markets, the town offers a unique mix of tranquility and liveliness.
                        <br><br>Bangkalan is also known for its cultural heritage, such as Karapan Sapi (bull racing),
                        traditional dances, and a variety of local culinary delights. Growing up in this environment has
                        given me a deep appreciation for community values, cultural diversity, and the importance of
                        preserving traditions. It’s a place where modern life blends seamlessly with the old, creating a
                        sense of balance that I carry with me wherever I go.
                        <br><br>Although I’ve moved away to pursue my education, Bangkalan will always be my home, a
                        place that shaped my identity and continues to inspire me.
                    </div>
                    <div class="col text-white text-lg-center transition" style=" font-size: x-large;">
                        <img src="foto/bangkalan.jpg" width="300px" height="450px"
                            style="margin-bottom: 20px; border-radius: 5%;">

                        <br>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>
    </section>

    <br>
    <br>

    <!--Activities-->
    <section class="activities" id="Activities">
        <br>
        <div class="activities jumbotron-fluid text-center jumbotron-colour2">
            <h2 class="judul-town">ACTIVITIES</h2>
            <p>This is what I do in my univeristy</p>
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="foto/foto1.jpeg" width="1000" height="600px">
                    </div>
                    <div class="carousel-item">
                        <img src="foto/foto2.jpeg" width="1000px" height="600px">
                    </div>
                    <div class="carousel-item">
                        <img src="foto/foto3.jpeg" alt="Mt. Bromo" width="1000px" height="600">
                    </div>
                    <div class="carousel-item">
                        <img src="foto/foto4.jpeg" alt="Mt. Bromo" width="1000px" height="600">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>


    <!--Contact Me-->
    <br>
    <br>
    <section class="contact pr-3" id="contact">
        <div class="container">
            <div class="row">
                <h2 class="judul-town">Contact Me</h2>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h1 style="color: #2a2829;">Let's Stay Connected</h1>
                    <p>
                        Feel free to reach out! Whether you want to chat, collaborate, or just say hi, I’d love to hear
                        from you. You can contact me through the form. Let’s keep in touch!
                    </p>
                </div>

                <div class="col-md-6">
                    <form action="#contact-me">
                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 py-3 shadow" placeholder="Your Name"
                                    id="name" />
                                <div id="name-alert" style="display: none; color: red; margin-top: 5px;">*Name Must Be
                                    Filled</div>
                                <div id="name-length-alert" style="display: none; color: red; margin-top: 5px;">*Name
                                    Must Be Atleast 3 Character</div>
                                <div id="name-character-alert" style="display: none; color: red; margin-top: 5px;">*Name
                                    Must Be Character</div>
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 py-3 shadow" placeholder="Your Email"
                                    id="email" />
                                <div id="email-alert" style="display: none; color: red; margin-top: 5px;">*Email Must Be
                                    Filled</div>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-12">
                                <input type="text" class="form-control border-0 py-3 shadow" placeholder="Phone Number"
                                    id="number" />
                                <div id="number-alert" style="display: none; color: red; margin-top: 5px;">*Number Must
                                    Be Filled</div>
                                <div id="number-length-alert" style="display: none; color: red; margin-top: 5px;">
                                    *Number Must Be Atleast 10 Character</div>
                                <div id="number-character-alert" style="display: none; color: red; margin-top: 5px;">
                                    *Please Fill With Number</div>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-12">
                                <textarea class="form-control border-0 shadow" placeholder="Message"
                                    style="height: 100px;" id="message"></textarea>
                                <div id="message-alert" style="display: none; color: red; margin-top: 5px;">*Message
                                    Must Be Filled</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-end">
                                <button onclick="formValidation()" type="submit" class="btn btn-primary mt-2"
                                    style="background-color: #66cc66; border-color: #66cc66; white-space: nowrap; margin-bottom: 100px; margin-left: 100px;">
                                    Send Me Quotes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




</body>

</html>
