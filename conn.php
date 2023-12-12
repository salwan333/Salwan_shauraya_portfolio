<?php
$c1 =  mysqli_connect("localhost:3307", "root", "", "salwan") ;
    
	 // define variables and set to empty values
		$nameErr ="";
        $msgErr ="";
		$emailErr = "";
		$name ="";
		$email = "";
        $msg="";
          if ($_SERVER["REQUEST_METHOD"] == "POST") 
		 {
            if (empty($_POST["cf-name"])) 
			{
               $nameErr = "Name Can Not be blank";
            }
			else 
			{
               $name = $_POST["cf-name"];
            }
            if (empty($_POST["cf-message"])) 
			{
               $msgErr = "msg Can Not be blank";
            }
			else 
			{
               $msg = $_POST["cf-message"];
            }
            if (empty($_POST["cf-email"])) 
			{
               $emailErr = "Email is required";
            }
			else 
			{
               $email = $_POST["cf-email"];
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			   {
                  $emailErr = "Invalid email format"; 
               }
            }
			
		$s1="INSERT INTO contact (name, email,msg) VALUES('$name', '$email','$msg')";
				if(mysqli_query($c1,$s1))
				{
					echo " <h2> Record Saved   </h2>";
                    header("Location: thanks.php");
                    exit();
				}
				else 
				{
					echo "<h2> Record Not Saved</h2>" ;
				} 		
			
			
		 }
		 
		 
    
         
    
      ?>