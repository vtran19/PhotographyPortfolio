<?php
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
$path_parts = pathinfo($phpSelf);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<title>Vanessa Tran - Novice Photography Portfolio</title>
	<meta name="author" content="Vanessa Tran">
	<meta name="description" content="Vanessa Tran’s portfolio consisting of beginner photos taken on an iPhone or DSLR camera.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- JavaScript link would go here -->
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 648px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 500px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
    </head>
    <?php
    print '<body class="formatting" id="' . $path_parts['filename'] . '">';
    print '<!--######### Start of Body ######### -->';
    include 'connect-DB.php';
    include 'header.php';
    include 'nav.php';
    ?>