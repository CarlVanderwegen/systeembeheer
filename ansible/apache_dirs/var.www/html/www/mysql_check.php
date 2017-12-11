<?php 

$output = '';
	$db = new PDO('mysql:host=localhost;dbname=check', 'check', 'rDEetGxq82DCE' );
	$sql = 'SELECT  text	 		
	 		FROM check.log
	 		order by date desc 
	 		limit 1';

$statement		=	$db->prepare($sql);

$statement->execute();
while ($rows=$statement->fetch( PDO::FETCH_ASSOC))
{
echo implode("--",$rows);
}


$db = new PDO('mysql:host=localhost;dbname=check', 'check', 'rDEetGxq82DCE' );
	$sql = 'SELECT  count(*)	 		
	 		FROM check.log;
	 		';

$statement		=	$db->prepare($sql);

$statement->execute();
while ($rows=$statement->fetch( PDO::FETCH_ASSOC))
{
 $am = implode("--",$rows);
}



if ( $am >98) {
	$db = new PDO('mysql:host=localhost;dbname=check', 'check', 'rDEetGxq82DCE' );
	$sql = 'DELETE from log order by date asc limit 18;';
$statement		=	$db->prepare($sql);

$statement->execute();
 }

 ?>

