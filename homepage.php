
<?php 
include 'config.php';
include 'useractivesession.php'; 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My-Portfoliyo</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- box-icon -->
    <!-- animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- google-fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;600;700;800&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;600;700;800&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!--header section-->
    <header class="header" id="header">
        <a href="#" class="logo">
            <h4 class="text-white">SURESHTECHNICAL</h4>
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="./nepal user-complaints/user-complaints.php">user-complaints</a></li>
            <li>
                <a href="#">News</a>
            </li>
            <li><a href="#About">Service</a></li>
            <li><a href="#service">Contact</a></li>
            <li><a href="timer.php">Timer</a></li>
            <li><a href="ragister.php">Ragister</a></li>
            <?php if(isset($_SESSION['username'])){ ?>
               <li><a href="ragister.php"> <?php echo $_SESSION['username']?>Ragister</a></li>
            <?php }else{?>
            <li><a href="logout.php">Logout</a></li>
            <?php }?>
            <li><a href="#footer">Footer</a></li>
        </ul>

    </header>
    <!-- timer____________________________________________________ -->


    <!-- hero section -->
    <section class="home" id="home">
        <div class="hero-text" data-aos="zoom-in-right" data-aos-duration="3000">
            <h3 class="text-warning">Hello I 'm</h3>
            <h1 class="text-uppercase">suresh-bhandari<br>
                <h4 class="text-warning">TECHNICAL</h4>
            </h1>
            <h4>Web-Desginer - Wordpress - UI-UX <br>DESIGNER</h4>
            <button class="button text-white"><a href="#" class="btn btn text-white">Work</a></button>
            <!-- timer  status************************ -->
            <div>

            </div>
        </div>

    </section>
    <!-- ************************************************************************************************************ -->


    <!--hero section end -->
    <section class="end-section " data-aos="zoom-in-right" data-aos-duration="3000 ">
        <div>
            <img class="img-thumbnail sureshimage " src="./suresh.jpg " alt=" ">
        </div>
        <div class="suresh">
            <h5 class="hireme ">JavaScript Responsblities</h5>
            <p>Proven work experience as a Front-end developer Hands on experience with markup languages Experience with JavaScript, CSS and jQuery Familiarity with browser testing and debugging In-depth understanding of the entire web development process
                (design, development and deployment) Understanding of layout aesthetics Knowledge of SEO principles Familiarity with software like Adobe Suite, Photoshop and content management systems An ability to perform well in a fast-paced environment
                Excellent analytical and multitasking skills BSc degree in Computer Science or relevant field Freq
            </p>

        </div>

    </section>
    <a href="# " class="scroll-btn1 "><i class="fa-sharp fa-solid fa-arrow-up " style="color: #dcdfe5; "></i></a>

    <!-- ******************************************************************************************************************************************************************************** -->





    <!-- About section start -->
    <section class="about container" id="About">
        <a class=" about-section" href="#">About-Section</a>
        <div class="row">
            <divv class="col-lg-6" data-aos="zoom-in-right" data-aos-duration="2000">
                <img class="about-image img-fluid" src="./mylogo.png" alt="">
            </divv>

            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="3000">
                <h2>About Me <i class="fa-solid fa-mobile-screen" style="color: #e6f609;"></i></h2>

                <h5>I am a <span class="text-warning">WE</span>BSITE Developer<br>creative Multipal design
                </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis dicta corrupti eaque! Ullam eaque atque cumque aspernatur alias accusantium, sed tempore ipsum veniam ratione omnis provident ducimus sit voluptas quia fugiat. Eos ipsum
                    m
                </p>

            </div>
        </div>
    </section>

    <!-- About section end -->
    <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->


    <div class="container-fluid section-work-data">
        <div class="fact-box">
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 single-fact ">
                    <i class="fa-brands  fa-facebook" style="color: #698bc0;"></i>
                    <h2 class="counter-numbers " data-number="500">0++</h2>

                    <h4>Facebook</h4>


                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 single-fact">
                    <i class="fa-brands  fa-youtube" style="color: #0860f7;"></i>
                    <h2 class="counter-numbers " data-number="2000">0</h2>
                    <h4>Youtub</h4>



                </div>
                <div class=" col-xs-3 col-sm-3 col-md-2 display single-fact">
                    <i class="fa-brands  fa-linkedin" style="color: #0860f7;"></i>
                    <h2 class="counter-numbers " data-number="800">0</h2>
                    <p>Friends</p>


                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 single-fact">
                    <i class="fa-brands  fa-instagram" style="color: #0860f7;"></i>
                    <h2 class="counter-numbers " data-number="1100">0</h2>
                    <h6 class="t">Followers</h6>




                </div>
                <div class=" col-xs-3 col-sm-3 col-md-2 col-lg-2 single-fact">
                    <i class="fa-brands  fa-whatsapp" style="color: #0860f7;"></i>
                    <h2 class="counter-numbers " data-number="1550">0</h2>





                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 single-fact ">
                    <i class="fa-brands fa-google " style="color: #0860f7; "></i>
                    <h2 class="counter-numbers " data-number="3500">0</h2>
                    <p>Friends</p>



                </div>

            </div>
        </div>
    </div>
    </section>
    <!-- //////////////////////////////////////////////////////////////////////////////// -->




    <!-- service section start -->
    <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>. -->
    <!-- 2nd section for about services -->

    <div class="service " id="service ">
        <div class="text-center pt-3 ">
            <h2>My-Services<i class="fa-brands fa-servicestack " style="color: #d3ed07; "></i></h2>
            <h5 class="text-uppercase ">We Work with yoy,not for you</h5>
        </div>
        <!-- second div >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
        <div class="service-item">
            <div class="service-box p-5" data-aos="fade-right" data-aos-duration="3000">
                <box-icon name='mobile'></box-icon>
                <h3>Front-End Desginer</h3>
                <i class="fa-solid fa-code fa-2xl " style="color: #0d65fd; "></i>
                <i class="fa-brands fa-css3 fa-beat fa-2xl " style="color: #075ef2; "></i>
                <i class="fa-brands fa-bootstrap fa-beat fa-xl " style="color: #0559eb; "></i> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem et laborum natur officiis suscipit! Et at a obcaecati vero quae, sunt nesciunt
                atque voluptates. Modi ad dicta vero quae nam debitis, quam esse itaque! At nesciunt neque accusantium?
                </p>
                <a href="# " class="btn btn-primary ">See more</a>
            </div>


            <div class="service-box p-5 " data-aos="flip-right" data-aos-duration="3000">
                <box-icon name='mobile'></box-icon>
                <p>
                    <h3>Backend-Desginer</h3>
                    <i class="fa-brands fa-laravel fa-beat fa-2xl " style="color: #0559eb; "></i>
                    <i class="fa-brands fa-python fa-beat fa-2xl " style="color: #0758e4; "></i>
                    <i class="fa-brands fa-php fa-beat fa-2xl " style="color: #075ced; "></i>
                    <br> spernatur officiis suscipit! Et at a obcaecati vero quae, sunt nesciunt atque voluptates. Modi ad dicta vero quae nam debitis, quam esse itaque! At nesciunt neque accusantium? Lorem ipsum dolor sit amet consectetur
                </p>
                <a href="# " class="btn btn-primary ">See more</a>
            </div>
            <div class="service-box p-5 " data-aos="fade-right" data-aos-duration="3000 ">
                <box-icon name='mobile'></box-icon>
                <p class="p ">

                    <h3>Database <i class="fa-sharp fa-solid fa-database fa-beat fa-2xl " style="color: #0a5ef0; "></i> </h3>
                    <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem et laborum sunt iernatur officiis suscipit! Et at a obcaecati vero quae, sunt nesciunt atque voluptates. Modi ad dicta vero quae nam debitis, quam esse itaque!
                    At nesciunt neque accusantium?

                </p>
                <a href="# " class="btn btn-primary ">See more</a>
            </div>
        </div>
        </section>
        <!-- ****************************************************************************************************************************************************************************************** -->

        <!-- 2nd section for about services -->

        <div class="service " id="service">
            <div class="text-center ">
                <h2>My-Services<i class="fa-brands fa-servicestack" style="color: #d3ed07;"></i></h2>
                <h5 class="text-uppercase ">We Work with yoy,not for you</h5>
            </div>
            <!-- second div >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
            <div class="service-item ">
                <div class="service-box p-4 " data-aos="flip-left" data-aos-duration="3000">
                    <box-icon name='mobile'></box-icon>
                    <h3>Front-End Desginer</h3>
                    <i class="fa-solid fa-code fa-2xl " style="color: #0d65fd; "></i>
                    <i class="fa-brands fa-css3 fa-beat fa-2xl " style="color: #075ef2; "></i>
                    <i class="fa-brands fa-bootstrap fa-beat fa-xl " style="color: #0559eb; "></i> <br>
                    <p>pLorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem et laborum natur officiis suscipit! Et at a obcaecati vero quae, sunt nesciunt atque voluptates. Modi ad dicta vero quae nam debitis, quam esse itaque! At nesciunt
                        neque accusantium?

                    </p>
                    <a href="# " class="btn btn-primary ">See more</a>
                </div>
                <div class="service-box p-5 " data-aos="flip-right" data-aos-duration="4000">
                    <box-icon name='mobile'></box-icon>

                    <h3>Backend-Desginer</h3>
                    <i class="fa-brands fa-laravel fa-beat fa-2xl " style="color: #0559eb;"></i>
                    <i class="fa-brands fa-python fa-beat fa-2xl " style="color: #0758e4; "></i>
                    <i class="fa-brands fa-php fa-beat fa-2xl " style="color: #075ced; "></i>
                    <br> spernatur officiis suscipit! Et at a obcaecati vero quae, sunt nesciunt atque voluptates. Modi ad dicta vero quae nam debitis, quam esse itaque! At nesciunt neque accusantium? Lorem ipsum dolor sit amet consectetur
                    </p>
                    <a href="# " class="btn btn-primary ">See more</a>
                </div>
                <div class="service-box p-5 " data-aos="flip-up " data-aos-duration="4000 ">
                    <box-icon name='mobile'></box-icon>


                    <h3>Database <i class="fa-sharp fa-solid fa-database fa-beat fa-2xl " style="color: #0a5ef0; "></i> </h3>
                    <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem et laborum sunt iernatur officiis suscipit! Et at a obcaecati vero quae, sunt nesciunt atque voluptates. Modi ad dicta vero quae nam debitis, quam esse itaque!
                    At nesciunt neque accusantium?

                    </p>
                    <a href="# " class="btn btn-primary ">See more</a>
                </div>
            </div>
            </section>


            <!-- ___________________________________________________________________________________________________________________________________ -->
            <!-- service section start -->


            <section class="contact" id="contact">

                <div class="left-contact" data-aos="zoom-in-up" data-aos-duration="3000">
                    <div class="in ">
                        <i class="fa-brands fa-facebook-messenger" style="color: #075ef2;"></i>
                        <h5>Massanger</h5>

                    </div>
                    <div class="in ">
                        <i class="fa-brands fa-facebook" style="color: #0860f7;"></i>
                        <h5>Facebook</h5>

                    </div>
                    <div class="in ">

                        <i class="fa-brands fa-whatsapp" style="color: #095ef1 "></i>
                        <h5>Whatsap</h5>

                    </div>
                </div>
                <!-- right contact -->
                <div class="right-contact" data-aos="zoom-in-right" data-aos-duration="3000">
                    <h2 class="profile">Profiles</h2>
                    <a class="text-uppercase hireme" href="#">Hire Me</a>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo cumque, ipsa quidem sint numquam rem veniam asperiores saepe dolores suscipit molestiae, architecto, iusto impedit aspernatur sit maiores. Quibusdam dignissimos optio fugiat,
                        quo porro velit explicabo magnam quia modi culpa cumque molestiae voluptate s qui iusto dolores pariatur nulla maiores sequi a. Aut atque magnam tenetur a exercitationem amet quaerat facere molestiae!</p>

                </div>

            </section>
            <!-- *************************************************************************************************************************************************************************************** -->
            <!-- contact end -->
            <!-- ****************************************************************************************************************************************************************************** -->-->

            <!-- text to spech -->

            <div class="hero">
                <h1>Text-To Speech <span>Converter</span> </h1>
                <textarea placeholder="Write Anything here"></textarea>
                <div class="rows-x">
                    <div class="cols">
                        <select></select>

                        <button id="mybtn" class="bg-success"><i class="fa-thin fa-play fa-lg" style="color: #6d9ae8;"></i>Listen</button>

                    </div>

                </div>

            </div>
            <!-- text to speech closed -->
            <form class="mt-5" action="#" id="searchbutton">
                <input type="text" id="search-box" placeholder="Search Anything here">
                <button>Search</button>
            </form>
            <div id="search-result"></div>
            <div id="show-more-btn">Show more</div>
         
         
         <?php
// include 'footer.php';  
?>


            <!-- footer start -->
            <!-- image gallary-->
            <!-- <div class="footer p-5" id="footer">
                <div class="rowcol">

                    <li>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>

                    </li>
                    <li>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                    </li>
                    <li>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                    </li>
                    <li>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                    </li>
                    <li>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                    </li>
                    <li>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                    </li>
                    <li>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                    </li>
                    <li>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                        <a href="#"> <span>Home</span></a>
                    </li>



                </div>
            </div> -->


            <script src="style.js">
                // text to spech applications
            </script>


            <!-- custome js file link -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js "></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js "></script>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js " integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3 " crossorigin="anonymous "></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js " integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V " crossorigin="anonymous "></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4 " crossorigin="anonymous "></script>
            <script src="/style.js">
                // counter numbers
            </script>
            <script>
                AOS.init();
            </script>
</body>

</html>