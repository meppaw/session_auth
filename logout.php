<?php
session_start();
header('Refresh: 5; url=/' );
unset($_SESSION['logged_user']);
?>
<DOCTYPY html>
<html charset="UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head><br><div class="container">
<div class='well'>
<?php echo "<br><div class='alert alert-success'>You are successfly log out</div>"; ?>
<br>You redirect to home url for 3 second.
<br>
<div class='alert alert-info'>if your browser don't support auto redirect for link, use link on button <a href='/' class='btn btn-info'><div class='glyphicon glyphicon-home'></div> Home</a></div>
<hr>
<h4>dorgat &copy 2011 - 2015</h4>
</div>
</div>
