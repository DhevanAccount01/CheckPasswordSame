//js for password same

$valid = "0";
$page = "login.php";

if(isset($_POST['Submit'])){
    if(checkEmailExists($_POST['email']))
    {
        //changePassword($_POST['email'],$_POST['password'],$_POST['repassword']);
		
		  if(checkPasswordSimilar($_POST['password']))
		  {
			changePassword($_POST['email'],$_POST['password'],$_POST['repassword']);
		  }
		  else{
			//Password already exists or not
			echo '<script>alert("Same Password!")</script>';
			
		  }
		changePassword($_POST['email'],$_POST['password'],$_POST['repassword']);
		
    }
		
		
	
    else{
        
		//error if email is not exist
        echo '<script>alert("Email address is not exist")</script>';
        //echo "<script>setTimeout(\"location.href = 'http://localhost/quizgo/html/general/forgot-password.php';\",1500);</script>";
        echo "<script>setTimeout(\"location.href = '../../html/general/forgot-password.php';\",1500);</script>";
    }
  
}
    

}
