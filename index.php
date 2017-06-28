<?php
 require('includes/core.inc.php');
 
 
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <title>chat application</title>
	<link type="text/css" rel="stylesheet" href="public/css/main.css">
    </head>
    <body>
	<div id="input">
	<div id="feedback"></div>
	<form action="#" method="post" id="form_input">
            <lable>Enter Name:<input type="text" name="sender" id="sender"></lable>
            <br><lable>Enter Message:<br><textarea id="message" col="10" row="4"></textarea></lable><br>
            <input type="submit" name="send" id="send" value="Send Message">
                 </form></div>
            <div id="messages">
           
            </div>
            <script type="text/javascript" src="scripts/js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
			<script type="text/javascript" src="scripts/js/send.js"></script>
			
	</body>
</html>