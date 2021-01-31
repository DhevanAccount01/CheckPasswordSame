

function checkPasswordSimilar($password)
{
	$pdo = setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql = "SELECT * FROM user WHERE password='$password'";
	try {
	$statement= $pdo->prepare($sql);
	$statement->execute();

	if($statement->rowCount() > 0)
	{
		return false;
	}
	else 
	{
		return true;
	}
	}
	catch(PDOException $e){
		die($e->getMessage());
	}
	$pdo = null;
}
