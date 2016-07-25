<?php
session_start();
$data = $_POST;
$errors = array();
$success = array();
if (isset($data['submit'])) {
  if ($data['password'] == '739528b13Dorgat') {
    $success[] = "<h2>><div class='container'><div class='label label-success'>Successfly auth!</div></div></h2>";
  $_SESSION['logged_user'] = $data['password'];
  }
 else {
    (trim($data['password'] != '739258b13Dorgat'));
    $errors[] = "<h2><div class='container'><div class='label label-danger'>Wrong password!</div></div></h2>";
  }
  if ($data['password'] == '') {
    $errors[] = "<h2><div class='container'><div class='alert alert-danger'>Empty password!</div></div></h2>";
  }
echo array_shift($success);
echo array_shift($errors);
}
?>
<DOCTYPY html>
<html charset="UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<div class="container">
<br>
<br>
<body onload="digitalWatch()">
<? if (isset($_SESSION['logged_user'])):?>
<div class="well">
<br>privet! <br>Your password <input disabled type='text' class='form-control' value="<?php echo @$data['password'] ?>" style='width:auto;px;'><br>
<?php
function get_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
    ?>
<div class="input-group">
<a href='/logout' class="btn btn-danger">Log Out</a><pre id="digital_watch" style="width:80px;"></pre>
</div>
</div>
<?php else:?>
<form action='' method="post">
 <div class="input-group" style="width:400px;">
      <input type="password" class="form-control" name='password' placeholder="password">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" name='submit'>Check my password!</button>
      </span>
    </div>

</form>
<?php endif;?>
<script type="text/javascript">
  function digitalWatch() {
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    if (hours < 10) hours = "0" + hours;
    if (minutes < 10) minutes = "0" + minutes;
    if (seconds < 10) seconds = "0" + seconds;
    document.getElementById("digital_watch").innerHTML = hours + ":" + minutes + ":" + seconds;
    setTimeout("digitalWatch()", 1000);
  }
</script>
<hr>
<h4>dorgat &copy 2011 - 2016</h4>
</div>
</body>
</html>
