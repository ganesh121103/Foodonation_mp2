<?php
session_start();
include 'connection.php';

if (isset($_POST['feedback'])) {
  $email = $_POST['email'];
  $name = $_POST['name'];
  $msg = $_POST['message'];
  $sanitized_emailid =  mysqli_real_escape_string($connection, $email);
  $sanitized_name =  mysqli_real_escape_string($connection, $name);
  $sanitized_msg =  mysqli_real_escape_string($connection, $msg);
  $query="insert into user_feedback(name,email,message) values('$sanitized_name','$sanitized_emailid','$sanitized_msg')";
  $query_run= mysqli_query($connection, $query);
  
  if($query_run)
  {
    echo '<script type="text/javascript">alert("data saved") </script>';
      header("location:contact.html");
     
  }
  else{
      echo '<script type="text/javascript">alert("data not saved")</script>'; 
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Donate</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body style="    background-color: #06C167;">
    <div class="container">
        <div class="regformf" >
    <form action="" method="post">
    <div class="logo">Foo<b style="color: #ffa514;">D</b><b style="color: #06C167;">onation</b></div>
        







       <div class="input">
        <label for="foodname"  >  <br></br >       Feedback successfully submitted . </label>
      
     
    
</body>
</html>