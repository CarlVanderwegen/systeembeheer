<?php 

$output = '';
	$db = new PDO('mysql:host=localhost;dbname=check', 'check', 'rDEetGxq82DCE' );
	$sql = 'SELECT  count(*)	 		
	 		FROM check.log;
	 		';

$statement		=	$db->prepare($sql);

$statement->execute();
while ($rows=$statement->fetch( PDO::FETCH_ASSOC))
{
$am = implode("--",$rows);
echo $am;
}

 ?>

