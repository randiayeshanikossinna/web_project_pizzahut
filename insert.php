<?php
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $id = $_POST['id'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $telephone = $_POST['tele'];
   $country = $_POST['country'];

   if(!empty($fname)|| !empty($lname) || !empty($id) || !empty($email) || !empty($gender) || !empty($telephone) || !empty($country){
      
   }
   else{
      echo "All field are required to fill";
      die();
   }
?>