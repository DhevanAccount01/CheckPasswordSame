//js for password same

$valid = "0";
$page = "login.php";

if(isset($_POST['Submit'])){
  if(checkPasswordSimilar($_POST['password']))
  {
    changePassword($_POST['email'],$_POST['password'],$_POST['repassword']);
  }
  else{
    //Password already exists or not
    echo '<script>alert("Same Password!")</script>';
    
  }
    

}
