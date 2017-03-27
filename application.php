<!DOCTYPE html>
<html>
<head>
<title>web appliction  form in php</title>
</head>
<body>
<?php

 // define variables and set to empty values
      $Name = $age = $dob = $email = $phone = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $age = test_input($_POST["age"]);
            $dob = test_input($_POST["dob"]);
            $mail = test_input($_POST["email"]);
			$phone = test_input($_POST["phone"]);
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
   
      <h2>valid web appalication</h2>
      
      <form method = "post" action = "/php/php_form_introduction.html">

<table>
		<tr>
			       <td>Name:</td>
                   <td><input type="text" name="your_name" size="12" value=""></td>
			</tr>
			<tr>
			         <td>AGE:</td>
			         <td><input type="number" name ="age" value="" ></td>
             </tr>
			 <tr>
			           <td>DOB:</td>
					  <td> <label for="meeting"> </label><input id="meeting" type="date" value="2011-01-13"/></td

			           </tr>
			<tr>
			        <td>Email:</td>
			        <td><input type= "email" name ="email" size="12" value="" ></td>
			</tr>
			<tr>
			        <td>phone :</td>
			        <td><input type= "text" name ="phone_number" size="12" value=""></td>
		    </tr>
		</form>
	</table>
	<?php
                  
         echo $Name;
		 echo "<br>";
         
         echo $age;
		 echo "<br>";
         
         echo $dob;
         echo "<br>";
         
         echo $email;
		 echo "<br>";
		 
		 echo $phone;
      ?>

	</body>
</html>
			 
			
				