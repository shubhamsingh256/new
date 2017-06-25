
<footer>  
     <?php        
              
     if (isset($_SESSION['email'])) {
                   ?>     
    <div class="container">
                           <div class="row">
            <div class="col-xs-6">
                <h3>information</h3>
                <h5><a href="about.php">About us</a></h5>       
                <h5><a href="contact.php">Contact us </a></h5></div>
                               
            <div class="col-xs-6">
                <h3>Contact us</h3> 
                <h5>
                    9455714969</h5></div></div></div>
                               
                               <?php
               }    else {             
                  ?>           
               <div class="container">    
        <div class="row">
            <div class="col-xs-4">
                <h3>information</h3>
                <h5><a href="about_us.php">About us</a></h5>       
                <h5><a href="contact_us.php">Contact us </a></h5></div>
                    
      <?php   include "modal.php" ?>
            <div class="col-xs-4">
                <h3>My Account</h3>
                <h5><a href="#" data-toggle="modal" data-target="#myModal">Login</a></h5>       
                <h5><a href="signup.php">signup.php</a></h5></div>
                    

            <div class="col-xs-4">
                <h3>Contact us</h3> 
                <h5>
                    9455714969</h5></div></div></div>
                               
                       <?php     
                       }                   
                       ?>    
                  
</footer> 
