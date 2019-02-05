<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Demo</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    
    <style>
    
        form{
            background: none;
        }
        
        #dimensions{
            position: fixed;
            background: rgba(0,0,0,.7);
            color: #fff;
            z-index: 999;
    
    </style>
    
</head>
<body>
   
<!--FOR GETTING WINDOW DIMENSIONS
=================================================-->
    <!--<div id="dimensions">
       <p id="width">Width: </p>
       <p id="height">Height: </p>
    </div>-->
    
    <div class="container-fluid">
     
     <div id="nav" class="row">
       
       <div id="logo">
           <img src="images/logo.png" alt="">
           
           <h4>Smith Plumbing</h4>
           
       </div>
       
        <!--<div id="navLinks">
            <p>Home</p>
            <p>About</p>
            <p>Contact</p>
        </div>-->
         
     </div>
      
      <div id="header" class="row">
          <img src="images/funnel.png" alt="">
      </div>
      
       <div class="row">
           
       
        <div class="cta col-sm-6 col-sm-offset-6">
            <h2>Cold Weather is coming!</h2>
             <h3>Are your pipes prepared?</h3>
            <!--<h2>Deserves its perfect day</h2>-->
           
            
            <h3>Schedule a <span style="text-decoration: underline">FREE</span> inspection today!</h3>
            
            <!--<h1 style="font-family: 'Lora', serif;">Smith Plumbing</h1>-->
            
            <?php if(isset($_GET['error'])) : ?>
            
            <div class="error">
                <?php echo $_GET['error']; ?>
            </div>
            
            <?php endif; ?>
            
             <form action="user_update.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name">
                 </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone">
                </div>
                <div class="form-group">
                    <input class="btn btn-lg btn-danger" type="Submit" value="Get FREE Inspection" name="submit">
                </div>
            </form>
            
            <!--<a target="_blank" href="http://www.weddingswithterry.com"><p>Smith Plumbing Website</p></a>-->
            
            <!--<a id="admin-login-link" href="admin_login.php">Admin Login</a>-->
            
        </div><!--end of cta div-->

    </div><!--end of row-->
    
    <div id="howItWorks" class="row">
       
       <h1>How It Works</h1>
       
        <div class="col-sm-4">
           
           <h1>&mdash; 1 &mdash;</h1>
            <h2>Fill Out Our Form</h2>
            
            <img src="images/coupleOnLaptop.jpg" alt="">
            
            <p>Provide your name and phone number in the form above.</p>
            
        </div>
        <div class="col-sm-4">
           <h1>&mdash; 2 &mdash;</h1>
            <h2>Get Scheduled</h2>
            
            <img src="images/schedule_resized.jpg" alt="">
            
            <p>We'll give you call to set up an appointment that best suits your schedule.</p>
            
        </div>
        <div class="col-sm-4">
           <h1>&mdash; 3 &mdash;</h1>
            <h2>Get A Professional Inspection</h2>
            
             <img src="images/plumber1_resized.jpg" alt="">
            
            <p>One of our certified plumbers will arrive at your home to give you a professional and FREE inspection.</p>
            
        </div>
    </div>
    
    <footer>
        <div class="row">
            <div class="col-md-12">
               <img src="images/logo.png" alt="">
            </div>
            <div class="col-md-12 socialMedia">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
            <div class="col-md-12">
                <p>Copyright &copy; 2018</p>
            </div>
            <div class="col-md-12">
                <a href="page_admin.php">Admin Login</a>
            </div>
        </div>
    </footer>
    
    </div><!--end of container-->
    
    <!--<footer>
       <span>Landing Page Created By</span>
       <a target="_blank" href="http://www.cyberleviathan.com"><img src="images/full_white.png" alt="Cyber Leviathan"></a>
    </footer>-->
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
    //for getting dimensions***********************************************
    /*function getDimensions(){
        var width = document.getElementById("width");
        var height = document.getElementById("height");
        var w = window.innerWidth;
        var h = window.innerHeight;

        width.innerHTML = "Width: " + w + "px";
        height.innerHTML = "Height: " + h + "px";
    };*/
    //end of getting dimensions********************************************
</script>
</body>
</html>