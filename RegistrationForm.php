<!DOCTYPE html>
<html>
<body>

<h1>Registration form</h1>
<?php
		$firstNameErr = $lastNameErr = $GenderErr = $EmailErr = $usernameErr = $passwordErr = $recoveryEmailErr = "";
		$firstName = ""; 
		$lastName = "";
		$Email = "";
		$username = "";
		$password = "";
		$recoveryEmail = "";
		$count = 0;

		

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_POST['fname'])) {
				$firstNameErr = "Please fill up the first name properly";
			}
			else {
				$firstName = $_POST['fname'];
				$count++;
			}

			if(empty($_POST['lname'])) {
				$lastNameErr = "Please fill up the last name properly";
			}
			else {
				$lastName = $_POST['lname'];
				$count++;	
		}
			if(isset($_POST['gender']))
            {
                $gender = $_POST['gender'];
                $count++;
                
                if ($gender == "Male")
                {
                    $gender = "Male";
                }
                else
                {
                    $gender = "Female";
                }
 
                
            }
 
            else {
                $genderErr = "Please Check the Gender";
            }
			

			if(empty($_POST['email'])) {
				$EmailErr = "Please fill up the Email properly";
			}
			else {
				$Email = $_POST['email'];
				$count++;
			}

			if(empty($_POST['username'])) {
				$usernameErr = "Please fill up the username properly";
			}
			else {
				$username = $_POST['username'];
				$count++;
			}
			if(empty($_POST['remail'])) {
				$recoveryEmailErr = "Please fill up the recovery email properly";
			}
			else {
				$recoveryEmail = $_POST['remail'];
				$count++;
			}

			

			if (empty($_POST['password'])){ 
  				$passwordErr = "wrong format";}
			
			else {
				$password = $_POST['password'];
				$count++;
			}

		   

		if($count==7){
			/*echo $count;*/

	 $filepath = "data.txt";

 
	$f = fopen($filepath,'w');

 
	fwrite($f," First Name: $firstName \n Last Name: $lastName \n Email: $Email \n Gender: $gender \n UserName: $username \n Password: $password \n Recovery Email: $recoveryEmail");
	
		}
	}
	
		


	  ?>
	  

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
 <fieldset>
  <legend>Basic Information:</legend>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="radio" name="gender" id="male" value="male">
  <label for="male">Male</label>
  <input type="radio" name="gender" id="female" value="female">
  <label for="female">Female</label><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
 </fieldset>
 <fieldset>
  <legend>User Account Information:</legend>
  <label for="name"> User Name</label>
  <input type="text" name="username" id="username"><br><br>
  <label for="pass">Password</label>
  <input type="password" name="password" id="password"><br><br>
  <label for="email">Recovery Email:</label>
  <input type="remail" id="remail" name="remail"><br><br>

 </fieldset>
<input type="submit" value="Submit">
</form>

</body>
</html>
