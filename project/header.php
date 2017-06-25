
<?php include 'modal.php';?>
<div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container">      
        <div class="navbar-header">    
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>     
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>  
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">  
               <?php        
               if (isset($_SESSION['email'])) {
                   ?>     
                            <li><a href = "cart_page.php"><span class = "glyphicon glyphicon-shoppingcart"> </span> Cart </a></li>
                             <li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>    
                       <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>      
                               <?php
               }    else {             
                  ?>           
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
                <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>               
                <li><a href="about_us.php"><span class="glyphicon glyphicon-family"></span> about_us</a></li> 
                 <li><a href="contact_us.php"><span class="glyphicon glyphicon-headset"></span> contact_us</a></li>
                       <?php     
                       }                   
                       ?>       
            </ul> 
        </div>    
    </div> 
</div> 
