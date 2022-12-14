<?php
include('config.php');


if (isset($_GET["code"])) {
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    if (!isset($token['error'])) {
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();
        $_SESSION['user_email_address'] = $data['email'];
        $_SESSION['user_first_name'] = $data['given_name'];
        $_SESSION['user_last_name'] = $data['family_name'];
        $_SESSION['user_image'] = $data['picture'];
        $_SESSION['login_button'] = false;


    }
}
if (isset($_SESSION['login_button'])) {
    $login_button = $_SESSION['login_button'];

} else {
    $login_button = true;
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
      <!--Meta Tags-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name=description content="Full Stack Developer for hire, specialising in development of custom websites and web applications in JavaScript, React.js, Next.js, Node.js, &amp; more.">
      <meta content=keywords name="Anbu Raghavan,Tamil language,Freelancer,Freelancer.com,Job,Tamil Nadu,Remote work,Fiverr,Coimbatore,Marketing,Business,Money,Career,Engineer,Upwork Inc.,Part-time job,,RISING,Fiverr,Coimbatore,Marketing,Career,Engineer,Part-time job,Remote work,Tamil Nadu,World Wide Web,Course,Website,Web Developer,Web design,Company,Software Developer,Project,Computer programming,Solution stack,full stack developer,JavaScript,Learning,HTML,Python,Language,Internship,Software,Java,Front-end web development,CSS,Technology,Udemy,Computer Application,Technology roadmap,,RISING,Web project,Blockchain.com,CodeWithHarry,Data analysis,Analytics,Scripting language,Technology roadmap,Gujarat Technological University,Computer security,Browser extension,Visual Studio Code,Architecture,Solution stack,Computing,Coding Ninjas,full stack developer,Professional certification,Course">
      <meta name=author content="Anbu Raghavan">
      <meta name=copyright content="Bumble Bees">
      <meta name=robots content="index, follow">
      <meta name=google content=nositelinkssearchbox>
      
      
      <meta property=og:type content=business.business>
    <meta property=og:title content="Full Stack Web App Developer | Ui Designer | Anbu Raghavan | Portfolio">
    <meta property=og:url content=https://anburaghavan.netlify.app />
    <meta property=og:image content=https://firebasestorage.googleapis.com/v0/b/portfolio-4bf1c.appspot.com/o/portfolioAssets%2Fimages%2FDSC02258.JPG?alt=media&token=cd2fd15a-8a5f-4cdc-8945-64bcb96b6a21>
    <meta property=og:description
        content="Full Stack Developer for hire, specialising in development of custom websites and web applications in JavaScript, React.js, Next.js, Node.js, &amp; more.">
    <meta property=business:contact_data:street_address
        content="1st Floor, Plot No 19, G1 Thamarai Flats, 3rd Street, J.C Nagar, Urapakkam">
    <meta property=business:contact_data:locality content=Chennai>
    <meta property=business:contact_data:region content="Tamil Nadu">
    <meta property=business:contact_data:postal_code content=603210>
    <meta property=business:contact_data:country_name content=India>


    <meta name=twitter:card content=app>
    <meta name=twitter:site content=@iraghavan_ceo>
    <meta name=twitter:description
    content="Full Stack Developer for hire, specialising in development of custom websites and web applications in JavaScript, React.js, Next.js, Node.js, &amp; more.">
    <meta name=twitter:app:name:googleplay content="Anbu Raghavan">
    <meta name=twitter:app:url:googleplay content=https://anburaghavan.netlify.app />
    <meta name=twitter:app:id:googleplay content=https://anburaghavan.netlify.app />
    <meta name=twitter:app:name:iphone content="Anbu Raghavan">
    <meta name=twitter:app:url:iphone content=https://anburaghavan.netlify.app />
    <meta name=twitter:app:id:iphone content=https://anburaghavan.netlify.app />
    <meta name=twitter:app:name:ipad content="Anbu Raghavan">
    <meta name=twitter:app:url:ipad content=https://anburaghavan.netlify.app />
    <meta name=twitter:app:id:ipad content=https://anburaghavan.netlify.app />


    <meta name=twitter:card content=summary_large_image>
    <meta name=twitter:title content="Full Stack Web App Developer | Ui Designer | Anbu Raghavan | Portfolio">
    <meta name=twitter:site content=@iraghavan_ceo>
    <meta name=twitter:description
    content="Full Stack Developer for hire, specialising in development of custom websites and web applications in JavaScript, React.js, Next.js, Node.js, &amp; more.">
    <meta name=twitter:image content=https://firebasestorage.googleapis.com/v0/b/portfolio-4bf1c.appspot.com/o/portfolioAssets%2Fimages%2FDSC02258.JPG?alt=media&token=cd2fd15a-8a5f-4cdc-8945-64bcb96b6a21>
    <meta name=twitter:image:alt content=raghava>

      <!-- Google APIs Discovery-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
      <!--  -->


      <!--Favicons-->
      <link rel="shortcut icon" href="images/favicon.png">
      <!--Page Title-->
      <title>Anbu Raghavan - Portfolio - Full Stack Developers</title>
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="./css/bootstrap.css">
      <!-- Animate.css -->
      <link rel="stylesheet" href="./css/animate.css">
      <!-- Awesome Fonts-->
      <link rel="stylesheet" href="./css/all.min.css">
      <!-- Flexslider  -->
      <link rel="stylesheet" href="./css/flexslider.css">
      <!--Main Styles Css-->
      <link rel="stylesheet" href="./css/style.css">
<<<<<<< HEAD:index.php

      

    <!-- Load the Firebase SDKs before loading this file -->
      <script src="/__/firebase/init.js"></script>
      <!-- update the version number as needed -->
    <script defer src="/__/firebase/8.10.1/firebase-app.js"></script>
    <!-- include only the Firebase features as you need -->
    <script defer src="/__/firebase/8.10.1/firebase-auth.js"></script>
    <script defer src="/__/firebase/8.10.1/firebase-database.js"></script>
    <script defer src="/__/firebase/8.10.1/firebase-messaging.js"></script>
    <script defer src="/__/firebase/8.10.1/firebase-storage.js"></script>
    <!-- initialize the SDK after all desired features are loaded -->

    
       <script>!function (e, t, a, n) { e[n] = e[n] || [], e[n].push({ "gtm.start": (new Date).getTime(), event: "gtm.js" }); e = t.getElementsByTagName(a)[0], n = t.createElement(a); n.async = !0, n.src = "https://www.googletagmanager.com/gtm.js?id=GTM-P737K66", e.parentNode.insertBefore(n, e) }(window, document, "script", "dataLayer")</script>
       <script src="https://www.googleoptimize.com/optimize.js?id=OPT-KXBLQTT"></script>
      
          <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "WebSite",
        "url": "https://anburaghavan.netlify.app/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://anburaghavan.netlify.app/{search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
      
     <script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "Person",
	"name": "Anbu Raghavan",
	"image": "https://firebasestorage.googleapis.com/v0/b/portfolio-4bf1c.appspot.com/o/portfolioAssets%2Fimages%2FIMG_3547.jpg?alt=media&token=dd4669ae-9238-41e7-a6d5-373651b9d945",
	"url": "https://anburaghavan.netlify.app/",
	"jobTitle": "Entrepreneur & Full Stack Developer",
	"worksFor": {
		"@type": "Organization",
		"name": "Jeeva Industries"
	},
	,
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "1ST FLOOR - PLOT NO 19 G1 THAMARAI FLATS, 3RD STREET, J.C. NAGAR, URAPAKKAM",
		"addressLocality": "CHENNAI",
		"addressRegion": "TAMIL NADU",
		"postalCode": "603210",
		"addressCountry": "India"
	},
	"sameAs": ["https://www.facebook.com/iraghavanofficial/", "https://www.instagram.com/iam.raghavan/", "https://www.linkedin.com/in/anburaghavan/", "https://twitter.com/iraghavan_ceo"]
}
</script>
      
      
      
      

   </head>
   <body>
      
      <!-- Preloader -->
      <div id="preloader">
         <div class="pre-container">
            <div class="spinner">
               <div class="double-bounce1"></div>
               <div class="double-bounce2"></div>
            </div>
         </div>
      </div>
      <!-- ??nd Preloader -->
      
      <!-- Main menu -->
      <nav id="main-nav">
         <a href="#" class="js-nav-toggle nav-toggle active"><i></i></a>
         <div class="js-fullheight table">
            <div class="table-cell js-fullheight">
               <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="work.html">Work</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="contact.html">Contact</a></li>
               </ul>
               <br>
               <p class="social-icon">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-whatsapp"></i></a>

                  <?php
                  if ($login_button) {
                  ?>
                  <div class="header-btn ml_md--20 ml_sm--0"><a class="rn-btn"
                          href="<?= $google_client->createAuthUrl() ?>"><span><i class="fab fa-google"></i> Login with
                              Google</span></a>
                  </div>
                  <?php
                  } else {
                  ?>
                  
                  <div class="header-btn ml_md--20 ml_sm--0"><a class=""
                          href=""><img src="<?=$_SESSION['user_image']?>" width="40" height="40" class="rounded-circle" /> </a>
                          <span class="loveIshu">    
                          <?= $_SESSION['user_first_name'] ?>
                                  <?= $_SESSION['user_last_name'] ?>
                                  </span>

                                  <!-- <span style="padding-right:10px;">|</span><span></span> Login with
                              Google </span> -->
                  </div>
                  <?php
}
?>
<ul>
                  <li><a href="./logout.php"><i class="fab fa-google"></i> <span>|</span> Logout</h3></li>
                  
               </ul>
               </p>
            </div>
         </div>
      </nav>
      <!-- Scroll icon -->
      <div class="scroll-icon">
         <a href="#info" class="smoothscroll">
            <div class="mouse"></div>
         </a>
         <div class="end-top"></div>
      </div>
      <div id="page">

         <!-- header -->
         <header class="header">
            <div class="container">
               <div class="navbar-brand">
                  <div class="row">
                     <div class="col-xs-6">
                        <!-- Logo -->
                        <h1 class="text-left"><a class="logo" href="index.html">Raghva</a></h1>
                     </div>
                  </div>
               
                  
                  <a href="#" class="js-nav-toggle nav-toggle"><i></i></a>
                 
               </div>
            </div>
         </header>
         <!-- End Header -->

         <!-- Banner section -->
         <section id="banner" class="js-fullheight">
            <div class="flexslider js-fullheight">
               <!-- Social -->
               <ul class="list-unstyled ml-5 mt-3 position-relative social-links">
                  <li class="mb-3"><a href="https://www.facebook.com/iraghavanofficial/"><i class="fab fa-facebook"></i></a></li>
                  <li class="mb-3"><a href="https://github.com/iamraghavan"><i class="fab fa-github"></i></a></li>
                  <li class="mb-3"><a href="https://twitter.com/iraghavan_ceo"><i class="fab fa-twitter"></i></a></li>
                  <li class="mb-3"><a href="https://wa.me/919942502245"><i class="fab fa-whatsapp"></i></a></li>
                  <li class="mb-3"><a href="https://www.instagram.com/iam.raghavan/"><i class="fab fa-instagram"></i></a></li>
               </ul>
               <!-- Slider -->
               <ul class="slides">
                  <li style="background-image: url(https://firebasestorage.googleapis.com/v0/b/portfolio-4bf1c.appspot.com/o/portfolioAssets%2Fimages%2FDSC02399.JPG?alt=media&token=7fd9775f-7bb5-4876-9a81-260dce7b3bc2);">
                     <div class="overlay-gradient"></div>
                     <div class="container">
                        <div class="col-md-8 js-fullheight slider-text">
                           <div class="slider-text-inner">
                              <div class="desc">
                                 <h2>I'm Anbu Raghavan</h2>
                                 <h3>I am a
                                    <span id="typed-slide-1"></span>
                                    <span id="typed-strings-slide-1">
                                    <span>Full Stack Developer</span>
                                    <span>UI Designer</span>
                                    <span>Entrepreneur</span>
                                    </span>
                                 </h3>
                                 <a class="btn btn-primary" href="#"><i class="fab fa-google"></i> Login with
                                    Google</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li style="background-image: url(images/DSC02258.jpg);">
                     <div class="overlay-gradient"></div>
                     <div class="container">
                        <div class="col-md-8 js-fullheight slider-text">
                           <div class="slider-text-inner">
                              <div class="desc">
                                 <h2>I'm Anbu Raghavan</h2>
                                 <h3>I am a
                                    <span id="typed-slide-2"></span>
                                    <span id="typed-strings-slide-2">
                                       <span>Full Stack Developer</span>
                                       <span>UI Designer</span>
                                       <span>Entrepreneur</span>
                                    </span>
                                 </h3>
                                 <a class="btn btn-primary" href="#"><i class="fab fa-google"></i> Login with
                                    Google</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </section>
         <!-- End Banner Section -->

         <!-- About Section -->
         <section id="about">
            <div class="container">
               <div class="row">
             
                  <div class="col-md-12">
                     <div class="post-entry">

                        <div class="col-md-6">
                            <div class="header-page-about">
                              <h2 class="intro-heading">About Me</h2>
                           </div>
                            <p>I am a Tech Guy & Entrepreneur
                              Tons of Tech .. Bit of fun.. Loads of insane creativity.. more of my style.. all mixed together ... Well that???s what you get to connect with Anbu Raghavan </p>
                           <div class="col-md-6 col-sm-4 no-padding">
                              <ul>
                                 <li><span>Name : </span> Anbu Raghavan</li>
                                 <li><span>Job : </span> Entrepreneur & Freelancer</li>
                              </ul>
                           </div>
                           <div class="col-md-6 col-sm-4 no-padding">
                              <ul>
                                 <li><span>Email : </span> <a href="#">raghavanofficials@gmail.com</a></li>
                                 <li><span>Phone : </span> <a href="#"> +91 99425 02245</a></li>
                              </ul>
                           </div>
                           <hr>
                           <div class="col-md-12 no-padding mt-20">
                              <a class="btn btn " href="./cv-resume.html">Download CV</a>
                              <a class="btn btn-primary" href="#">Hire Me</a> 
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="post-image" style="background-image: url(https://firebasestorage.googleapis.com/v0/b/portfolio-4bf1c.appspot.com/o/portfolioAssets%2Fimages%2FIMG_3547.jpg?alt=media&token=dd4669ae-9238-41e7-a6d5-373651b9d945);"></div>
                           <!-- <div class="display-tc">
                              <div class="desc">
                                 <h3>My skill</h3>
                                 <div class="skill-item">
                                    <h5>HTML & CSS</h5><span>80%</span>
                                    <div class="progress" data-percent="80%">
                                       <div class="progress-bar bar-null" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                    </div>
                                 </div>
                                 <div class="skill-item">
                                    <h5>Jquery</h5><span>60%</span>
                                    <div class="progress" data-percent="60%">
                                       <div class="progress-bar bar-null" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                 </div>
                                 <div class="skill-item">
                                    <h5>Wordpress</h5><span>50%</span>
                                    <div class="progress" data-percent="50%">
                                       <div class="progress-bar bar-null" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </section>
         <!-- End About Section -->

         <!-- Resume Section -->
         <section id="resume" class="bg-dark bg-dots">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading">
                     <div class="header-page">
                        <h2>My Resume</h2>
                        <span></span>
                     </div>
                     <span class="heading-meta-sub">RESUME</span>
                     <p>Well-qualified Full Stack Developer familiar with wide range of programming utilities and languages. Knowledgeable of backend and frontend development requirements.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="col-md-6">
                        <div class="item mb-40">
                           <h4><span class="item-icon"><i class="fas fa-briefcase"></i></span>Frontend Developer</h4>
                           <span class="meta">Remote - July 2019 - Current</span>
                           <h5>Freelancer</h5>
                          
                        </div>
                        <div class="item mb-40">
                           <h4><span class="item-icon"><i class="fas fa-briefcase"></i></span>UI and UX Designer</h4>
                           <span class="meta">Remote Desk - January 2019 - Current</span>
                           <h5>Freelancer</h5>
                           
                        </div>
                        <div class="item mb-40">
                           <h4><span class="item-icon"><i class="fas fa-briefcase"></i></span>Web UI Desinger</h4>
                           <span class="meta"> (2018 - Until Now Days)</span>
                           <h5>Bumble Bees</h5>
                           
                        </div>
                        <div class="item mb-40">
                           <h4><span class="item-icon"><i class="fas fa-briefcase"></i></span>Full Stact Web Developer</h4>
                           <span class="meta">(2021 - Until Now Days)</span>
                           <h5>Bumble Bees</h5>
                           
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="item mb-40">
                           <h4><span class="item-icon"><i class="fas fa-graduation-cap"></i></span>Bachelor of UI & UX (Specialization course)</h4>
                           <span class="meta">Jan 2019 - Jul 2019</span>
                           <h5>Udemy | Online</h5>
                          
                        </div>
                        <div class="item mb-40">
                           <h4><span class="item-icon"><i class="fas fa-graduation-cap"></i></span>Trending Technology</h4>
                           <span class="meta">(2018 - until now days)</span>
                           <h5>YouTube | Education Channels</h5>
                           
                        </div>
                        <div class="item mb-40">
                           <h4><span class="item-icon"><i class="fas fa-graduation-cap"></i></span>Full Stack Development</h4>
                           <span class="meta">(2022 - until now days)</span>
                           <h5>GUVI | Learn to code in your native language</h5>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Resume Section -->

         <!-- Services Section -->
         <section id="services" class="bg-light">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading">
                     <div class="header-page">
                        <h2>My Services</h2>
                        <span></span>
                     </div>
                     <span class="heading-meta-sub">SERVICES</span>
                     
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="service">
                        <div class="icon">
                           <i class="fab fa-codepen"></i>
                        </div>
                        <div class="box-num">
                           
                        </div>
                        <div class="text">
                           <h3>Branding</h3>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="service">
                        <div class="icon">
                           <i class="fas fa-paint-brush"></i>
                        </div>
                        <div class="box-num">
                           
                        </div>
                        <div class="text">
                           <h3>Web Design</h3>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="service">
                        <div class="icon">
                           <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="box-num">
                           
                        </div>
                        <div class="text">
                           <h3>Analytics</h3>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="service">
                        <div class="icon">
                           <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="box-num">
                           
                        </div>
                        <div class="text">
                           <h3>Web Development</h3>
                            
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="service">
                        <div class="icon">
                           <i class="fas fa-desktop"></i>
                        </div>
                        <div class="box-num">
                           
                        </div>
                        <div class="text">
                           <h3>User Interface</h3>
                            
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="service">
                        <div class="icon">
                           <i class="far fa-life-ring"></i>
                        </div>
                        <div class="box-num">
                           
                        </div>
                        <div class="text">
                           <h3>Help &amp; Support</h3>
                            
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Resume Section -->
         
         <!-- Counters Section -->
         <div class="counters" id="counter-animate">
            <div class="narrow-content">
               <div class="container">
               <div class="row" >
                  <div class="col-md-12"> 
                     <div class="col-md-3 text-center">
                        <span class="counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="counter-label">Project</span>
                     </div>
                     <div class="col-md-3 text-center">
                        <span class="counter js-counter" data-from="0" data-to="40" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="counter-label">Clients</span>
                     </div>
                     <div class="col-md-3 text-center">
                        <span class="counter js-counter" data-from="0" data-to="38" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="counter-label">Happy Client</span>
                     </div>
                     <div class="col-md-3 text-center">
                        <span class="counter js-counter" data-from="0" data-to="4" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="counter-label">Awards & Nomination</span>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
         <!-- End Counters Section -->

         <!-- Works Section -->
         <section id="work" class="bg-light">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading">
                     <div class="header-page">
                        <h2>My Projects</h2>
                        <span></span>
                     </div>
                     <span class="heading-meta-sub">PORTFOLIO</span>
                     
                  </div>
               </div>
               <!-- <div class="row">
                  <div class="col-lg-12 px-25 text-center">
                     <ul class="work-filter">
                        <li class="filter all active" data-filter="*">All</li>
                        <li class="filter" data-filter=".branding">Web Devlopment</li>
                        <li class="filter" data-filter=".web">Graphic Design</li>
                        <li class="filter" data-filter=".mobile">UI & UX</li>
                        <li class="filter" data-filter=".photo">Business Supports</li>
                     </ul>
                  </div>
                  <div class="col-lg-12">
                     <div class="work-gallery"> 
                        <div class="col-lg-4 col-md-6 col-sm-12 all photo mobile">
                           <div class="work">
                              <img class="img-fluid" src="./images/UI/BurgerApp.png" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a href="#">Mobile App - UI</a></h3>
                                    <span>User Interface Design | Burger Application</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 all photo mobile">
                           <div class="work">
                              <img class="img-fluid" src="./images/UI/CRM-APP-MOB.png" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a href="#">Mobile App - UI</a></h3>
                                    <span>User Interface Design | MINI MOBILE CRM</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 all photo mobile">
                           <div class="work">
                              <img class="img-fluid" src="./images/UI/LogitechAPP.png" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a href="#">Mobile App - UI</a></h3>
                                    <span>User Interface Design | Logitech - App</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 all web">
                           <div class="work">
                              <img class="img-fluid" src="./images/Web/EEWeb.png" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a href="#">Static Website</a></h3>
                                    <span>Website</span>
                                 </div>
                              </div>
                           </div>
                        </div>          
                        <div class="col-lg-4 col-md-6 col-sm-12 all branding web">
                           <div class="work">
                              <img class="img-fluid" src="./images/Web/BMBWeb.png" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a href="#">Static Website</a></h3>
                                    <span>Website</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 all web branding">
                           <div class="work">
                              <img class="img-fluid" src="./images/Web/C99Web.png" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a href="#">Static Website</a></h3>
                                    <span>Website</span>
                                 </div>
                              </div>
                           </div>
                        </div>            
                        <div class="col-lg-4 col-md-6 col-sm-12 all mobile">
                           <div class="work">
                              <img class="img-fluid" src="./images/GF/youthday.png" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a href="#">Graphics Design</a></h3>
                                    <span>Design Service</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 all mobile">
                           <div class="work">
                              <img class="img-fluid" src="./images/GF/starbite_02.png" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a href="#">Graphics Design</a></h3>
                                    <span>Design Service</span>
                                 </div>
                              </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 col-sm-12 all mobile">
                           <div class="work">
                              <img class="img-fluid" src="./images/GF/Guru Builders.png" alt="">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a href="#">Graphics Design</a></h3>
                                    <span>Design Service</span>
                                 </div>
                              </div>
                           </div>
                        </div> 
                     </div>
                  </div>
               </div> -->
            </div>
         </section>
         <!-- End Works Section -->

         

         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol> -->
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="https://firebasestorage.googleapis.com/v0/b/portfolio-4bf1c.appspot.com/o/Portfolio%20Slider%20Image%201.png?alt=media&token=88872734-87ee-4531-9716-4a06b03c04f7" width="100%">
                
              </div>
              <div class="item">
                <img src="https://s26.postimg.cc/zccz3svft/cg6.jpg" width="100%">
               
              </div>
              <div class="item">
                <img src="https://s26.postimg.cc/hyxmrttt5/cg1.jpg" width="100%">
                
              </div>
              <div class="item">
                <img src="https://s26.postimg.cc/7g2ozrxgp/cg4.jpg" width="100%">
                
              </div>
              <div class="item">
                <img src="https://s26.postimg.cc/l7244vg2x/cg2.jpg" width="100%">
                
              </div>
            </div>
          
            <!-- Controls -->
            <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> -->
          </div>
          
          </div>



          <!-- Slider Stylesheets -->


          <style>
            .carousel-caption {
          font-size: 12px;
          font-style: italic;
          font-weight: bold;
          /* display: none;  remove comment to hide captions */
        }
        
        .carousel-control {
          text-shadow: 0;
        }
        
        .carousel-control.left {
            background-image: -webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0001) 100%);
            background-image: -o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%);
            background-image: -webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,00001)));
            background-image: linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%) !important;
        }
        
        .carousel-control.right {
            background-image: -webkit-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,.0001) 100%);
            background-image: -o-linear-gradient(left,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%);
            background-image: -webkit-gradient(linear,left top,right top,from(rgba(0,0,0,0)),to(rgba(0,0,0,00001)));
            background-image: linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%) !important;
        }
        </style>

          <!-- End Slider StyleSheets-->




          <!-- Slider Script File -->
          <script>
            $(".carousel").swipe({
          swipe: function(
            event,
            direction,
            distance,
            duration,
            fingerCount,
            fingerData
          ) {
            if (direction == "left") $(this).carousel("next");
            if (direction == "right") $(this).carousel("prev");
          },
          allowPageScroll: "vertical"
        });
        
        $(".carousel").swipe({
          swipe: function(
            event,
            direction,
            distance,
            duration,
            fingerCount,
            fingerData
          ) {
            if (direction == "left") $(this).carousel("next");
            if (direction == "right") $(this).carousel("prev");
          },
          allowPageScroll: "vertical"
        });
        </script>
        
        


          <!-- End Slider Script-->
         
        

         <!-- Contact Section -->
         <section id="contact" class="bg-light">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading">
                     <div class="header-page">
                        <h2>Get In Touch</h2>
                        <span></span>
                     </div>
                     <span class="heading-meta-sub">CONTACT</span>
                     
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3 col-md-push-1">
                     <ul class="contact-info">
                        <li><i class="fas fa-map-marked-alt"></i>1st Floor - Plot No 19 G1 Thamarai Flats, 3rd Street, J.C. Nagar, Urapakkam, Chennai, Tamil Nadu 603210</li>
                        <li><i class="fas fa-phone-alt"></i>+91 99425 02245</li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:raghvanofficials@gmail.com">raghavanofficials@gmail.com </a></li>
                        <li><i class="fas fa-globe"></i><a href="#">www.anburaghavan.netlify.app/</a></li>
                     </ul>
                  </div>

                  <form name="contact" method="POST" data-netlify="true" onSubmit="submit" netlify-honeypot="bot-field">
                  <div class="col-md-7 col-md-push-1">
                     <div class="row">
                        <div class="col-md-6">
                           <div id="first-name-field">
                               <input type="text" placeholder="First Name" class="form-control" name="form-name">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div id="last-name-field">
                               <input type="text" placeholder="Last Name" class="form-control" name="form-name">
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-6">
                           <div id="email-field">
                               <input type="email" placeholder="Email Address" class="form-control" name="form-email">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div id="subject-field">
                               <input type="text" placeholder="Subject" class="form-control" name="form-subject">
                           </div>
                       </div>
                   </div>
                   <br>
                   <br>
                        <div class="col-md-12">
                           <div class="form-group">
                              <textarea name="message" class="form-control" id="message" cols="15" rows="7" placeholder="Message"></textarea>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group text-right">
                              <input type="submit" value="Send Message" class="btn btn-primary">
                           </div>
                        </div>
                     </div>
                  </form>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Contact Section -->

         <!-- Footer -->
         <footer>
            <div id="footer">
               <div class="container">
                  <div class="row copy-right">
                     <div class="col-md-6 col-md-offset-3 text-center">
                        <!-- Footer logo -->
                        <h2><a class="footer-logo" href="index.html">Anbu Raghvan </a></h2>
                        <!-- Social -->
                        <p class="social-icon">
                           <a href="#"><i class="fab fa-facebook-square"></i></a>
                           <a href="#"><i class="fab fa-twitter-square"></i></a>
                           <a href="#"><i class="fab fa-instagram"></i></a>
                           <a href="#"><i class="fab fa-whatsapp-square"></i></a>
                        </p>
                        <!-- Copyright -->
                        <p><a href="https://anburaghavan.netlify.app/">Bumble Bees</a></p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Back to top button -->
            <a id="back-to-top" href="#"><i class="fas fa-chevron-up"></i></a>
         </footer>
         <!-- End Footer -->
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <!-- jQuery Easing -->
      <script src="js/jquery.easing.1.3.js"></script>
      <!-- Bootstrap -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Waypoints -->
      <script src="js/jquery.waypoints.min.js"></script>
      <!-- Counters -->
      <script src="js/jquery.countTo.js"></script>
      <!-- Flexslider -->
      <script src="js/jquery.flexslider-min.js"></script>
      <!-- isotope js -->
      <script src="js/isotope.pkgd.min.js"></script>
      <!-- isotope image loader js -->
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <!-- Typed -->
      <script src="js/typed.min.js"></script>
      <!-- Custom JS -->
      <script src="js/custom.js"></script>
<<<<<<< HEAD:index.php

      <script src="./js/Sliderfirebase.js"></script>

=======
      
      

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P737K66" height=0 width=0
            style=display:none;visibility:hidden></iframe></noscript>
      
>>>>>>> 9f53d947ca6cba7fbdf83f9090fd820cf04f3061:index.html
   </body>

   



   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P737K66" height=0 width=0
            style=display:none;visibility:hidden></iframe></noscript>

<!-- index.html  26 Nov 2019 03:52:23 GMT -->
</html>
