<?php 
include 'common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
                <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link href="assign2.css" rel="stylesheet" type="text/css">        
                <title>setting page
                </title>
    </head>
    <body>
       <?php include 'header.php'?>    
      
        <div class="section">
            <div class="container">
                <div class=" row row-style">
                    <div class="col-xs-4 col-xs-offset-4">
                            <h3>Change Password</h3>                                         
                            <form action="setting_script.php" method="POST">
                              <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Old Password" name="old_password" required="true">
                                    </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password" name="New_password" required="true">
                                    </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Re-type New Password" name="new_password" required="true">
                                    </div>
                                <button class="btn btn-primary">Change</button>
                            </form></div></div></div></div>
        <?php if(isset($_GET['error'])){
        echo $_GET['error'];} ?>
        
        <?php include 'footer.php' ?>
        
        
    </body>
</html>

            