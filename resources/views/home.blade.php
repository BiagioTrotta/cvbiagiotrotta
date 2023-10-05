<x-main>
    <x-slot:title>CvBiagioTrotta</x-slot:title>

    <div class="container-fluid px-0">
        <img class="bg-custom-img" src="{{ Storage::url("public/images/image_home_complete2.jpg") }}" alt="Cv_Biagio_Trotta">
    </div>
    <div class="container">
        <div class="row bg-light m-2 m-md-5 px-md-5 pb-5">
            <div class="col-12 text-end">
                <a class="btn btn-outline-dark border" target="_blank" href="{{Storage::url('public/images/CV_Biagio_Trotta.pdf')}}" id="tasto" onmouseover="mostraTesto()" onmouseout="nascondiTesto()"><i class="fa-solid fa-download"></i></a>
                <a class="btn btn-outline-dark border" href="#contacts" id="tasto1" onmouseover="mostraTesto1()" onmouseout="nascondiTesto1()"><i class="fa-solid fa-envelope"></i></a>
            </div>
            <div class="col-12 m-auto w-75">
                <div class="text-center mt-5">
                    <img class="rounded-circle border border-5 border-success" style="width: 200px; height: 200px" src="{{ Storage::url("public/images/image_developer.jpg") }}" alt="">
                    <div class="my-3">
                        <h2>Hi, I'm <span class="text-success fw-bold">Biagio Trotta !</span>
                        </h2>
                    </div>
                    <hr class="text-success" style="border-width: 3px">
                    <p>Web Developer</p>
                </div>
                <p>I am a full-stack developer, and I apply my computer skills in the various roles I hold daily. Among my distinctive abilities, I can mention intuition, autonomy, and curiosity in my work. I have developed my soft skills mainly in the context of customer service and hospitality.</p>
            </div>
            <div id="profile" class="col-12 m-auto w-75 border-start border-4 border-success">
                <h2 class="text-uppercase my-2 fw-bold text-primary">Profile</h2>
                <h5 class="text-uppercase fw-bold">full name</h5>
                <hr class="m-0">
                <p class="text-secondary">Biagio Trotta</p>
                <h5 class="text-uppercase fw-bold">Born</h5>
                <hr class="m-0">
                <p class="text-secondary">25 Feb 1994 - Berna, Swiss</p>
                <h5 class="text-uppercase fw-bold">Email</h5>
                <hr class="m-0">
                <p class="text-secondary">trottabiagio94@gmail.com</p>
                <h5 class="text-uppercase fw-bold">Find me on</h5>
                <hr class="m-0 mb-2">
                <p>
                    <a class="text-decoration-none text-dark" target="_blank" href="https://www.instagram.com/biagio_trotta/">
                        <i class="fa-brands fa-instagram fs-3 hover-zoom mx-1"></i>
                    </a>
                    <a class="text-decoration-none text-dark" target="_blank" href="https://www.facebook.com/KING.FOUR.A.DAY">
                        <i class="fa-brands fa-facebook fs-3 hover-zoom mx-1"></i>
                    </a>
                    <a class="text-decoration-none text-dark" target="_blank" href="https://www.linkedin.com/in/biagio-trotta-069871260">
                        <i class="fa-brands fa-linkedin fs-3 hover-zoom mx-1"></i>
                    </a>
                    <a class="text-decoration-none text-dark" target="_blank" href="https://github.com/BiagioTrotta">
                        <i class="fa-brands fa-github fs-3 hover-zoom mx-1"></i>
                    </a>
                </p>



            </div>
            <div id="education" class="col-12 m-auto w-75 border-start border-4 border-success">
                <h2 class="text-uppercase mb-2 mt-5 fw-bold text-primary">Education</h2>
                <h5 class="text-uppercase fw-bold">Web Development</h5>
                <hr class="m-0">
                <p class="text-secondary fw-bold"><i class="fa-solid fa-building-columns"></i> Aulab Hackademy (6 Months Course) - Certificate September 2023 <i></i></p>
                <p>During the course, I acquired a set of key skills for designing and developing websites and web applications, covering both the front-end and back-end aspects of web development. <a target="_blank" href="https://www.credential.net/d54c9859-c860-4bcf-bb72-b1378b34b1e9#gs.5mpn72"><i class="fa-solid fa-link"></i> Certificate.</a> </p>
                <hr>
                <h5 class="text-uppercase fw-bold">Information Security</h5>
                <hr class="m-0">
                <p class="text-secondary fw-bold"><i class="fa-solid fa-building-columns"></i> ICDL Certificate IT Security (1 Months Course) - Certificate April 2021 <i></i></p>
                <p>"ICDL IT" Security Certificate: Basics of online safety, covering passwords, data protection, and more.</p>
                <h5 class="text-uppercase fw-bold">Information and Communication Technologies</h5>
                <hr class="m-0">
                <p class="text-secondary fw-bold"><i class="fa-solid fa-building-columns"></i> P.E.K.I.T Expert Certificate ICT (1 Months Course) - Certificate April 2021 <i></i></p>
                <p>
                    "PEKIT Expert" is a training and certification program in the field of information technology and information and communication technology (ICT). It validates IT skills and is issued by the Sviluppo Europa Onlus Foundation.
                </p>
            </div>
            <div id="workexperience" class="col-12 m-auto w-75 border-start border-4 border-success">
                <h2 class="text-uppercase mb-2 mt-5 fw-bold text-primary">WORK EXPERIENCE</h2>
                <h5 class="text-uppercase fw-bold">Icoel S.R.L</h5>
                <hr class="m-0">
                <p class="text-secondary fw-bold"><i class="fa-solid fa-laptop"></i> IT Technical Support <i></i></p>
                <p>Troubleshooting hardware and software issues, providing technical assistance to users and businesses.</p>
                <h5 class="text-uppercase fw-bold">CartoSystem</h5>
                <hr class="m-0">
                <p class="text-secondary fw-bold"><i class="fa-solid fa-computer"></i> IT Technician <i></i></p>
                <p>As an IT Technician at CartoSystem, I provided technical support, managed remote computer and printer maintenance, and collaborated effectively to optimize system performance and stability.</p>
                <h5 class="text-uppercase fw-bold">Hotel Poseidon</h5>
                <hr class="m-0">
                <p class="text-secondary fw-bold"><i class="fa-solid fa-bell-concierge"></i> Receptionist and Customer Relationship Management (CRM) <i></i></p>
                <p>
                    As a user of Customer Relationship Management (CRM), I utilized technological tools to manage and enhance customer relationships.
                </p>
            </div>
            <div id="skills" class="col-12 m-auto w-75 border-start border-4 border-success">
                <h2 class="text-uppercase mb-2 mt-5 fw-bold text-primary">Skills</h2>
                <h5 class="text-uppercase fw-bold">PROFESSIONAL SKILLS</h5>
                <hr class="mt-0">
                <div class="progress mb-3" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-success" style="width: 80%">Determination</div>
                    <span class="ms-auto">80%</span>
                </div>
                <div class="progress mb-3" role="progressbar" aria-label="Dark striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-dark" style="width: 70%">Intuition</div>
                    <span class="ms-auto">70%</span>
                </div>
                <div class="progress mb-3" role="progressbar" aria-label="Danger striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 90%">Curiosity in the workplace.</div>
                    <span class="ms-auto">90%</span>
                </div>
                <h5 class="text-uppercase fw-bold mt-5">SOFTWARE SKILLS</h5>
                <hr class="mt-0">
                <div class="progress mb-3" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-success" style="width: 70%">Suite Office</div>
                    <span class="ms-auto">75%</span>
                </div>
                <div class="progress mb-3" role="progressbar" aria-label="Dark striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-dark" style="width: 60%">Adobe Photoshop</div>
                    <span class="ms-auto">60%</span>
                </div>
                <div class="progress mb-3" role="progressbar" aria-label="Danger striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 80%">Visual Studio Code</div>
                    <span class="ms-auto">80%</span>
                </div>
                <h5 class="text-uppercase fw-bold mt-5">
                    CODING SKILLS</h5>
                <hr class="mt-0">
                <div class="progress mb-3" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-success" style="width: 80%">Html / CSS</div>
                    <span class="ms-auto">80%</span>
                </div>
                <div class="progress mb-3" role="progressbar" aria-label="Dark striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-dark" style="width: 65%">Javascript</div>
                    <span class="ms-auto">65%</span>
                </div>
                <div class="progress mb-3" role="progressbar" aria-label="Danger striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 75%">Php</div>
                    <span class="ms-auto">75%</span>
                </div>
            </div>
            <div id="interests" class="col-12 m-auto w-75 border-start border-4 border-success">
                <h2 class="text-uppercase mb-2 mt-5 fw-bold text-primary">INTERESTS</h2>
                <h5 class="text-uppercase fw-bold">GAME</h5>
                <hr class="m-0">
                <p>Passionate gamer with a deep curiosity for the gaming industry, game strategy, and video game culture. I'm fascinated by game storytelling and their ability to transport players into extraordinary virtual worlds.</p>
                <h5 class="text-uppercase fw-bold">Digital drawing</h5>
                <hr class="m-0">
                <p>I love digital drawing and art. I enjoy exploring creativity in the digital realm and finding new inspirations to enhance my artistic skills.</p>
                <h5 class="text-uppercase fw-bold">Series Tv</h5>
                <hr class="m-0">
                <p> Passionate about TV series, I dedicate my time to discovering intriguing stories, fascinating characters, and diverse cinematic worlds. I love immersing myself in visual storytelling and discussing plotlines with fellow enthusiasts. TV series are an endless source of entertainment and reflection for me.</p>
            </div>
            <div id="portfolio" class="col-12 m-auto w-75 border-start border-4 border-success">
                <h2 class="text-uppercase mb-2 mt-5 fw-bold text-primary">PORTFOLIO</h2>
                <h5 class="text-uppercase fw-bold">SOME WORKS</h5>
                <hr class="m-0 mb-3">


                <div class="row">
                    <div class="card mb-3 mx-2" style="width: 15rem;">
                        <img src="{{Storage::url('public/images/Nancys_Pizza.png')}}" class="card-img-top" alt="..." style="height: 8rem;">
                        <div class="card-body">
                            <h5 class="card-title">Nancy's Pizza.it</h5>
                            <p class="card-text">A showcase website for a pizzeria, offering a wide range of gourmet pizzas, focaccias, and Italian specialties. With an intuitive user interface, users can browse the menu, view delivery options, and make table reservations directly from the site.</p>
                            <a class="fs-5" target="_blank" href="https://biagiotrotta.altervista.org/"><i class="fa-solid fa-link"></i> Nancy's Pizza.it</a>
                        </div>
                    </div>
                    <div class="card mb-3 mx-2" style="width: 15rem;">
                        <img src="{{Storage::url('public/images/Presto.png')}}" class="card-img-top" alt="..." style="height: 8rem;">
                        <div class="card-body">
                            <h5 class="card-title">Presto.it</h5>
                            <p class="card-text">Free classifieds website for buying, selling, trading goods and services. Various categories. Free account for managing ads and user interactions.</p>
                            <a class="fs-5" target="_blank" href="https://github.com/Hackademy-PT-07/Presto.it_CodeConnexion2.git"><i class="fa-solid fa-link"></i> Presto.it</a>
                        </div>
                    </div>
                    <div class="card mb-3 mx-2" style="width: 15rem;">
                        <img src="{{Storage::url('public/images/Devblog.png')}}" class="card-img-top" alt="..." style="height: 8rem;">
                        <div class="card-body">
                            <h5 class="card-title">HackBlog </h5>
                            <p class="card-text">Is a blogging platform dedicated to anime enthusiasts. Users can create articles about their favorite anime after free registration. The site allows interactions through comments and discussions.</p>
                            <a class="fs-5" target="_blank" href="https://github.com/Hackademy-PT-07/primo_progetto_biagio_trotta_blog_laravel.git"><i class="fa-solid fa-link"></i> HackBlog.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contacts" class="col-12 m-auto w-75 border-start border-4 border-success">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-uppercase mb-2 mt-5 fw-bold text-primary">Contacts</h2>
                        <p class="border-bottom border-4 border-success">Complete the contact form to send us a message.</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        <script>
                            var url = "#contacts";
                            // Avvia la navigazione
                            window.location.href = url;
                        </script>
                        @endif

                        @if(session()->has('danger'))
                        <div class="alert alert-danger" style="z-index: 0;">
                            {{ session('danger') }}
                        </div>
                        <script>
                            var url = "#contacts";
                            // Avvia la navigazione
                            window.location.href = url;
                        </script>
                        @endif
                        <form class="container mb-5" action="{{ route('contact.savecontact') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="exampleInputsubject" aria-describedby="subjectHelp" id="subjectuser" name="subjectuser">
                                <div id="subjectHelp" class="form-text">Enter the subject of the message.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" id="name" name="name">
                                <div id="nameHelp" class="form-text">Enter your username.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="email" name="email">
                                <div id="emailHelp" class="form-text">Please enter a valid email so that we can respond to you.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comments" id="comments"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-dark fw-bold w-50">Submit</button>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h5>ADDRESS</h5>
                        <hr style="margin: 0;">
                        <p>Corigliano-Rossano(CS), Cap 87064, Italy</p>
                        <h5>PHONE NO</h5>
                        <hr style="margin: 0;">
                        <p>+39 366 133 6161</p>
                        <h5>EMAIL</h5>
                        <hr style="margin: 0;">
                        <p>trottabiagio94@gmail.com</p>
                        <h5>Web Site</h5>
                        <hr style="margin: 0;">
                        <p><a target="_blank" href="https://biagiotrotta.altervista.org/">Nancy's Pizza</a></p>
                    </div>
                </div>
            </div>





            <script>
                // Funzione per mostrare il testo nel bottone
                function mostraTesto() {
                    var bottone = document.getElementById("tasto");
                    setTimeout(function() {
                        bottone.innerHTML = '<i class="fa-solid fa-download"></i> Download my resume';
                    }, 200); // Ritardo di 500 millisecondi (0.5 secondi)
                }

                function mostraTesto1() {
                    var bottone1 = document.getElementById("tasto1");
                    setTimeout(function() {
                        bottone1.innerHTML = '<i class="fa-solid fa-envelope"></i> Send me a message';
                    }, 200); // Ritardo di 500 millisecondi (0.5 secondi)
                }

                // Funzione per nascondere il testo nel bottone
                function nascondiTesto() {
                    var bottone = document.getElementById("tasto");
                    setTimeout(function() {
                        bottone.innerHTML = '<i class="fa-solid fa-download"></i>';
                    }, 200); // Ritardo di 500 millisecondi (0.5 secondi)
                }

                function nascondiTesto1() {
                    var bottone1 = document.getElementById("tasto1");
                    setTimeout(function() {
                        bottone1.innerHTML = '<i class="fa-solid fa-envelope"></i>';
                    }, 200); // Ritardo di 500 millisecondi (0.5 secondi)
                }
            </script>



        </div>
</x-main>