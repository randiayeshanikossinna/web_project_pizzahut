<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet"  href="style.css">
</head>
<body>
<div class="nav">
         <ul>
           <li><a class="active" href="#">Items</a></li>
           <li><a href="#">Places</a></li>
           <li><a href="#">Contact Us</a></li>
         </ul> 
         
     </div>
     <div class="context">
     <div class="form"> <br><br>
<form action="insert.php" method="POST"></form>
      <label >First Name: <input type="text" name="fname"></label> <br><br>
      <label >Last Name : <input type="text" name="lname"></label> <br><br>
      <label >ID : <input type="text" name="id"></label> <br><br>
      <label >Email     : <input type="email" name="email"></label><br><br>
      <label>Geneder  : <br>  Male <input type="radio" name="gender" value="m"><br>
                      female <input type="radio" name="gender" value="f"></label><br><br>
      <label >Telephone : <input type="text" name="tele"></label><br><br>
      <label >Country: 
           <select name="country">
           <option selected hidden>Select Country</option>
                <option value="coun1">Sri Lanka</option>
                <option value="coun2">India</option>
                <option value="coun3">USA</option>
                <option value="coun4">Japan</option>
                <option value="coun5">China</option>
           </select>
      </label><br><br>
      <input type="submit">

      </form>
     </div>
     </div>
     <div class="last">
         <h1>Take Away</h1>
     </div>
</body>
</html>