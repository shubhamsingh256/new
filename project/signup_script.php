<?php 
include 'common.php';
 $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
 

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^\d{10}$/";
 
  
 $query = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($con , $query);
  $num = mysqli_num_rows($result);
  if($num!=0){
    header('location:signup.php?exist=email already exist');  
  }
  else 
      {
       if (!preg_match($regex_email, $email)) {
          
        header('location: signup.php?eml=Not a valid Email Id');
  } 
  if (!preg_match($regex_num, $contact)) {
      
  header('location: signup.php?phn=not a valid no');
 
  }
  else
      {
    
    $query = "INSERT INTO user (name, email, password, phone, city, address) VALUES ('$name ','$email','$password','$contact','$city','$address')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $user_id;
    header('location: product.php');
  }}
?>

