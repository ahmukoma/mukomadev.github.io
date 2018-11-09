<?php

$root = realpath($_SERVER['DOCUMENT_ROOT']);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact - MukomaDev</title>
		<link rel="stylesheet" type="text/css" href="/mukomadev/css/general-header-footer.css">
		<link rel="stylesheet" type="text/css" href="/mukomadev/css/web-body.css">
		<link rel="stylesheet" type="text/css" href="/mukomadev/css/logo.css">
		<link rel="stylesheet" type="text/css" href="/mukomadev/css/contact-us.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		
		<script src="/halcyon-8/js/jquery-3.2.1.js"></script>
    </head>
    
    <body>
        <div class="container">
            
            <?php include("$root/mukomadev/includes/general/header.inc.php"); ?>
            
            <div class="form-container">
                <form method="POST" action="email-process.php">
                    <h1>Fill out the form below to contact me</h1>
                    <label><span>*</span> Required field.</label>
                    <input type="text" class="text-input" placeholder="Full name *" name="name" required>
                    <input type="number" class="text-input" placeholder="Phone number *" name="number" required>
                    <input type="email" class="text-input" placeholder="Email" name="email" required>
                    <textarea placeholder="Message" name="msg"></textarea>
                    <input type="submit" value="Send" class="submit">
                </form>
            </div>
            
            <?php include("$root/mukomadev/includes/general/footer.inc.php"); ?>
            
        </div>
    </body>
    
    <script>
    </script>
</html>