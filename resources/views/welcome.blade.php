<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.css">
    <link rel="stylesheet" href="{{asset('css')}}/style.css">

    <!-- Bootstrap Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>My Portofolio | Emah</title>
</head>

<body id="home">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #3dcaf5;">
        <div class="container">
            <a class="navbar-brand " href="#">My Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="#home">Home</a>
                    <a class="nav-link active" href="#about">About</a>
                    <a class="nav-link active" href="#project">Project</a>
                    {{-- <a class="nav-link active" href="#contact">Contact</a> --}}
                    <a class="nav-link active" href="{{asset('pdf')}}/Emah Khujaemah - Curriculum Vitae.pdf">Resume</a>
                    <a class="nav-link active"
                        href="https://drive.google.com/drive/folders/1eDLAWZ83RihxjGfrp4lkOzlc3cpoqtiG?usp=sharing">Certificate</a>
                    <a class="nav-link active" href="{{asset('pdf')}}/IPS_1905005_SEMESTER_1-6.pdf">GPA</a>
                    @if (Route::has('login'))
                    <div class="">
                        @auth
                        <a href="{{ url('/home') }}" class="nav-link active">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="nav-link active">Log in</a>
                        {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link active ">Register</a>
                        @endif --}}
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <section class="jumbroton text-center text-info" style="padding-top: 6rem; background-color: #87e3ff;">
        <img src="{{asset('img')}}/emah-cv.jpg" alt="foto profil" class="rounded-circle img-thumbnail" />
        <h1 class="fw-bold display-4">Emah Khujaemah</h1>
        <p class="fw-bold lead">Software Engineering | Laravel</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,32L17.1,74.7C34.3,117,69,203,103,202.7C137.1,203,171,117,206,74.7C240,32,274,32,309,58.7C342.9,85,377,139,411,149.3C445.7,160,480,128,514,144C548.6,160,583,224,617,224C651.4,224,686,160,720,165.3C754.3,171,789,245,823,245.3C857.1,245,891,171,926,160C960,149,994,203,1029,208C1062.9,213,1097,171,1131,170.7C1165.7,171,1200,213,1234,224C1268.6,235,1303,213,1337,181.3C1371.4,149,1406,107,1423,85.3L1440,64L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- About -->
    <section id="about" class="about" style="padding-top: 5rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-5 col-md-6">
                    <h3 class="text-center">About Me</h3>
                    <hr>
                    <br>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4 pLeft">
                  <h4 class="text-center">My Story</h4>
                  <div class="biodata pLeft">
                    <p>
                      <!-- Perkenalkan semuanya, Nama saya Emah. Saya berasal dari Indramayu.
                    Saya kuliah di Politeknik Negeri Indramayu, dan sekarang menempuh Semester 6. -->
                      <!-- I am a software engineering student from the Indramayu State Polytechnic.  -->
        
                      &emsp;&ensp;&nbsp; I am a Web developer who is experienced in making applications, especially with the
                      Laravel
                      framework. I
                      have also deployed my application with Microsoft Azure cloud computing. I am a fast learner and flexible
                      in completing the given task.
                    </p>
                  </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 mb-4 pRight">
                  <h4 class="text-center">Personal Information</h4>
                  <div class="personal pRight">
                    <p>&emsp;&ensp;Name : Emah Khujaemah<br>
                      <!-- Status : college student<br> -->
                      &emsp;&ensp;Collage : Indramayu State Polytechnic<br>
                      &emsp;&ensp;Major : Informatics Engineering <br>
                      &emsp;&ensp;Study Program : D4 Software Engineering
                    </p>
                  </div>
                </div>
              </div>
            </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#bfe8f5" fill-opacity="1"
                d="M0,192L34.3,192C68.6,192,137,192,206,176C274.3,160,343,128,411,133.3C480,139,549,181,617,218.7C685.7,256,754,288,823,261.3C891.4,235,960,149,1029,144C1097.1,139,1166,213,1234,229.3C1302.9,245,1371,203,1406,181.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- Project -->
    <section id="project" class="project" style="background-color: #bfe8f5; padding-top: 5rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-5 col-md-6">
                    <h3 class="text-center">My Project</h3>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center m-lg-5">
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="{{asset('img')}}/penata-rias.jpg" class="card-img-top " alt="Project 2" width="100px">
                        <div class="card-body">
                            <h5 class="card-title">Penata Rias | MUA ~Make-Up Artist</h5>
                            <p class="card-text">A website made using the laravel framework, this website was created
                                when following a
                                coding challenge.</p>
                            <a name="start-bootstrap" id="start-bootstrap" class="btn btn-primary p-3"
                                href="http://penata-rias-mua.azurewebsites.net" role="button">Start Penata Rias</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="{{asset('img')}}/syousetsu-blog.jpeg" class="card-img-top" alt="Project 2"
                            width="100px">
                        <div class="card-body">
                            <h5 class="card-title">Syousetsu Website</h5>
                            <p class="card-text">Websites made using the Laravel framework are useful for adding posts,
                                especially
                                about the novel category.</p>
                            <a name="start-bootstrap" id="start-bootstrap" class="btn btn-primary p-3"
                                href="https://khuzaemah-novel.azurewebsites.net" role="button">Start Blog-Novel</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="{{asset('img')}}/start-bootstrap.jpg" class="card-img-top" alt="Project 2"
                            width="100px">
                        <div class="card-body">
                            <h5 class="card-title">Landing Page</h5>
                            <p class="card-text">One of the landing pages made by myself using HTML, CSS, and Bootstrap.
                                I saw the
                                design from the internet and made it from scratch. This landing page is responsive.</p>
                            <a name="start-bootstrap" id="start-bootstrap" class="btn btn-primary p-3"
                                href="https://khuzaemah.github.io/star-bootstrap" role="button">Start Bootstrap</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="{{asset('img')}}/rock-paper-scissors.jpeg" class="card-img-top" alt="Project 2"
                            width="100px">
                        <div class="card-body">
                            <h5 class="card-title">Rock Paper Scissors Game</h5>
                            <p class="card-text">A simple website made to be able to play Rock Paper Scissors game with
                                Computer using
                                javascript</p>
                            <a name="start-bootstrap" id="start-bootstrap" class="btn btn-primary p-3"
                                href="https://khuzaemah.github.io/rock-paper-scissors/" role="button">Start Game</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="{{asset('img')}}/bookshelf-apps.jpeg" class="card-img-top" alt="Project 2"
                            width="100px">
                        <div class="card-body">
                            <h5 class="card-title">Bookshelf Apps</h5>
                            <p class="card-text">A simple website created to store a history of books that have been
                                read using
                                javascript</p>
                            <a name="start-bootstrap" id="start-bootstrap" class="btn btn-primary p-3"
                                href="https://khuzaemah.github.io/bookshelf-emah/" role="button">Start Bookshelf</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="{{asset('img')}}/proyek-2.jpg" class="card-img-top" alt="Project 2" width="100px">
                        <div class="card-body">
                            <h5 class="card-title">Convection Information System Kafka Based on Website </h5>
                            <p class="card-text">
                                Website created to fulfill project 2 in partnership with Kafka Konveksi in Indramayu.
                                This website is useful for ordering convection items such as clothes etc. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="{{asset('img')}}/apk-counter.jpg" class="card-img-top" alt="Project 2" width="100px">
                        <div class="card-body">
                            <h5 class="card-title">Counter Sales</h5>
                            <p class="card-text">Applications built using Android Studio. This application is used to
                                record items on
                                the counter.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <img src="{{asset('img')}}/apk-biodata.jpg" class="card-img-top" alt="Project 1" width="100px">
                        <div class="card-body text-center">
                            <h5 class="card-title ">Laravel Bio</h5>
                            <p class="card-text">Websites created using the PHP language-based Laravel framework.
                                Contains data on
                                students, lecturers and other employees regarding the Indramayu State Polytechnic
                                Campus. There is also
                                a page that is used to store personal relative data. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,192L21.8,186.7C43.6,181,87,171,131,176C174.5,181,218,203,262,202.7C305.5,203,349,181,393,181.3C436.4,181,480,203,524,213.3C567.3,224,611,224,655,192C698.2,160,742,96,785,101.3C829.1,107,873,181,916,218.7C960,256,1004,256,1047,240C1090.9,224,1135,192,1178,170.7C1221.8,149,1265,139,1309,149.3C1352.7,160,1396,192,1418,208L1440,224L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- Contact -->
    <section id="contact" style="padding-top: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-3">
                    <h3>Contact Me</h3>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 ms-4">
                        <form action="send.php" method="post" target="_blank">
                            <div class="mb-3 ">
                                <label for="name" class="form-label">Full Name </label>
                                <input type="text" class="form-control" id="nama" name="name" aria-describedby="nama"
                                    placeholder="Write Your Full Name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email"
                                    name="email" placeholder="Example : example@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Messege</label>
                                <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                            </div>
                            <input type="hidden" name="noWa" value="6282215786671">
                            <button type="submit" name="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#3dcaf5" fill-opacity="1"
                d="M0,64L21.8,101.3C43.6,139,87,213,131,208C174.5,203,218,117,262,117.3C305.5,117,349,203,393,208C436.4,213,480,139,524,106.7C567.3,75,611,85,655,96C698.2,107,742,117,785,122.7C829.1,128,873,128,916,138.7C960,149,1004,171,1047,176C1090.9,181,1135,171,1178,176C1221.8,181,1265,203,1309,197.3C1352.7,192,1396,160,1418,144L1440,128L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- Footer -->
    <footer class="text-white text-center p-2" style="background-color: #3dcaf5;">
        <p>Created with <i class="bi bi-github"></i> by <a href="https://github.com/khuzaemah"
                class="text-white fw-bold">Emah Khujaemah</a></p>
    </footer>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-md-flex d-sm-block justify-content-center justify-content-md-between ">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="khuza.emah24@gmail.com">khuza.emah24@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 822 1578 6671</span></i>
            </div>
            <div class="social-links d-md-flex align-items-center m-1">
                <a href="https://wa.me/6282215786671"><i class="bi bi-whatsapp text-center"></i></a>
                <a href="https://twitter.com/EmahKhuza" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com/yoshikonightray" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/khuza.emah24/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/emah-khujaemah-58b080196/" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
                <a href="https://www.fiverr.com/emah24" class="fiverr"><img src="{{asset('img')}}/fiverr.png"
                        width="15px"></a>
            </div>
        </div>
    </section>

    <!-- Javascript -->
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
    <script src="{{asset('js')}}/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js')}}/bootstrap.js"></script>
    <script src="{{asset('js')}}/popper.min.js"></script>
    <script src="{{asset('js')}}/script.js"></script>
</body>

</html>