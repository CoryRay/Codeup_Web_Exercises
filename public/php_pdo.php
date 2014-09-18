<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <?php 
	        // Get new instance of PDO object
			$dbc = new PDO('mysql:host=127.0.0.1;dbname=employees', 'codeup', 'codeuprocks');

			// Tell PDO to throw exceptions on error
			$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
		?>
        <script src="js/main.js"></script>
    </body>
</html>