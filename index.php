
<html>
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" >
        <meta http-equiv="X-UA-Compatible" contents="ie=edge">
        <title>OSMS</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        
        

            

        
        

        </head>

    
 
        
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top"><!--start nav-->
        <a href="index.php" class="navbar-brand"><img src="images/Web-Services-Logo.png" class="img-fluid" height="70" width="70"></a>
        <span class="navbar-text text-white">Customer's Happiness is Our Goal</span>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#myMenu"
            type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse d-block justify-content-end mr-5" id="myMenu">
            <ul class="navbar-nav pl-5 custum-num">
                <li class="nav-item"><a href="" class="nav-link active">Home</a></li>
                 <li class="nav-item"><a href="#Services" class="nav-link ">Services</a></li>
                  <li class="nav-item"><a href="#Registration" class="nav-link ">Registration </a></li>
                  <li class="nav-item"><a href="Requester/requesterLogin.php" class="nav-link ">Login</a></li>
                    <li class="nav-item"><a href="#Contact" class="nav-link ">Contact</a></li>
            </ul>
        </div>
    </nav><!--end nav-->

    <!--start header jumbotron-->
    <header class="jumbotron jumbImge "  style="background-image: url('images/banner.jpg') ; background-attachment: fixed">
        <div class="mt-5" class="jumbdiv ">  
            <h1 class="text-uppercase text-danger">Welcome to OSMS</h1>
            <p class="font-italic text-danger font-weight-bold">Customer Happiness Our Goal</p>
            <a href="Requester/requesterLogin.php" class="btn btn-primary mr-2">Login</a>
            <a href="#Registration" class="btn btn-danger ">Sign Up</a>
        </div>
    </header>
        <section class="container text-center pt-5 border-bottom bg-light  " id="Services">
            <h1> OSMS Services</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                anim id est laborum</p>
            

        </section>
                  <!--///////////////////////////////////////////////////-->
     <section class="container text-center mt-5 pt-5 border-bottom bg-light  " id="Services">
            <h1> Our Services</h1>
                        <div class="row pt-5 ">
                <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
                    <a href="#"><i class="fab fa-android fa-10x text-success pb-4" ></i></a>
                    <a href="#" class="text-dark"><h4></h4>Electronic Appliances </a>
                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4  mb-4 ">
                    <a href="#"><i class="fas fa-sliders-h fa-10x text-info pb-4 " ></i></a>
                    <a href="#" class="text-dark"><h4> Preventive Maintenance</h4></a>
                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 mb-4  ">
                    <a href="#"><i class="fas fa-cogs fa-10x text-danger pb-4 "></i></a>
                    <a href="#" class="text-dark"><h4>Fault Repair</h4></a>
                </div>
            </div>
            
     </section>
                  <!--start REGISTRATION-->
                  <?php include 'UserRegistration.php';?>
                  <!--end registration-->
                  
  
        
        <div class=" container pt-5 border-bottom text-center " id="Team" >
           
                <h1>Happy Customers </h1>
                <p> We Thanks for your support</p> 
                <div class="row slideanim">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="card" >
                            <img class="card-img-top" src="images/man1.jpeg"  height="300"alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
<div class="card" >
  <img class="card-img-top" src="images/man2.jpeg" alt="Card image"  height="300">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>  
                    </div>
                   <div class="col-lg-4 col-md-4 col-sm-4">
<div class="card" >
  <img class="card-img-top" src="images/man3.jpeg" alt="Card image"  height="300">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div> 
                    </div>
                  
                   
                  
                        
                
            </div>

                
            
            
            
            
        </div>
                 <!--Start Contact-->
                 <?php include 'Contact.php';?>
                 <!--Contact End-->
                  
       
          <footer class="footer bg-dark text-white text-center mt-5" >
              <div class="container">
                  
                  <div class="row py-3">
                      <div class="col-lg-6 ">
                          <span class="">Follow us </span> 
                          <a class="pr-2 fi-color text-danger" href="" target="_blank" ><i class="fab fa-facebook"></i></a>
                          <a class="pr-2 fi-color text-danger" href="" target="_blank" ><i class="fab fa-instagram"></i></a>
                          <a class="pr-2 fi-color text-danger"  href="" target="_blank" ><i class="fab fa-twitter"></i></a>
                      </div>
                      <div class="col-lg-6 ">
                          <p> Designed By shahnawaz <a href="Admin/AdminLogin.php"> admin</a></p>
                      </div>
                      
                  </div>
              </div>
                      
                    </footer>
            
        
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

    <script src="js/jquery.js"></script>   
    <script src="js/propper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
</html>
