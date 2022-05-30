<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Clinique</title>
</head>
<body>
    
    <div class="first-header-wrapper flex">
        <div class="title-wrapper flex">
            <h1> CLIN<span style="color: #00b8e6;">IQUE</span> </h1>
        </div>

        <div class="contact-wrapper flex">
            <div class="contact-container">
                <div class="contact-card">
                    <div class="contact-image-wrapper">
                        <img src="../public/images/phone-call.png" alt="">
                    </div>
                    <div class="information-container">
                        <p>Emergency</p>
                        <a> (245-453-3434)</a>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-image-wrapper">
                        <img src="../public/images/clock.png" alt="">
                    </div>
                    <div class="information-container">
                        <p>Clinic Hours</p>
                        <a>8:00 - 16:00 Weekdays</a>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-image-wrapper">
                        <img src="../public/images/marker.png" alt="">
                    </div>
                    <div class="information-container">
                        <p>Location</p>
                        <a> Abellana National</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php

		session_start();

		if(isset($_SESSION['usertype'])){
			 
			 	if($_SESSION['usertype'] == 'nurse'){ include '../templates/nurseheader.php';}
			 	else if($_SESSION['usertype'] == 'admin'){include '../templates/adminheader.php';}
			 else { include '../templates/nurseheader.php'; }
			 }

	?>



           <div class="main-title-container">
            <h3> TRUSTED CARE </h3>
            <h1> Our Doctors </h1>
        </div>
 
   
    <div class="flex-center">
    <main class="grid">
       <div class="card">
               <img src="../public/images/doc1.jpg" alt="">
               <div class="doctor-information">
                   <p> Mia Malkova </p>
                   <h4> PHYSICIAN </h4>
               </div>
               <div class="social-media">
                   <ul>
                    
                       <li><i class="fa-brands fa-xl fa-facebook"></i> </li>
                       <li><i class="fa-brands fa-xl fa-instagram"> </i></li>
                       <li> <i class="fa-brands fa-xl fa-linkedin"></i></li>
                   </ul>
               </div>
               <button> View profile</button>
           </div>
    
           <div class="card">
            <img src="../public/images/doc2.jpg" alt="">
            <div class="doctor-information">
                <p> John Doe </p>
                <h4> PHYSICIAN </h4>
            </div>
            
            <div class="social-media">
                    <ul>
                      
                       <li><i class="fa-brands fa-xl fa-facebook"></i> </li>
                       <li><i class="fa-brands fa-xl fa-instagram"> </i></li>
                       <li> <i class="fa-brands fa-xl fa-linkedin"></i></li>
                   </ul>
            </div>
            <button> View Profile</button>
        </div>

        <div class="card">
            <img src="../public/images/doc3.jpg" alt="">
            <div class="doctor-information">
                <p> John Doe </p>
                <h4> PHYSICIAN </h4>
            </div>
            <div class="social-media">
                <ul>
                    <li><i class="fa-brands fa-xl fa-facebook"></i> </li>
                    <li><i class="fa-brands fa-xl fa-instagram"> </i></li>
                    <li> <i class="fa-brands fa-xl fa-linkedin"></i></li>
                </ul>
            </div>
            <button> View Profile</button>
        </div>
    </main>
    </div>
    
    <setion class="second-section">
        <div class="main-title-container second-title">
            <h3> GET IN TOUCH  </h3>
            <h1> CONTACT </h1>
        </div>
    </section>


    <section>
        <div class="c-container">
            <div class="c-wrapper flex">
                <div class="c-card">
                    <img src="../public/images/phone-call.png" alt="">
                    <h3>EMERGENCY</h3>
                    <p>(281-234-4550)</p>
                    <p>(281-234-4550)</p>
                    </div>
                <div class="c-card">
                    <img src="../public/images/marker.png" alt="">
                    <h3>Location</h3>
                    <p>Abellana National Highschool</p>
                    <p>Cebu City</p>
                </div>
                <div class="c-card">
                    <img src="../public/images/phone-call.png" alt="">
                    <h3>EMERGENCY</h3>
                    <p>(281-234-4550)</p>
                    <p>(281-234-4550)</p>
                </div>
                <div class="c-card">
                    <img src="../public/images/clock.png" alt="">
                    <h3>WORKING HOURS</h3>
                    <p>Mon-Sat 09:00-20:00</p>
                    <p>Sunday Emergency only</p>
                </div>
            </div>
        </div>
    </section>


    <footer>
    
        <div class="footer-wrapper">
            <div class="upper-footer">
                <div class="footer-card c">
                    <h1> CLINIQUE </h1>
                    <p> Leading the Way in Medical <br>Exellence,  Trusted Care.</p>
                </div>
                
            
        </div>
        <div class="lower-footer">
            <p> ©2021 Clinique All Rights Reserved by PNTEC-LTD</p>
            <div class="footer-media">
                <ul>
                    <li><i class="fa-brands fa-xl fa-facebook fb"></i> </li>
                    <li><i class="fa-brands fa-xl fa-instagram fb"> </i></li>
                    <li> <i class="fa-brands fa-xl fa-linkedin fb"></i></li>
                </ul>
            </div>
        </div>
    </footer>
    
    
    


</body> 
</html>


