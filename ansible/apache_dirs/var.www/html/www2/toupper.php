<?php 
define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );
$upper = strtoupper($_GET['code'])
 ?>
 <!DOCTYPE html>
 <html>
	 <head>
	 	<title>ToUpper</title>
	 </head>
	 <body>
 		<form action="<?=BASE_URL?>" method="get" accept-charset="utf-8">
 			<label for="code">enter something in here and it will apear in upper case </label>
 			<input type="text" name="code" autofocus placeholder="code">
 			<button type="submit">send</button>
 		</form>
	 <h1>
	 	<?=$upper?>
	 </h1>
	 </body>
 </html>

