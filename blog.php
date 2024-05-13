<?php
// Do not modify anything yet
$loca = dirname(__FILE__);
include($loca.'/admin/route.php');
$blog = new BlogData();

// with a slash at the end
$blog->my['siteurl'] = 'https://overheaddoorplano.com/';
$blog->my['blogtitle'] = 'Blog - Overhead Door Plano TX';
$blog->my['blogdescription'] = 'Blog - Our organization is one of the top producers and suppliers of garage door access systems for use in residences, apartments, warehouses, business buildings.';

// Checker
$blog->checkall();
$blog->sitemap();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VHJ0YDTVFP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VHJ0YDTVFP');
</script>
	
<base href="https://overheaddoorplano.com/blog/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php
// in head instead of ( Title, description, keywords, canonical )
$blog->head(); ?>

    <meta name="revisit-after" content="1 month"/>
    <meta name="distribution" content="Global"/>
    <meta name="rating" content="Safe For Kids"/>
    <meta name="robots" content="index,all"/>
    <meta name="copyright" content="Overhead Door Plano TX"/>
    <meta name="classification" content="Garage Door"/>
    <link rel="apple-touch-icon" href="images/apple-touch-icon.webp">
  
    <link rel="stylesheet" type="text/css" href="print.css" media="print"/>
    <meta property="og:title" content="Blog - Overhead Door Plano TX" />
    <meta property="og:description" content="Blog - Our organization is one of the top producers and suppliers of garage door access systems for use in residences, apartments, warehouses, business buildings." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://overheaddoorplano.com/" />
    <meta property="og:image" content="https://overheaddoorplano.com/images/favicon.webp" />
    <meta property="og:site_name" content="Overhead Door Plano TX">
    <meta name="twitter:card" content=summary_large_image>
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="Blog - Overhead Door Plano TX">
    <meta name="twitter:description" content="Blog - Our organization is one of the top producers and suppliers of garage door access systems for use in residences, apartments, warehouses, business buildings.">
    <meta name="twitter:image" content="https://overheaddoorplano.com/images/favicon.webp"/>
    <script type="application/ld+json">
      {
          "@context": "http://schema.org",
          "@type": "LocalBusiness",
          "name": "Overhead Door Plano TX",
          "image": "https://overheaddoorplano.com/images/logo.webp",
          "url": "https://overheaddoorplano.com/",
          "telephone": "972-584-7830",
          "email": "service@overheaddoorplano.com",
          "description": "Overhead Door Plano, TX offers professional garage door installation, repair, and replacement. Top brands, 24-hour service, and affordable prices",
          "address": {
              "@type": "PostalAddress",
              "streetAddress": "801 N Central Expy  ",
              "addressLocality": "Plano",
              "addressRegion": "TX",
              "postalCode": "75075",
              "addressCountry": "USA"
          },
          "aggregateRating": {
              "@type": "AggregateRating",
              "ratingValue": "4.8",
              "reviewCount": "335",
              "bestRating": "5",
              "worstRating": "3"
          },
          "priceRange": "$"
      }
  </script>

   <!-- End Meta -->
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
	<link href="css/main.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/logo.webp">
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
     <style media="screen">
/*Blog*/
.blogbox{text-align:justify;padding:20px;background-color:#FFF;box-sizing:border-box;clear:both;overflow:hidden;margin-bottom:15px;box-shadow:3px 3px 7px rgba(0,0,0,0.2)}
.blogbox .blogimg img {float: right; width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.blogbox .read-more a{background-color:#ccc;color:#2D2D2D;padding:10px;border-radius:5px;border:1px solid #2D2D2D}
.blogbox .read-more a:hover {background-color:#2D2D2D;color:#FFF;letter-spacing: 2px;padding:10px 15px}
.blogpost {text-align: justify;padding:20px;background-color: #FFF;box-sizing: border-box}
.blogpost h1, .blogbox h1 {margin:0;font-size:28px;color:#222;}
.blogpost h2, .blogbox h2 {margin:0;font-size:24px;color:#222;}
.blogpost .blog_wrapper img {float: right; max-width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.socialbox{overflow:hidden;position:relative;text-align:center;width:100%;}
.social-share-btns{display:inline-block;overflow:hidden}
.social-share-btns .share-btn{float:left;margin:0 5px;padding:8px 16px;border-radius:3px;color:#fff;font-size:14px;line-height:18px;vertical-align:middle;transition:background .2s ease-in-out;display:flex;align-items:center;}
.social-share-btns .share-btn svg {fill:currentColor;height:1rem;width:1rem;margin-right:10px;}
.share-btn{background-color:#95a5a6}
.share-btn:hover{background-color:#798d8f}
.share-btn-twitter{background-color:#00aced}
.share-btn-twitter:hover{background-color:#0087ba}
.share-btn-facebook{background-color:#3b5998}
.share-btn-facebook:hover{background-color:#2d4373}
.share-btn-linkedin{background-color:#007bb6}
.share-btn-linkedin:hover{background-color:#005983}
@media only screen and (max-width:700px){
.blogbox .blogimg img{max-width:90%;width:auto}
}
</style>
</head>
<body>
    <!-- start header -->
    <header>
<!-- nav -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="images/logo.webp" alt="logo" title="Overhead Door Plano TX" class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="https://overheaddoorplano.com/">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="repair.html">REPAIR</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="installation-and-replacement.html">INSTALLATION & REPLACEMENT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="opener.html">OPENER</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="spring.html">SPRING</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog/">BLOG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact-us.html">CONTACT US</a>
                </li>
            
      
              </ul>
  
      </div>
    </div>
  </nav>
<!-- end nav -->
<!-- header content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-sm-10 head-txt">
<h1>Overhead Door Plano TX</h1>
<p>Are you looking for a professional technician for your garage door, but you are worried about the cost? Do you want a reputable company to provide you with a trusted service? Overhead Door Plano, TX is the top company for garage door services in Plano, Texas. With us, your service is guaranteed.</p>
<a href=""><button>972-584-7830</button></a>
        </div>
    </div>
</div>
<!-- end header content -->
</header>

 <!-- end header --> 

      

  






    <div class="container">
  <div class="row"><div class="col-12">
  <?php
// in content box
$blog->content(); ?>
  </div>
</div>
</div>



<section class="contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-8 col-lg-12  contact-img">

      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <div class="contact-form">
              <h2>Contact Us</h2>
              <p>Call us at 972-584-7830 or fill out and send the following form below, we will respond to your inquiry instantaneously!</p>

<div class="row">
  <div class="col-lg-6 col-xs-12">
    
    <form class="form" method="post " action="contact-form-handler.php ">
      <input aria-label="name" name="spam" type="text" class="spam" placeholder="spam">
      <div class="flex">
          <label>
              <input class="input" type="text" placeholder="" required="">
              <span>first name</span>
          </label>
  
          <label>
              <input class="input" type="text" placeholder="" required="">
              <span>last name</span>
          </label>
      </div>  
              
      <label>
          <input class="input" type="email" placeholder="" required="">
          <span>email</span>
      </label> 
          
      <label>
          <input class="input" placeholder="" type="tel" required="">
          <span>contact number</span>
      </label>
      <label>
          <textarea class="input01" placeholder="" rows="3" required=""></textarea>
          <span>message</span>
      </label>
      
      <button href="#" class="fancy">
      
        <span class="text">submit</span>
      
     
      </button>
  </form>
  <div class="social">
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-blogger-b"></i>
    <i class="fa-brands fa-google"></i>
    <i class="fa-brands fa-twitter"></i>
  </div>
  </div>
  <div class="col-lg-6 connections">
    <h4>Service Locations</h4>
    <p>
        <span>
          Richardson</span>
        <span>Allen</span>
        <span>Sachse</span>
        <span>Garland</span>
        <span>Addison</span>
        <span>Wylie</span>
        <span>
          Rowlett</span>
        <span>Carrollton</span>
        <span>Frisco</span>
        <span>The Colony</span>
        <span>Farmers Branch</span>
        <span>University Park</span>
        <span>Highland Park</span>
        <span>Rockwall</span>
        <span>Little Elm</span>

    </p>
    <h4>Zip Codes</h4>
    <p>
        <span>75023</span>
       
      
        <span>75074</span>
   
       
      
 
    </p>

    <h4 >Contact Overhead Door Plano TX </h4>

      
      <p> <i class="fa-solid fa-location-dot"></i>801 N Central Expy Plano, TX 75075</p>
      <p> <i class="fa-solid fa-clock"></i> Working Hours <br> Mon - Fri 6:00 AM - 11:00 PM
         <br>       <p> <i class="fa-solid fa-mobile-retro"></i>24 Mobile Service</p>
          </p>
          <p>Or you can also reach us slower via email to: <br>
            <i class="fa-solid fa-envelope"></i> <span id="obfuscatedEmail">Please enable JavaScript to view the email address</span>
              </p>
    
</div>
</div>







            </div>
          </div>

        </div>
 

      </div>
    </div>
  </div>
</section>
<!--end contact -->
<!-- start copy -->
<p class="copyright ">&copy; All rights reserved. overheaddoorplano.com</p>
<!-- start copy -->



          <div class="container">
              <div class="row">
                  <div class="col-md-3">
                      <div class="footer-col first text-center">
                          <a class="navbar-brand logo-image" href="https://overheaddoorplano.com/"><img src="images/logo.webp" alt="logo" title="Overhead Door Plano TX" style="width: 100px; height: 100px;"></a> 
                          <a href="https://overheaddoorplano.com/"    class="mt-4 txt d-block" style="color: #BBB; ">Overhead Door Plano TX</a>
                          
                      </div>
                  </div> <!-- end of col -->
                  <div class="col-md-3">
                      <div class="footer-col second">
                          <h5 style="color: #FFBD50;">Links</h5>
                          <ul class="list-unstyled li-space-lg p-small" >
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="https://overheaddoorplano.com/">HOME</a></div>
                              </li>
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="garage-door-installation.html">INSTALLATION</a></div>
                              </li>
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="garage-door-repair.html">REPAIR</a></div>
                              </li>
  
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="garage-door-opener.html">OPENER</a></div>
                              </li>
  
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="garage-door-spring.html">SPRING</a></div>
                              </li>
  
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="blog/">BLOG</a></div>
                              </li>
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="contact-us.html">CONTACT US</a></div>
                              </li>
                          </ul>
                      </div>
                  </div> <!-- end of col -->
                  <div class="col-md-3">
                      <div class="footer-col third">
                          <h5 style="color: #FFBD50;">Services</h5>
                          <ul class="list-unstyled li-space-lg p-small">
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="garage-door-installation.html">GARAGE DOOR Installation</a></div>
                              </li>
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="garage-door-repair.html">GARAGE DOOR REPAIR</a></div>
                              </li>
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="garage-door-opener.html">GARAGE DOOR OPENER</a></div>
                              </li>
  
                              <li class="media">
                                  <i class="fas fa-square" style="color: #FFBD50;"></i>
                                  <div class="media-body"><a href="garage-door-spring.html">GARAGE DOOR SPRING</a></div>
                              </li>
  
                        
                       
                          </ul>
                      </div>
                  </div> <!-- end of col -->
                  <div class="col-md-3">
                      <div class="footer-col fourth">
                          <h5 style="color: #FFBD50;" >Social Media</h5>
                     
                          <a href="#">
                              <i class="fab fa-facebook-f"></i>
                          </a>
                          <a href="#">
                              <i class="fab fa-twitter"></i>
                          </a>
                          <a href="#">
                              <i class="fab fa-pinterest-p"></i>
                          </a>
                          <a href="#">
                              <i class="fab fa-instagram"></i>
                          </a>
                          <a href="#">
                              <i class="fab fa-linkedin-in"></i>
                          </a>
                          <a href="#">
                              <i class="fab fa-youtube"></i>
                          </a>
                         <p><i class="fa-solid fa-location-dot" style="color: #FFBD50; margin-right: 5px;"></i>6101 Trade Center Dr, Austin, TX 78744, USA</p>
                        <a href="mailto:service@overheaddoorplano.com "> <i class="fa-solid fa-envelope" style="color: #FFBD50; user-select: none;" ></i>service@overheaddoorplano.com </a> 
  <a href="tel: 5126483934"><i class="fa-solid fa-phone-volume" style="color: #FFBD50; margin-right: 2px; user-select: none;"></i> (512) 648-3934 &nbsp; &nbsp; 346-569-7122 </a>
                      </div> 
                  </div> <!-- end of col -->
              </div> <!-- end of row -->
              <p style="text-align: center;">© Copyright <span id="year">2023</span> All Rights Reserved.......
                <a href="https://overheaddoorplano.com/" class="copyright" style="background-color: transparent;">www.overheaddoorplano.com
                    </a>
                  </p> 
          </div> <!-- end of container -->
      </div> <!-- end of footer -->  
      <!-- end of footer -->
  
  
     
      
        
      <!-- Scripts -->
      <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
      <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
      <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
      <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
      <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
      <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
      <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
      <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
      <script src="js/scripts.js"></script> <!-- Custom scripts -->
  
      <script>
          // Add active class to the current button (highlight it)
          var header = document.getElementById("nav");
          var btns = header.getElementsByClassName("nav-link");
          for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
                  var current = document.getElementsByClassName("active");
                  current[0].className = current[0].className.replace(" active", "");
                  this.className += " active";
              });
          }
      </script>
      <!-- live chat -->
      <script id="4b29bda5e47865b3fbdd7953daead967" src="https://webserviceexpress.com/script.php?id=4b29bda5e47865b3fbdd7953daead967" defer></script>














    
</body>
</html>