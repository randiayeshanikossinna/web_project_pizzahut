<?php
//assign veriables for labels
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $id = $_POST['id'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $telephone = $_POST['telephone'];
   $country = $_POST['country'];

//check the all the requirements are fullfiled
   if(!empty($fname) || !empty($lname) || !empty($id) || !empty($email) || !empty($gender) || !empty($telephone) || !empty($country)){
     $host="localhost"; 
     $dbusername="root";
     $dbpassword="";
     $dbname="pizzahut_customer";

     //create connection
     $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);

     if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

     }else{
        //check insert email is already here or not
        $SELECT ="SELECT email From customer Where Email =? Limit 1";
        $INSERT ="INSERT Into customer (Fname,Lname,Id,Email,Gender,Telephone,Country) values (?,?,?,?,?,?,?)";

        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
           $stmt->close();
         $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssissis",$fname,$lname,$id,$email,$gender,$telephone,$country) ;
   $stmt->execute();
    echo "New record inserted sucessfully";

   }else{
      echo "Someone already register using this email";
   }
//close the db conncetion
   $stmt->close();
   $conn->close();

}
}  
 ?>