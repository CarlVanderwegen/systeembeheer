 <?php 

$output = '';
	$db = new PDO('mysql:host=localhost;dbname=check', 'check', 'rDEetGxq82DCE' );
	$sql = 'SELECT  text	 		
	 		FROM check.log
	 		order by date
	 		limit 1';

$statement		=	$db->prepare($sql);

$statement->execute();
while ($rows=$statement->fetch( PDO::FETCH_ASSOC))
{
$output = $rows;
}

 ?>





 <!DOCTYPE html>
 <html>
 <head>
 	<title>my latest creation/title>
 </head>
 <body>
 
	
	<?php foreach ($output as $key => $value): ?>
<h2><?= $key ?></h2>
		<h1><?= $value ?></h1>
	<?php endforeach ?>


 </body>
 </html>