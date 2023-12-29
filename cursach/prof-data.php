<!-- <?php
include ('connect.php');
$sql = "SELECT * FROM users where user_id = $id";
$result_list = $connection->query('SELECT * FROM users'); 
if($result = $connection->query($sql)){
    while($row = $result->fetch()){         
        $name = $row["name"];
        $surname = $row["surname"];		
		$patronymic = $row["patronymic"];	
		$phone = $row["phone"];	
		$email = $row["email"];	
		$password = $row["pass"];	
    }
}
?> -->