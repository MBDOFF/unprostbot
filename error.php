<?php

$errnumber = array(
    0 => 0,
	1 => 400,
	2 => 401,
	3 => 403,
	4 => 404,
	5 => 503,
    6 => "E1",
    7 => "E2",
    8 => "E3",
    9 => "E4",
    10 => "E5"
    
);

$errheader = array(
    0 => "I don't know what the error is",
	1 => "The request is wrong",
	2 => "You are not authorized",
	3 => "The access is forbidden",
	4 => "Look like you're lost",
	5 => "Offline for maintenance",
    6 => "Website was already installed",
    7 => "Force ReInstall Key is wrong",
    8 => "DoInstall Verification Id is wrong",
    9 => "The doinstall variables are empty",
    10 => "The password for sending is wrong"
    
);

$errdescription = array(
    0 => "This page has a very strange error.",
	1 => "Please try to make another request.",
	2 => "I can't let you visit this page, you are not authorized.",
	3 => "You can't visit this page, access is forbidden.",
	4 => "The page you are looking for not avaible!",
	5 => "This website is undergoing maintenance right now. Please come back later.",
    6 => "If you own this site and you have not installed unProstBot, delete the config.php file.",
    7 => "You can't force reinstall this website if you don't know the reinstall key.",
    8 => "The doinstall verification id is wrong. I can't verify if you are the owner of website.",
    9 => "I can't install the site if you leave the install variables blank.",
    10 => "If the developer has set the password mode, you cannot send a message without the correct password."
    
);

$i = 0;

if(isset($_GET['e']) && $_GET['e'])
$i = $_GET['e'];

if (is_numeric($i)) {
} else {
$i = 0;
}

if($i >= count($errnumber)){
$i = 0;
}

$enum = $errnumber[$i];
$eheader = $errheader[$i];
$edesc = $errdescription[$i];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERROR PAGE</title>



    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Arvo'>
    <link href="https://fonts.googleapis.com/css?family=Kanit:200" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="./css/fontawesome.css" />
    <link type="text/css" rel="stylesheet" href="./css/downstyle.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


</head>

<body>

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1><?php echo $enum; ?></h1>
            </div>
            <h2><?php echo $eheader; ?></h2>
            <p><?php echo $edesc; ?> <br /><a href="./index.php">Return to homepage</a></p>
        </div>
    </div>

</body>

</html>
